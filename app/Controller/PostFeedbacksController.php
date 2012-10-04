<?php
App::uses('AppController', 'Controller');
/**
 * PostFeedbacks Controller
 *
 * @property PostFeedback $PostFeedback
 */
class PostFeedbacksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PostFeedback->recursive = 0;
		$this->set('postFeedbacks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PostFeedback->id = $id;
		if (!$this->PostFeedback->exists()) {
			throw new NotFoundException(__('Invalid post feedback'));
		}
		$this->set('postFeedback', $this->PostFeedback->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PostFeedback->create();
			if ($this->PostFeedback->save($this->request->data)) {
				$this->Session->setFlash(__('The post feedback has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post feedback could not be saved. Please, try again.'));
			}
		}
		$posts = $this->PostFeedback->Post->find('list');
		$users = $this->PostFeedback->User->find('list');
		$this->set(compact('posts', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PostFeedback->id = $id;
		if (!$this->PostFeedback->exists()) {
			throw new NotFoundException(__('Invalid post feedback'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PostFeedback->save($this->request->data)) {
				$this->Session->setFlash(__('The post feedback has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post feedback could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PostFeedback->read(null, $id);
		}
		$posts = $this->PostFeedback->Post->find('list');
		$users = $this->PostFeedback->User->find('list');
		$this->set(compact('posts', 'users'));
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
		$this->PostFeedback->id = $id;
		if (!$this->PostFeedback->exists()) {
			throw new NotFoundException(__('Invalid post feedback'));
		}
		if ($this->PostFeedback->delete()) {
			$this->Session->setFlash(__('Post feedback deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Post feedback was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
