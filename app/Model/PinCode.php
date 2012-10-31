<?php
App::uses('AppModel', 'Model');
/**
 * PinCode Model
 *
 * @property Location $Location
 * @property Patient $Patient
 */
class PinCode extends AppModel {

   var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

public $virtualFields = array(
    'name' => 'CONCAT(PinCode.pin_code, "(", PinCode.city, ")")'
);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'pin_code_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Patient' => array(
			'className' => 'Patient',
			'foreignKey' => 'pin_code_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
