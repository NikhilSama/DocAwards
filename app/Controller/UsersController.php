<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {


    public function beforeFilter() {
        $this->Auth->allow('backbone_add', 'backbone_login', 'ajax_login', 'index', 'view', 'add');
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
                			$this->log("sending to ".$this->request->data['success_redirect'].'?user_id='.$this->Auth->user('id'));
            				$this->redirect($this->request->data['success_redirect'].'?user_id='.$this->Auth->user('id'));
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
        $this->log($this->request->data);

        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }
}


public function backbone_login() {
    if ($this->request->is('post')) {
        $this->log($this->request->data);

        if ($this->Auth->login()) {
		$this->log("sending to ".$this->request->data['success_redirect'].'?user_id='.$this->Auth->user('id'));
            $this->redirect($this->request->data['success_redirect'].'?user_id='.$this->Auth->user('id'));
        } else {
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }
}


public function logout() {
    $this->redirect($this->Auth->logout());
}

public function ajax_login() {
    if ($this->request->is('post')) {
	$this->log($this->request->data); 
       if ($this->Auth->login()) {
		$this->set('user', $this->User->read('id', $this->Auth->user('id')));
		$this->set('_serialize', 'user');
        } else {
        	$this->set('user', -1);
		$this->set('_serialize', 'user');
	}
    }
}

public function get_user_id() {
	$this->set('user_id', $this->Auth->user('id'));
	$this->set('_serialize', 'user_id');
}


}

