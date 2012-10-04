<?php
App::uses('AppController', 'Controller');
/**
 * UserFollowers Controller
 *
 * @property UserFollower $UserFollower
 */
class UserFollowersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserFollower->recursive = 0;
		$this->set('userFollowers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UserFollower->id = $id;
		if (!$this->UserFollower->exists()) {
			throw new NotFoundException(__('Invalid user follower'));
		}
		$this->set('userFollower', $this->UserFollower->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserFollower->create();
			if ($this->UserFollower->save($this->request->data)) {
				$this->Session->setFlash(__('The user follower has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user follower could not be saved. Please, try again.'));
			}
		}
		$sourceUsers = $this->UserFollower->SourceUser->find('list');
		$followerUsers = $this->UserFollower->FollowerUser->find('list');
		$this->set(compact('sourceUsers', 'followerUsers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->UserFollower->id = $id;
		if (!$this->UserFollower->exists()) {
			throw new NotFoundException(__('Invalid user follower'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserFollower->save($this->request->data)) {
				$this->Session->setFlash(__('The user follower has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user follower could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->UserFollower->read(null, $id);
		}
		$sourceUsers = $this->UserFollower->SourceUser->find('list');
		$followerUsers = $this->UserFollower->FollowerUser->find('list');
		$this->set(compact('sourceUsers', 'followerUsers'));
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
		$this->UserFollower->id = $id;
		if (!$this->UserFollower->exists()) {
			throw new NotFoundException(__('Invalid user follower'));
		}
		if ($this->UserFollower->delete()) {
			$this->Session->setFlash(__('User follower deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User follower was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
