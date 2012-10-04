<?php
App::uses('AppModel', 'Model');
/**
 * ConsultType Model
 *
 * @property ConsultTiming $ConsultTiming
 */
class ConsultType extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'it';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ConsultTiming' => array(
			'className' => 'ConsultTiming',
			'foreignKey' => 'consult_type_id',
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
