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
		$conditions = $doc_ids_to_get_geo = $doc_ids_to_get_dis = $doc_ids_to_get_sp = array();


		//geo restrictions first
		if ($lat && $long) {
			$geo_conditions = array('Location.lat <' => $lat + SEARCH_RADIUS_IN_LAT_DEGREE,
							'Location.lat >' => $lat - SEARCH_RADIUS_IN_LAT_DEGREE,
							'Location.long <' => $long + SEARCH_RADIUS_IN_LONG_DEGREE,
							'Location.long >' => $long - SEARCH_RADIUS_IN_LONG_DEGREE);
			$contain = array('Docconsultlocation' =>
					 array('fields' => array('id', 'doctor_id')));
			$locations = $this->Doctor->Docconsultlocation->Location->find('all', array('fields' => array('id'),
						'contain' => $contain, 'conditions' => $geo_conditions));
			foreach($locations as $location) {
				foreach ($location['Docconsultlocation'] as $doclocation) {
	 				array_push($doc_ids_to_get_geo, $doclocation['doctor_id']);
				}
			}			
		}
				
		if ($specialty_id) {
			$contain = array('Docspeclink' => array('fields' => array('doctor_id')));
			$specialties = $this->Doctor->Docspeclink->Specialty->find('all', array('fields' => array('id'),
										   'contain' => $contain,
										   'conditions' => array('id' => $specialty_id)));
			foreach($specialties as $specialty) {
				foreach($specialty['Docspeclink'] as $docspeclink)
	 				array_push($doc_ids_to_get_sp, $docspeclink['doctor_id']);				
			}
		}
		
		if ($disease_id) {
			$contain = array('Dslink' => array(
				'fields' => array('id'),
				'Specialty' => array(
					'fields' => array('id', 'name'),
					'Docspeclink' => array(
						'fields' => array('doctor_id')))));
			$diseases = $this->Doctor->Docspeclink->
					Specialty->Dslink->Disease->find('all', array('fields' => array('id'),
											'contain' => $contain,
											'conditions' => array('id' => $disease_id)));
			foreach($diseases as $disease) {
				foreach($disease['Dslink'] as $dslink) {
					foreach($dslink['Specialty']['Docspeclink'] as $docspeclink) {
						array_push($doc_ids_to_get_dis, $docspeclink['doctor_id']);
					}
				}
			}
		}

		if ($doctor_id) {
			$conditions = array('Doctor.id' => $doctor_id);
		} else {
			$doc_ids_to_get = array();
			$no_doctors = false;
			
			if ($specialty_id) {
				if (empty($doc_ids_to_get_sp)) {
					$no_doctors = true;
				} else {
					$doc_ids_to_get = $doc_ids_to_get_sp;	
				}
			}
			if ($disease_id && !$no_doctors) {
				if (empty($doc_ids_to_get_dis)) {
					$no_doctors = true;
				} else {
					if (empty($doc_ids_to_get)) {
						$doc_ids_to_get = $doc_ids_to_get_dis;
					} else {
						$doc_ids_to_get = array_intersect($doc_ids_to_get, $doc_ids_to_get_dis);
					}
				}
			}
			if ($long && $lat && !$no_doctors) {
				if (empty($doc_ids_to_get_geo)) {
					$no_doctors = true;
				} else {
					if (empty($doc_ids_to_get)) {
						$doc_ids_to_get = $doc_ids_to_get_geo; 
					} else {
						$doc_ids_to_get = array_intersect($doc_ids_to_get, $doc_ids_to_get_geo);
					}
				}
			}
			//Restrict conditions only if lat/long, or disease or specialty is set. Else return all docs
			if (($lat && $long) || $disease_id || $specialty_id) $conditions = array('Doctor.id' => $doc_ids_to_get);
		}
		
		$contain = array (
				  'Docconsultlocation' =>
					array('fields' => array('addl'),
					      'Consultlocationtype' => array('fields' => array('name')),
					      'Location' => array('fields' => array('id', 'name', 'address', 'neighborhood', 'lat', 'long'),
							  'Country' => array('fields' => array('name')),
							  'City' => array('fields' => array('name')),
							  'PinCode' => array('fields' => array('pin_code'))),
					      'ConsultTiming' => array('ConsultType' => array('fields' => array('name'))),
				      ),
				'Docspeclink' =>
					array('fields' => array('id'),
					      'Specialty' => array('fields' => array('name', 'description'))),
				'Qualification' =>
					array('fields' => array('id'),
					      'Location' => array(
						'fields' => array('name', 'address', 'lat', 'long'),
						'City' => array('fields'=>array('name')), 'Country'=> array('fields'=>array('name')),
						'PinCode' => array('fields' => array('pin_code'))),
					      'Degree' => array('fields' => array('name'))
					      ),
				'Experience' =>
					array('fields' => array('from', 'to', 'dept'),
					      'Location' => array(
						'fields' => array('name', 'address', 'lat', 'long'),
						'City' => array('fields'=>array('name')), 'Country'=> array('fields'=>array('name')),
						'PinCode' => array('fields' => array('pin_code')))),
				'DoctorContact' =>
					array('fields' => array('phone', 'email'))
				);
		

		$fields = array('id', 'first_name', 'middle_name', 'last_name', 'one_line_intro', 'image');		
		$doctors = $this->Doctor->find('all', array('fields' => $fields,
			'contain' => $contain, 'conditions' => $conditions));
		//echo debug($conditions);
		//echo debug($doctors);
		$this->set('result', $doctors);
		if (isset($this->request->query['jsonp_callback'])) {
			$this->autoLayout = $this->autoRender = false;
			$this->set('callback', $this->request->query['jsonp_callback']);
			$this->render('/Layouts/jsonp');
		} else {
			$this->set('_serialize', 'result');
		}
	}
}
