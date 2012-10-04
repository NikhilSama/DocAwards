<?php
App::uses('AppController', 'Controller');
/**
 * Docconsultlocations Controller
 *
 * @property Docconsultlocation $Docconsultlocation
 */
class DocconsultlocationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Docconsultlocation->recursive = 0;
		$this->set('docconsultlocations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Docconsultlocation->id = $id;
		if (!$this->Docconsultlocation->exists()) {
			throw new NotFoundException(__('Invalid docconsultlocation'));
		}
		$this->set('docconsultlocation', $this->Docconsultlocation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Docconsultlocation->create();
			if ($this->Docconsultlocation->save($this->request->data)) {
				$this->Session->setFlash(__('The docconsultlocation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docconsultlocation could not be saved. Please, try again.'));
			}
		}
		$locations = $this->Docconsultlocation->Location->find('list');
		$doctors = $this->Docconsultlocation->Doctor->find('list');
		$consultlocationtypes = $this->Docconsultlocation->Consultlocationtype->find('list');
		$this->set(compact('locations', 'doctors', 'consultlocationtypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Docconsultlocation->id = $id;
		if (!$this->Docconsultlocation->exists()) {
			throw new NotFoundException(__('Invalid docconsultlocation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Docconsultlocation->save($this->request->data)) {
				$this->Session->setFlash(__('The docconsultlocation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docconsultlocation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Docconsultlocation->read(null, $id);
		}
		$locations = $this->Docconsultlocation->Location->find('list');
		$doctors = $this->Docconsultlocation->Doctor->find('list');
		$consultlocationtypes = $this->Docconsultlocation->Consultlocationtype->find('list');
		$this->set(compact('locations', 'doctors', 'consultlocationtypes'));
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
		$this->Docconsultlocation->id = $id;
		if (!$this->Docconsultlocation->exists()) {
			throw new NotFoundException(__('Invalid docconsultlocation'));
		}
		if ($this->Docconsultlocation->delete()) {
			$this->Session->setFlash(__('Docconsultlocation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Docconsultlocation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
