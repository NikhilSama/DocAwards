<?php
App::uses('AppController', 'Controller');
/**
 * Doctors Controller
 *
 * @property Doctor $Doctor
 */
class DoctorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Doctor->recursive = 0;
		$this->set('doctors', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Doctor->id = $id;
		if (!$this->Doctor->exists()) {
			throw new NotFoundException(__('Invalid doctor'));
		}
		$this->set('doctor', $this->Doctor->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Doctor->create();
			if ($this->Doctor->save($this->request->data)) {
				$this->Session->setFlash(__('The doctor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctor could not be saved. Please, try again.'));
			}
		}
		$users = $this->Doctor->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Doctor->id = $id;
		if (!$this->Doctor->exists()) {
			throw new NotFoundException(__('Invalid doctor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Doctor->save($this->request->data)) {
				$this->Session->setFlash(__('The doctor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctor could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Doctor->read(null, $id);
		}
		$users = $this->Doctor->User->find('list');
		$this->set(compact('users'));
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
		$this->Doctor->id = $id;
		if (!$this->Doctor->exists()) {
			throw new NotFoundException(__('Invalid doctor'));
		}
		if ($this->Doctor->delete()) {
			$this->Session->setFlash(__('Doctor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Doctor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
