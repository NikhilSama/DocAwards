<?php
App::uses('AppController', 'Controller');
/**
 * Docspeclinks Controller
 *
 * @property Docspeclink $Docspeclink
 */
class DocspeclinksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Docspeclink->recursive = 0;
		$this->set('docspeclinks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Docspeclink->id = $id;
		if (!$this->Docspeclink->exists()) {
			throw new NotFoundException(__('Invalid docspeclink'));
		}
		$this->set('docspeclink', $this->Docspeclink->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Docspeclink->create();
			if ($this->Docspeclink->save($this->request->data)) {
				$this->Session->setFlash(__('The docspeclink has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docspeclink could not be saved. Please, try again.'));
			}
		}
		$doctors = $this->Docspeclink->Doctor->find('list');
		$specialties = $this->Docspeclink->Specialty->find('list');
		$this->set(compact('doctors', 'specialties'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Docspeclink->id = $id;
		if (!$this->Docspeclink->exists()) {
			throw new NotFoundException(__('Invalid docspeclink'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Docspeclink->save($this->request->data)) {
				$this->Session->setFlash(__('The docspeclink has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docspeclink could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Docspeclink->read(null, $id);
		}
		$doctors = $this->Docspeclink->Doctor->find('list');
		$specialties = $this->Docspeclink->Specialty->find('list');
		$this->set(compact('doctors', 'specialties'));
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
		$this->Docspeclink->id = $id;
		if (!$this->Docspeclink->exists()) {
			throw new NotFoundException(__('Invalid docspeclink'));
		}
		if ($this->Docspeclink->delete()) {
			$this->Session->setFlash(__('Docspeclink deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Docspeclink was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
