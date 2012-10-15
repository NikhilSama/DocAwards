<?php
App::uses('AppController', 'Controller');
/**
 * Doctors Controller
 *
 * @property Doctor $Doctor
 */
class DoctorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Doctor->recursive = 0;
		$this->set('doctors', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Doctor->id = $id;
		if (!$this->Doctor->exists()) {
			throw new NotFoundException(__('Invalid doctor'));
		}
		$this->set('doctor', $this->Doctor->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$file_name
			= 'profile_pics/'.$this->request->data['Doctor']['last_name'].$this->request->data['Doctor']['first_name'].
			str_replace(" ","_", $this->request->data['Doctor']['image']['name']);
			copy($this->request->data['Doctor']['image']['tmp_name'], $file_name);
			$this->request->data['Doctor']['image'] = $file_name;
			$this->Doctor->create();
			if ($this->Doctor->save($this->request->data)) {
				$this->Session->setFlash(__('The doctor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctor could not be saved. Please, try again.'));
			}
		}
		$users = $this->Doctor->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Doctor->id = $id;
		if (!$this->Doctor->exists()) {
			throw new NotFoundException(__('Invalid doctor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if (isset($this->request->data['Doctor']['image']['name']) &&
			    $this->request->data['Doctor']['image']['name']) {
				$file_name
					= 'profile_pics/'.$this->request->data['Doctor']['last_name'].$this->request->data['Doctor']['first_name'].
						str_replace(" ","_", $this->request->data['Doctor']['image']['name']);
				copy($this->request->data['Doctor']['image']['tmp_name'], $file_name);
				$this->request->data['Doctor']['image'] = $file_name;

			} else {
				unset($this->request->data['Doctor']['image']);
			}
			if ($this->Doctor->save($this->request->data)) {
				$this->Session->setFlash(__('The doctor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctor could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Doctor->read(null, $id);
		}
		$users = $this->Doctor->User->find('list');
		$this->set(compact('users'));
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
		$this->Doctor->id = $id;
		if (!$this->Doctor->exists()) {
			throw new NotFoundException(__('Invalid doctor'));
		}
		if ($this->Doctor->delete()) {
			$this->Session->setFlash(__('Doctor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Doctor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function get_doctors() {
		$disease_id = isset($this->request->query['disease_id']) ? $this->request->query['disease_id'] : null;
		$specialty_id = isset($this->request->query['specialty_id']) ? $this->request->query['specialty_id'] : null;
		$doctor_id = isset($this->request->query['doctor_id']) ? $this->request->query['doctor_id'] : null;
		$lat = isset($this->request->query['latitude']) ? $this->request->query['latitude'] : null;
		$long = isset($this->request->query['longitude']) ? $this->request->query['longitude'] : null;
		$conditions = array();	
		
		//geo restrictions first
		if ($lat && $long) {
			$geo_conditions = array('Location.lat <' => $lat + SEARCH_RADIUS_IN_LAT_DEGREE,
							'Location.lat >' => $lat - SEARCH_RADIUS_IN_LAT_DEGREE,
							'Location.long <' => $long + SEARCH_RADIUS_IN_LONG_DEGREE,
							'Location.long >' => $long - SEARCH_RADIUS_IN_LONG_DEGREE);
			$contain = array('Docconsultlocation' =>
					 array('fields' => array('id'),
					       'Doctor' => array('id')));
			$locations = $this->Doctor->Docconsultlocation->Location->find('all', array('fields' => array('id'),
						'contain' => $contain, 'conditions' => $geo_conditions));
			//echo debug($locations);
			$doc_ids_to_get = array();
			foreach($locations as $location) {
				foreach ($location['Docconsultlocation'] as $doclocation) {
	 				array_push($doc_ids_to_get, $doclocation['Doctor']['id']);
				}
			}
			//echo debug($doc_ids_to_get);
			array_push($conditions, array('Doctor.id' => $doc_ids_to_get));
			
		}
		
		if ($disease_id) {}
		
		if ($specialty_id) {}
		
		if ($doctor_id) {
			$conditions = array('Doctor.id' => $doctor_id);
		}
		$contain = array ('Docconsultlocation' =>
				array('fields' => array('addl'),
				      'Consultlocationtype' => array('fields' => array('name')),
				      'Location' => array('fields' => array('id', 'name', 'address', 'lat', 'long'),
							  'Country' => array('fields' => array('name')),
							  'City' => array('fields' => array('name')),
							  'PinCode' => array('fields' => array('pin_code')))
				      ));
		

		$fields = array('id', 'first_name', 'middle_name', 'last_name');		
		$doctors = $this->Doctor->find('all', array('fields' => $fields,
			'contain' => $contain, 'conditions' => $conditions));
		//echo debug($conditions);
		//echo debug($doctors);
		$this->set('result', $doctors);
		if (isset($this->request->query['jsonp_callback'])) {
			$this->autoLayout = $this->autoRender = false;
			$this->set('callback', $this->request->query['jsonp_callback']);
			$this->render('/layouts/jsonp');
		} else {
			$this->set('_serialize', 'result');
		}
	}
}
