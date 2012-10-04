<?php
App::uses('AppController', 'Controller');
/**
 * ConsultTimings Controller
 *
 * @property ConsultTiming $ConsultTiming
 */
class ConsultTimingsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ConsultTiming->recursive = 0;
		$this->set('consultTimings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ConsultTiming->id = $id;
		if (!$this->ConsultTiming->exists()) {
			throw new NotFoundException(__('Invalid consult timing'));
		}
		$this->set('consultTiming', $this->ConsultTiming->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ConsultTiming->create();
			if ($this->ConsultTiming->save($this->request->data)) {
				$this->Session->setFlash(__('The consult timing has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consult timing could not be saved. Please, try again.'));
			}
		}
		$consultTypes = $this->ConsultTiming->ConsultType->find('list');
		$docconsultlocations = $this->ConsultTiming->Docconsultlocation->find('list');
		$this->set(compact('consultTypes', 'docconsultlocations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ConsultTiming->id = $id;
		if (!$this->ConsultTiming->exists()) {
			throw new NotFoundException(__('Invalid consult timing'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ConsultTiming->save($this->request->data)) {
				$this->Session->setFlash(__('The consult timing has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consult timing could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ConsultTiming->read(null, $id);
		}
		$consultTypes = $this->ConsultTiming->ConsultType->find('list');
		$docconsultlocations = $this->ConsultTiming->Docconsultlocation->find('list');
		$this->set(compact('consultTypes', 'docconsultlocations'));
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
		$this->ConsultTiming->id = $id;
		if (!$this->ConsultTiming->exists()) {
			throw new NotFoundException(__('Invalid consult timing'));
		}
		if ($this->ConsultTiming->delete()) {
			$this->Session->setFlash(__('Consult timing deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Consult timing was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
