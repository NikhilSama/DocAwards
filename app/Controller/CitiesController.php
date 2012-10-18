<?php
App::uses('AppController', 'Controller');
/**
 * Cities Controller
 *
 * @property City $City
 */
class CitiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->City->recursive = 0;
		if (isset($this->params['ext']) && $this->params['ext'] == 'json') {
			$this->set('result', $this->City->find('list'));
			if (isset($this->request->query['jsonp_callback'])) {
				$this->autoLayout = $this->autoRender = false;
				$this->set('callback', $this->request->query['jsonp_callback']);
				$this->render('/Layouts/jsonp');
			} else {
				$this->set('_serialize', 'result');
			}
		} else {
			$this->set('cities', $this->paginate());
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
		$this->City->id = $id;
		if (!$this->City->exists()) {
			throw new NotFoundException(__('Invalid city'));
		}
		$this->set('city', $this->City->read(null, $id));
		
		if (isset($this->request->query['jsonp_callback'])) {
			$this->autoLayout = $this->autoRender = false;
			$this->set('callback', $this->request->query['jsonp_callback']);
			$this->render('/Layouts/jsonp');
		} else {
			$this->set('_serialize', 'result');
		}

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->City->create();
			$result = false;
			if ($this->City->save($this->request->data)) $result = true;
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
					$this->Session->setFlash(__('The city has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The city could not be saved. Please, try again.'));
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
		$this->City->id = $id;
		if (!$this->City->exists()) {
			throw new NotFoundException(__('Invalid city'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->City->save($this->request->data)) {
				$this->Session->setFlash(__('The city has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The city could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->City->read(null, $id);
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
		$this->City->id = $id;
		if (!$this->City->exists()) {
			throw new NotFoundException(__('Invalid city'));
		}
		if ($this->City->delete()) {
			$this->Session->setFlash(__('City deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('City was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
