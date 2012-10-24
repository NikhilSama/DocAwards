<?php
App::uses('AppController', 'Controller');
/**
 * Countries Controller
 *
 * @property Country $Country
 */
class CountriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Country->recursive = 0;
		if (isset($this->params['ext']) && $this->params['ext'] == 'json') {
			$this->set('result', $this->Country->find('list'));
			if (isset($this->request->query['jsonp_callback'])) {
				$this->autoLayout = $this->autoRender = false;
				$this->set('callback', $this->request->query['jsonp_callback']);
				$this->render('/Layouts/jsonp');
			} else {
				$this->set('_serialize', 'result');
			}
		} else {
			$this->set('countries', $this->paginate());
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
		$this->Country->id = $id;
		if (!$this->Country->exists()) {
			throw new NotFoundException(__('Invalid country'));
		}
		$this->set('country', $this->Country->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Country->create();
			$result = false;
			if ($this->Country->save($this->request->data)) $result = true;
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
					$this->Session->setFlash(__('The country has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The country could not be saved. Please, try again.'));
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
		$this->Country->id = $id;
		if (!$this->Country->exists()) {
			throw new NotFoundException(__('Invalid country'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Country->save($this->request->data)) {
				$this->Session->setFlash(__('The country has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The country could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Country->read(null, $id);
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
		$this->Country->id = $id;
		if (!$this->Country->exists()) {
			throw new NotFoundException(__('Invalid country'));
		}
		if ($this->Country->delete()) {
			$this->Session->setFlash(__('Country deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Country was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
