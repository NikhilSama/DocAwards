<?php
App::uses('AppModel', 'Model');
/**
 * Docspeclink Model
 *
 * @property Doctor $Doctor
 * @property Specialty $Specialty
 */
class Docspeclink extends AppModel {

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
		'specialty_id' => array(
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
		'Specialty' => array(
			'className' => 'Specialty',
			'foreignKey' => 'specialty_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
