<?php
App::uses('AppModel', 'Model');
/**
 * Degree Model
 *
 * @property Qualification $Qualification
 */
class Degree extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Qualification' => array(
			'className' => 'Qualification',
			'foreignKey' => 'degree_id',
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
