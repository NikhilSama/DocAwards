<?php
/**
 * ExperienceFixture
 *
 */
class ExperienceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'from' => array('type' => 'date', 'null' => true, 'default' => null),
		'to' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dept' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'doctor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'location_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_experience_doctors1_idx' => array('column' => 'doctor_id', 'unique' => 0),
			'fk_experiences_locations1_idx' => array('column' => 'location_id', 'unique' => 0)
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
			'from' => '2012-10-04',
			'to' => 'Lorem ipsum dolor sit amet',
			'dept' => 'Lorem ipsum dolor sit amet',
			'doctor_id' => 1,
			'location_id' => 1,
			'created' => '2012-10-04 08:10:47',
			'modified' => '2012-10-04 08:10:47'
		),
	);

}
