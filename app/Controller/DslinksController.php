<?php
App::uses('AppController', 'Controller');
/**
 * Dslinks Controller
 *
 * @property Dslink $Dslink
 */
class DslinksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dslink->recursive = 0;
		$this->set('dslinks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Dslink->id = $id;
		if (!$this->Dslink->exists()) {
			throw new NotFoundException(__('Invalid dslink'));
		}
		$this->set('dslink', $this->Dslink->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dslink->create();
			if ($this->Dslink->save($this->request->data)) {
				$this->Session->setFlash(__('The dslink has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dslink could not be saved. Please, try again.'));
			}
		}
		$specialties = $this->Dslink->Specialty->find('list');
		$diseases = $this->Dslink->Disease->find('list');
		$specialtydiseaselinktypes = $this->Dslink->Specialtydiseaselinktype->find('list');
		$this->set(compact('specialties', 'diseases', 'specialtydiseaselinktypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Dslink->id = $id;
		if (!$this->Dslink->exists()) {
			throw new NotFoundException(__('Invalid dslink'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Dslink->save($this->request->data)) {
				$this->Session->setFlash(__('The dslink has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dslink could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Dslink->read(null, $id);
		}
		$specialties = $this->Dslink->Specialty->find('list');
		$diseases = $this->Dslink->Disease->find('list');
		$specialtydiseaselinktypes = $this->Dslink->Specialtydiseaselinktype->find('list');
		$this->set(compact('specialties', 'diseases', 'specialtydiseaselinktypes'));
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
		$this->Dslink->id = $id;
		if (!$this->Dslink->exists()) {
			throw new NotFoundException(__('Invalid dslink'));
		}
		if ($this->Dslink->delete()) {
			$this->Session->setFlash(__('Dslink deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dslink was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
