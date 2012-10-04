<?php
App::uses('AppController', 'Controller');
/**
 * Consultlocationtypes Controller
 *
 * @property Consultlocationtype $Consultlocationtype
 */
class ConsultlocationtypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Consultlocationtype->recursive = 0;
		$this->set('consultlocationtypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Consultlocationtype->id = $id;
		if (!$this->Consultlocationtype->exists()) {
			throw new NotFoundException(__('Invalid consultlocationtype'));
		}
		$this->set('consultlocationtype', $this->Consultlocationtype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Consultlocationtype->create();
			if ($this->Consultlocationtype->save($this->request->data)) {
				$this->Session->setFlash(__('The consultlocationtype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consultlocationtype could not be saved. Please, try again.'));
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
		$this->Consultlocationtype->id = $id;
		if (!$this->Consultlocationtype->exists()) {
			throw new NotFoundException(__('Invalid consultlocationtype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Consultlocationtype->save($this->request->data)) {
				$this->Session->setFlash(__('The consultlocationtype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consultlocationtype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Consultlocationtype->read(null, $id);
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
		$this->Consultlocationtype->id = $id;
		if (!$this->Consultlocationtype->exists()) {
			throw new NotFoundException(__('Invalid consultlocationtype'));
		}
		if ($this->Consultlocationtype->delete()) {
			$this->Session->setFlash(__('Consultlocationtype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Consultlocationtype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
