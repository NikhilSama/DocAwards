<?php
App::uses('AppController', 'Controller');
/**
 * Specialtydiseaselinktypes Controller
 *
 * @property Specialtydiseaselinktype $Specialtydiseaselinktype
 */
class SpecialtydiseaselinktypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Specialtydiseaselinktype->recursive = 0;
		$this->set('specialtydiseaselinktypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Specialtydiseaselinktype->id = $id;
		if (!$this->Specialtydiseaselinktype->exists()) {
			throw new NotFoundException(__('Invalid specialtydiseaselinktype'));
		}
		$this->set('specialtydiseaselinktype', $this->Specialtydiseaselinktype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Specialtydiseaselinktype->create();
			if ($this->Specialtydiseaselinktype->save($this->request->data)) {
				$this->Session->setFlash(__('The specialtydiseaselinktype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The specialtydiseaselinktype could not be saved. Please, try again.'));
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
		$this->Specialtydiseaselinktype->id = $id;
		if (!$this->Specialtydiseaselinktype->exists()) {
			throw new NotFoundException(__('Invalid specialtydiseaselinktype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Specialtydiseaselinktype->save($this->request->data)) {
				$this->Session->setFlash(__('The specialtydiseaselinktype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The specialtydiseaselinktype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Specialtydiseaselinktype->read(null, $id);
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
		$this->Specialtydiseaselinktype->id = $id;
		if (!$this->Specialtydiseaselinktype->exists()) {
			throw new NotFoundException(__('Invalid specialtydiseaselinktype'));
		}
		if ($this->Specialtydiseaselinktype->delete()) {
			$this->Session->setFlash(__('Specialtydiseaselinktype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Specialtydiseaselinktype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
