<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {


    public function beforeFilter() {
        $this->Auth->allow('backbone_add', 'backbone_login', 'get_user', 'ajax_login', 'index', 'view', 'add');
    }


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

	public function backbone_add() {
		 if ($this->request->is('post')) {
                        $this->User->create();
                        if ($this->User->save($this->request->data)) {
				if ($this->Auth->login()) {
            				$this->redirect($this->referer().'/#create_profile');
                        	}
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

public function login() {
    if ($this->request->is('post')) {

        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }
}


public function backbone_login() {
    if ($this->request->is('post')) {

        if ($this->Auth->login()) {
            $this->redirect($this->referer().'#create_profile');
        } else {
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }
}

public function backbone_logout () {
	$this->Auth->logoutRedirect = $this->referer();
	$this->Auth->logout();
	$this->redirect($this->referer());
}


public function logout() {
    $this->redirect($this->Auth->logout());
}

public function ajax_login() {
    if ($this->request->is('post')) {
       if ($this->Auth->login()) {
		$user['status'] = 1;
		$user['data'] = $this->User->find('first', array(
                        'conditions' => array('id' => $this->Auth->user('id')),
                        'contain'        => array('Doctor')));
		$this->set('user', $user);
		$this->set('_serialize', 'user');
        } else {
		$user['status'] = 0;
        	if ($this->User->findByUsername($this->request->data['User']['username'])) {
			$user['user'] = $this->User->findByUsername($this->request->data['User']['username']);
			$user['error_type'] = 'pass';
		} else {
			$user['error_type'] = 'user'; 
		}
		$this->set('user', $user);
		$this->set('_serialize', 'user');
	}
    }
}

public function get_user() {
	if ($this->Auth->user('id')) {
		$result['data'] = $this->User->find('first', array(
			'conditions' => array('id' => $this->Auth->user('id')),
			'contain'	 => array('Doctor')));
		$result['data']['status'] = 1;

	} else {
		$result['data']['status'] = 0;
		$result['data']['name'] = 'You are not logged in';
	}
	$result['code'] = '200';
	$this->set('result', $result);
	$this->set('_serialize', 'result');
}

}

