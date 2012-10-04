<?php
App::uses('AppModel', 'Model');
/**
 * Specialtydiseaselinktype Model
 *
 * @property Dslink $Dslink
 */
class Specialtydiseaselinktype extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Dslink' => array(
			'className' => 'Dslink',
			'foreignKey' => 'specialtydiseaselinktype_id',
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
