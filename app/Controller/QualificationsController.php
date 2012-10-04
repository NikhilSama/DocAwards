<?php
App::uses('AppController', 'Controller');
/**
 * Qualifications Controller
 *
 * @property Qualification $Qualification
 */
class QualificationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Qualification->recursive = 0;
		$this->set('qualifications', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Qualification->id = $id;
		if (!$this->Qualification->exists()) {
			throw new NotFoundException(__('Invalid qualification'));
		}
		$this->set('qualification', $this->Qualification->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Qualification->create();
			if ($this->Qualification->save($this->request->data)) {
				$this->Session->setFlash(__('The qualification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qualification could not be saved. Please, try again.'));
			}
		}
		$doctors = $this->Qualification->Doctor->find('list');
		$degrees = $this->Qualification->Degree->find('list');
		$locations = $this->Qualification->Location->find('list');
		$this->set(compact('doctors', 'degrees', 'locations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Qualification->id = $id;
		if (!$this->Qualification->exists()) {
			throw new NotFoundException(__('Invalid qualification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Qualification->save($this->request->data)) {
				$this->Session->setFlash(__('The qualification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qualification could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Qualification->read(null, $id);
		}
		$doctors = $this->Qualification->Doctor->find('list');
		$degrees = $this->Qualification->Degree->find('list');
		$locations = $this->Qualification->Location->find('list');
		$this->set(compact('doctors', 'degrees', 'locations'));
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
		$this->Qualification->id = $id;
		if (!$this->Qualification->exists()) {
			throw new NotFoundException(__('Invalid qualification'));
		}
		if ($this->Qualification->delete()) {
			$this->Session->setFlash(__('Qualification deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Qualification was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
