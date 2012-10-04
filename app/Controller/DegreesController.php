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
		$this->set('degrees', $this->paginate());
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
			if ($this->Degree->save($this->request->data)) {
				$this->Session->setFlash(__('The degree has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The degree could not be saved. Please, try again.'));
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
}
