<?php
/**
 * DocspeclinkFixture
 *
 */
class DocspeclinkFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'doctor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'specialty_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_link_doctors_to_specialties_doctors1_idx' => array('column' => 'doctor_id', 'unique' => 0),
			'fk_link_doctors_to_specialties_specialties1_idx' => array('column' => 'specialty_id', 'unique' => 0)
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
			'doctor_id' => 1,
			'specialty_id' => 1,
			'created' => '2012-10-04 08:10:44',
			'modified' => '2012-10-04 08:10:44'
		),
	);

}
