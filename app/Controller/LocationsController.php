<?php
App::uses('AppController', 'Controller');
/**
 * Locations Controller
 *
 * @property Location $Location
 */
class LocationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Location->recursive = 0;
		if (isset($this->params['ext']) && $this->params['ext'] == 'json') {
			$result['code'] = '200';
			$result['data'] = $this->Location->find('list');
			$this->set('result', $result);
			if (isset($this->request->query['jsonp_callback'])) {
				$this->autoLayout = $this->autoRender = false;
				$this->set('callback', $this->request->query['jsonp_callback']);
				$this->render('/Layouts/jsonp');
			} else {
				$this->set('_serialize', 'result');
			}
		} else {
			$this->set('locations', $this->paginate());
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
		$this->Location->id = $id;
		if (!$this->Location->exists()) {
			throw new NotFoundException(__('Invalid location'));
		}
		$this->set('location', $this->Location->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Location->create();
			$result = false;
			if ($this->Location->save($this->request->data)) {
				$result['code'] = '200';
				$result['data'] = $this->Location->find('list');
			} else {
				$result['code'] = '0';
				$result['name'] = $this->Session->read('Message.flash');
			} 
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
				if ($result['code'] == '200') {
					$this->Session->setFlash(__('The location has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The location could not be saved. Please, try again.'));
				}
			}
		}
		if (!(isset($this->params['ext']) && $this->params['ext'] == 'json')) {
			$cities = $this->Location->City->find('list');
			$countries = $this->Location->Country->find('list');
			$pinCodes = $this->Location->PinCode->find('list');
			$this->set(compact('cities', 'countries', 'pinCodes'));
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
		$this->Location->id = $id;
		if (!$this->Location->exists()) {
			throw new NotFoundException(__('Invalid location'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Location->save($this->request->data)) {
				$this->Session->setFlash(__('The location has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The location could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Location->read(null, $id);
		}
		$cities = $this->Location->City->find('list');
		$countries = $this->Location->Country->find('list');
		$pinCodes = $this->Location->PinCode->find('list');
		$this->set(compact('cities', 'countries', 'pinCodes'));
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
		$this->Location->id = $id;
		if (!$this->Location->exists()) {
			throw new NotFoundException(__('Invalid location'));
		}
		if ($this->Location->delete()) {
			$this->Session->setFlash(__('Location deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Location was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
