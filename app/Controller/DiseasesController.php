<?php
App::uses('AppController', 'Controller');
/**
 * Diseases Controller
 *
 * @property Disease $Disease
 */
class DiseasesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Disease->recursive = 0;
		$this->set('diseases', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Disease->id = $id;
		if (!$this->Disease->exists()) {
			throw new NotFoundException(__('Invalid disease'));
		}
		$this->set('disease', $this->Disease->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Disease->create();
			if ($this->Disease->save($this->request->data)) {
				$this->Session->setFlash(__('The disease has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disease could not be saved. Please, try again.'));
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
		$this->Disease->id = $id;
		if (!$this->Disease->exists()) {
			throw new NotFoundException(__('Invalid disease'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Disease->save($this->request->data)) {
				$this->Session->setFlash(__('The disease has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disease could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Disease->read(null, $id);
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
		$this->Disease->id = $id;
		if (!$this->Disease->exists()) {
			throw new NotFoundException(__('Invalid disease'));
		}
		if ($this->Disease->delete()) {
			$this->Session->setFlash(__('Disease deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Disease was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
