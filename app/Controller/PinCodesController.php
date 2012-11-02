<?php
App::uses('AppController', 'Controller');
/**
 * PinCodes Controller
 *
 * @property PinCode $PinCode
 */
class PinCodesController extends AppController {

    public function beforeFilter() {
        $this->Auth->allow('autocomplete');
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PinCode->recursive = 0;
		if (isset($this->params['ext']) && $this->params['ext'] == 'json') {
			$this->set('result', $this->PinCode->find('list'));
			if (isset($this->request->query['jsonp_callback'])) {
				$this->autoLayout = $this->autoRender = false;
				$this->set('callback', $this->request->query['jsonp_callback']);
				$this->render('/Layouts/jsonp');
			} else {
				$this->set('_serialize', 'result');
			}
		} else {
			$this->set('pinCodes', $this->paginate());
		}
	}
	public function ws_add() {
		$this->request->data['PinCode']['pin_code'] = $this->request->data['PinCode']['name'];
		$this->request->data['PinCode']['city'] = '';
		parent::ws_add();
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PinCode->id = $id;
		if (!$this->PinCode->exists()) {
			throw new NotFoundException(__('Invalid pin code'));
		}
		$this->set('pinCode', $this->PinCode->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PinCode->create();
			$result = false; 
			if ($this->PinCode->save($this->request->data)) $result = true;
			if (isset($this->params['ext']) && $this->params['ext'] == 'json') {
				$this->set('result', array('result' => $result));
				if (isset($this->request->query['jsonp_callback'])) {
					$this->autoLayout = $this->autoRender = false;
					$this->set('callback', $this->request->query['jsonp_callback']);
					$this->render('/Layouts/jsonp');
				} else {
					$this->set('_serialize', 'result');
				}
			} else {	
				if ($result) {
					$this->Session->setFlash(__('The pin code has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The pin code could not be saved. Please, try again.'));
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
		$this->PinCode->id = $id;
		if (!$this->PinCode->exists()) {
			throw new NotFoundException(__('Invalid pin code'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PinCode->save($this->request->data)) {
				$this->Session->setFlash(__('The pin code has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pin code could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PinCode->read(null, $id);
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
		$this->PinCode->id = $id;
		if (!$this->PinCode->exists()) {
			throw new NotFoundException(__('Invalid pin code'));
		}
		if ($this->PinCode->delete()) {
			$this->Session->setFlash(__('Pin code deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pin code was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	// autocomplete now in AppController
	// public function autocomplete() {
	// 	$result = array('status' => 1, 'message' => '', 'data' => array());
	// 	$term = isset($this->request->query['term']) ? $this->request->query['term'] : null;
	// 	$conditions = array(); 

	// 	if ($term) {
	// 		if (is_numeric($term)) {
	// 			$conditions = array('pin_code LIKE' => $term.'%');
	// 		} else {
	// 			$conditions = array("OR" => array(
	// 				'state LIKE' => '%'.$term.'%',
	// 				'Region2 LIKE' => '%'.$term.'%',
	// 				'Region3 LIKE' => '%'.$term.'%',
	// 				'city LIKE' => '%'.$term.'%',
	// 				'Area1 LIKE' => '%'.$term.'%',
	// 				'Area2 LIKE' => '%'.$term.'%',
	// 				'Region4 LIKE' => '%'.$term.'%'));
	// 		}
	// 	} else {
	// 		$result['status'] = 0;
	// 		$result['message'] = 'Please specify a search term.';
	// 	}

	// 	if ($result['status']) {
	// 		$this->PinCode->recursive = -1;
	// 		$result['data'] = $this->PinCode->find('list', array(
	// 			'conditions' => $conditions, 
	// 			'limit' => 1000));
	// 	}

	// 	$this->set('result', $result);
	// 	if (isset($this->request->query['jsonp_callback'])) {
	// 		$this->autoLayout = $this->autoRender = false;
	// 		$this->set('callback', $this->request->query['jsonp_callback']);
	// 		$this->render('/Layouts/jsonp');
	// 	} else {
	// 		$this->set('_serialize', 'result');
	// 	}
	// }
}
