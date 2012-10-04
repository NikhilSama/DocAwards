<?php
App::uses('AppController', 'Controller');
/**
 * Specialties Controller
 *
 * @property Specialty $Specialty
 */
class SpecialtiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Specialty->recursive = 0;
		$this->set('specialties', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Specialty->id = $id;
		if (!$this->Specialty->exists()) {
			throw new NotFoundException(__('Invalid specialty'));
		}
		$this->set('specialty', $this->Specialty->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Specialty->create();
			if ($this->Specialty->save($this->request->data)) {
				$this->Session->setFlash(__('The specialty has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The specialty could not be saved. Please, try again.'));
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
		$this->Specialty->id = $id;
		if (!$this->Specialty->exists()) {
			throw new NotFoundException(__('Invalid specialty'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Specialty->save($this->request->data)) {
				$this->Session->setFlash(__('The specialty has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The specialty could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Specialty->read(null, $id);
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
		$this->Specialty->id = $id;
		if (!$this->Specialty->exists()) {
			throw new NotFoundException(__('Invalid specialty'));
		}
		if ($this->Specialty->delete()) {
			$this->Session->setFlash(__('Specialty deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Specialty was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
