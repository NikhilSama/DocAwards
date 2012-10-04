<?php
App::uses('AppController', 'Controller');
/**
 * QuestionFollowers Controller
 *
 * @property QuestionFollower $QuestionFollower
 */
class QuestionFollowersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->QuestionFollower->recursive = 0;
		$this->set('questionFollowers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->QuestionFollower->id = $id;
		if (!$this->QuestionFollower->exists()) {
			throw new NotFoundException(__('Invalid question follower'));
		}
		$this->set('questionFollower', $this->QuestionFollower->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QuestionFollower->create();
			if ($this->QuestionFollower->save($this->request->data)) {
				$this->Session->setFlash(__('The question follower has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question follower could not be saved. Please, try again.'));
			}
		}
		$questions = $this->QuestionFollower->Question->find('list');
		$users = $this->QuestionFollower->User->find('list');
		$this->set(compact('questions', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->QuestionFollower->id = $id;
		if (!$this->QuestionFollower->exists()) {
			throw new NotFoundException(__('Invalid question follower'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->QuestionFollower->save($this->request->data)) {
				$this->Session->setFlash(__('The question follower has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question follower could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->QuestionFollower->read(null, $id);
		}
		$questions = $this->QuestionFollower->Question->find('list');
		$users = $this->QuestionFollower->User->find('list');
		$this->set(compact('questions', 'users'));
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
		$this->QuestionFollower->id = $id;
		if (!$this->QuestionFollower->exists()) {
			throw new NotFoundException(__('Invalid question follower'));
		}
		if ($this->QuestionFollower->delete()) {
			$this->Session->setFlash(__('Question follower deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Question follower was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
