<?php
App::uses('AppModel', 'Model');
/**
 * Specialty Model
 *
 * @property Docspeclink $Docspeclink
 * @property Dslink $Dslink
 */
class Specialty extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Docspeclink' => array(
			'className' => 'Docspeclink',
			'foreignKey' => 'specialty_id',
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
		'Dslink' => array(
			'className' => 'Dslink',
			'foreignKey' => 'specialty_id',
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
