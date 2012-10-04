<?php
App::uses('AppController', 'Controller');
/**
 * ConsultTypes Controller
 *
 * @property ConsultType $ConsultType
 */
class ConsultTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ConsultType->recursive = 0;
		$this->set('consultTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ConsultType->id = $id;
		if (!$this->ConsultType->exists()) {
			throw new NotFoundException(__('Invalid consult type'));
		}
		$this->set('consultType', $this->ConsultType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ConsultType->create();
			if ($this->ConsultType->save($this->request->data)) {
				$this->Session->setFlash(__('The consult type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consult type could not be saved. Please, try again.'));
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
		$this->ConsultType->id = $id;
		if (!$this->ConsultType->exists()) {
			throw new NotFoundException(__('Invalid consult type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ConsultType->save($this->request->data)) {
				$this->Session->setFlash(__('The consult type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consult type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ConsultType->read(null, $id);
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
		$this->ConsultType->id = $id;
		if (!$this->ConsultType->exists()) {
			throw new NotFoundException(__('Invalid consult type'));
		}
		if ($this->ConsultType->delete()) {
			$this->Session->setFlash(__('Consult type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Consult type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
