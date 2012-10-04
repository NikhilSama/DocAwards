<?php
App::uses('AppModel', 'Model');
/**
 * Consultlocationtype Model
 *
 * @property Docconsultlocation $Docconsultlocation
 */
class Consultlocationtype extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Docconsultlocation' => array(
			'className' => 'Docconsultlocation',
			'foreignKey' => 'consultlocationtype_id',
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
