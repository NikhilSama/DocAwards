<?php
App::uses('AppController', 'Controller');
/**
 * Degrees Controller
 *
 * @property Degree $Degree
 */
class DegreesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Degree->recursive = 0;
		if (isset($this->params['ext']) && $this->params['ext'] == 'json') {
			$this->set('result', $this->Degree->find('list'));
			if (isset($this->request->query['jsonp_callback'])) {
				$this->autoLayout = $this->autoRender = false;
				$this->set('callback', $this->request->query['jsonp_callback']);
				$this->render('/Layouts/jsonp');
			} else {
				$this->set('_serialize', 'result');
			}
		} else {
			$this->set('degrees', $this->paginate());
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
		$this->Degree->id = $id;
		if (!$this->Degree->exists()) {
			throw new NotFoundException(__('Invalid degree'));
		}
		$this->set('degree', $this->Degree->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Degree->create();
			$result = false;
			if ($this->Degree->save($this->request->data)) $result = true;
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
					$this->Session->setFlash(__('The degree has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The degree could not be saved. Please, try again.'));
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
		$this->Degree->id = $id;
		if (!$this->Degree->exists()) {
			throw new NotFoundException(__('Invalid degree'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Degree->save($this->request->data)) {
				$this->Session->setFlash(__('The degree has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The degree could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Degree->read(null, $id);
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
		$this->Degree->id = $id;
		if (!$this->Degree->exists()) {
			throw new NotFoundException(__('Invalid degree'));
		}
		if ($this->Degree->delete()) {
			$this->Session->setFlash(__('Degree deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Degree was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function autocomplete () {
		$term = isset($this->request->query['term']) ? $this->request->query['term'] : null;
		$result['code'] = '200';

		$conditions = array('name LIKE' => '%'.$term.'%');
		$fields = array('id', 'name');
		$this->Degree->recursive = -1;

		$result['data'] = $this->Degree->find('all', array('fields' => $fields, 'conditions' => $conditions));
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
