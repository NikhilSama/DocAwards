<?php
App::uses('AppController', 'Controller');
/**
 * DoctorContacts Controller
 *
 * @property DoctorContact $DoctorContact
 */
class DoctorContactsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DoctorContact->recursive = 0;
		$this->set('doctorContacts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->DoctorContact->id = $id;
		if (!$this->DoctorContact->exists()) {
			throw new NotFoundException(__('Invalid doctor contact'));
		}
		$this->set('doctorContact', $this->DoctorContact->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DoctorContact->create();
			if ($this->DoctorContact->save($this->request->data)) {
				$this->Session->setFlash(__('The doctor contact has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctor contact could not be saved. Please, try again.'));
			}
		}
		$doctors = $this->DoctorContact->Doctor->find('list');
		$this->set(compact('doctors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->DoctorContact->id = $id;
		if (!$this->DoctorContact->exists()) {
			throw new NotFoundException(__('Invalid doctor contact'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DoctorContact->save($this->request->data)) {
				$this->Session->setFlash(__('The doctor contact has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctor contact could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->DoctorContact->read(null, $id);
		}
		$doctors = $this->DoctorContact->Doctor->find('list');
		$this->set(compact('doctors'));
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
		$this->DoctorContact->id = $id;
		if (!$this->DoctorContact->exists()) {
			throw new NotFoundException(__('Invalid doctor contact'));
		}
		if ($this->DoctorContact->delete()) {
			$this->Session->setFlash(__('Doctor contact deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Doctor contact was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
