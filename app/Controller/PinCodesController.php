<?php
App::uses('AppController', 'Controller');
/**
 * PinCodes Controller
 *
 * @property PinCode $PinCode
 */
class PinCodesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PinCode->recursive = 0;
		$this->set('pinCodes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PinCode->id = $id;
		if (!$this->PinCode->exists()) {
			throw new NotFoundException(__('Invalid pin code'));
		}
		$this->set('pinCode', $this->PinCode->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PinCode->create();
			if ($this->PinCode->save($this->request->data)) {
				$this->Session->setFlash(__('The pin code has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pin code could not be saved. Please, try again.'));
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
		$this->PinCode->id = $id;
		if (!$this->PinCode->exists()) {
			throw new NotFoundException(__('Invalid pin code'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PinCode->save($this->request->data)) {
				$this->Session->setFlash(__('The pin code has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pin code could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PinCode->read(null, $id);
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
		$this->PinCode->id = $id;
		if (!$this->PinCode->exists()) {
			throw new NotFoundException(__('Invalid pin code'));
		}
		if ($this->PinCode->delete()) {
			$this->Session->setFlash(__('Pin code deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pin code was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
