<?php
App::uses('AppModel', 'Model');
/**
 * Experience Model
 *
 * @property Doctor $Doctor
 * @property Location $Location
 */
class Experience extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'doctor_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'location_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Doctor' => array(
			'className' => 'Doctor',
			'foreignKey' => 'doctor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

        public function beforeSave($options = array()) {
                if(!empty($this->data['Experience']['from'])) {
                        $this->data['Experience']['from'] = date('Y-m-d', strtotime($this->data['Experience']['from']));
                        $this->data['Experience']['to'] = date('Y-m-d', strtotime($this->data['Experience']['to']));
                }
        }
}
