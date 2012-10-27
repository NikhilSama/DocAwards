<?php
App::uses('AppController', 'Controller');
/**
 * Specialties Controller
 *
 * @property Specialty $Specialty
 */
class SpecialtiesController extends AppController {

    public function beforeFilter() {
        $this->Auth->allow('autocomplete');
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Specialty->recursive = 0;
		if (isset($this->params['ext']) && $this->params['ext'] == 'json') {
			$this->set('result', $this->Specialty->find('list'));
			if (isset($this->request->query['jsonp_callback'])) {
				$this->autoLayout = $this->autoRender = false;
				$this->set('callback', $this->request->query['jsonp_callback']);
				$this->render('/Layouts/jsonp');
			} else {
				$this->set('_serialize', 'result');
			}
		} else {
			$this->set('specialties', $this->paginate());
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Specialty->id = $id;
		if (!$this->Specialty->exists()) {
			throw new NotFoundException(__('Invalid specialty'));
		}
		if (isset($this->params['ext']) && $this->params['ext'] == 'json') {
			$this->set('result', $this->Specialty->read(null, $id));
			if (isset($this->request->query['jsonp_callback'])) {
				$this->autoLayout = $this->autoRender = false;
				$this->set('callback', $this->request->query['jsonp_callback']);
				$this->render('/Layouts/jsonp');
			} else {
				$this->set('_serialize', 'result');
			}
		} else {
			$this->set('specialty', $this->Specialty->read(null, $id));
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Specialty->create();
			$result = false;
			if ($this->Specialty->save($this->request->data)) $result = $this->Specialty->find('list'); 
			
			if (isset($this->params['ext']) && $this->params['ext'] == 'json') {
				$this->set('result', array('result' => $result));
				if (isset($this->request->query['jsonp_callback'])) {
					$this->autoLayout = $this->autoRender = false;
					$this->set('callback', $this->request->query['jsonp_callback']);
					$this->render('/Layouts/jsonp');
				} else {
					$this->set('_serialize', 'result');
				}
			} else {
				if ($result) {
					$this->Session->setFlash(__('The specialty has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The specialty could not be saved. Please, try again.'));
				}
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Specialty->id = $id;
		if (!$this->Specialty->exists()) {
			throw new NotFoundException(__('Invalid specialty'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$result = false;
			if ($this->Specialty->save($this->request->data)) $result = true;
			
			if (isset($this->params['ext']) && $this->params['ext'] == 'json') {
				$this->set('result', array('result' => $result));
				if (isset($this->request->query['jsonp_callback'])) {
					$this->autoLayout = $this->autoRender = false;
					$this->set('callback', $this->request->query['jsonp_callback']);
					$this->render('/Layouts/jsonp');
				} else {
					$this->set('_serialize', 'result');
				}
			} else {
				if ($result) {
					$this->Session->setFlash(__('The specialty has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The specialty could not be saved. Please, try again.'));
				}
			}
		} else {
			$this->request->data = $this->Specialty->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Specialty->id = $id;
		if (!$this->Specialty->exists()) {
			throw new NotFoundException(__('Invalid specialty'));
		}
		$result = false;
		if ($this->Specialty->delete()) $result = true;
		
		if (isset($this->params['ext']) && $this->params['ext'] == 'json') {
			$this->set('result', array('result' => $result));
			if (isset($this->request->query['jsonp_callback'])) {
				$this->autoLayout = $this->autoRender = false;
				$this->set('callback', $this->request->query['jsonp_callback']);
				$this->render('/Layouts/jsonp');
			} else {
				$this->set('_serialize', 'result');
			}
		} else {
			$this->Session->setFlash(__('Specialty deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Specialty was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function autocomplete () {
		$term = isset($this->request->query['term']) ? $this->request->query['term'] : null;
		$result['search_term'] = $term;
		
		if ($term) {
			$specialties_disease_conditions = array("OR" => array(
				'name LIKE' => '%'.$term.'%',
				'description LIKE' => '%'.$term.'%'));
			
			$doctors_conditions = array("OR" => array(
				'first_name LIKE' => '%'.$term.'%',
				'middle_name LIKE' => '%'.$term.'%',
				'last_name LIKE' => '%'.$term.'%'));
		} else {
			//Return all specialties and doctors and diseases
			$specialties_disease_conditions = $doctors_conditions = array();
		}
		
		$this->Specialty->recursive = -1;
		$result['specialties'] = $this->Specialty->find('all',
			array('fields' => array('id', 'name', 'description'),
			      'conditions' => $specialties_disease_conditions));

		$this->Specialty->Dslink->Disease->recursive = -1;
		$result['diseases'] = $this->Specialty->Dslink->Disease->find('all',
			array('fields' => array('id', 'name', 'description'),
			      'conditions' => $specialties_disease_conditions));

		$this->Specialty->Docspeclink->Doctor->recursive = -1;
		$result['doctors'] = $this->Specialty->Docspeclink->Doctor->find('all',
			array('fields' => array('id', 'first_name', 'middle_name', 'last_name'),
			      'conditions' => $doctors_conditions));
		
		$this->set('result', $result);
		
		if (isset($this->request->query['jsonp_callback'])) {
			$this->autoLayout = $this->autoRender = false;
			$this->set('callback', $this->request->query['jsonp_callback']);
			$this->render('/Layouts/jsonp');
		} else {
			$this->set('_serialize', 'result');
		}
	}
}

