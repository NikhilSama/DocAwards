<?php
/**
 * DslinkFixture
 *
 */
class DslinkFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'specialty_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'disease_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'specialtydiseaselinktype_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_specialties_for_deseases_specialties1_idx' => array('column' => 'specialty_id', 'unique' => 0),
			'fk_specialties_for_deseases_deseases1_idx' => array('column' => 'disease_id', 'unique' => 0),
			'fk_specialties_for_deseases_specialty_desease_link_types1_idx' => array('column' => 'specialtydiseaselinktype_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'specialty_id' => 1,
			'disease_id' => 1,
			'specialtydiseaselinktype_id' => 1,
			'created' => '2012-10-04 08:10:46',
			'modified' => '2012-10-04 08:10:46'
		),
	);

}
