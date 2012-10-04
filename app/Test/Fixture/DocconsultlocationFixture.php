<?php
/**
 * DocconsultlocationFixture
 *
 */
class DocconsultlocationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'location_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'doctor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'consultlocationtype_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'addl' => array('type' => 'string', 'null' => true, 'default' => 'floor, room num etc', 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_consult_locations_locations1_idx' => array('column' => 'location_id', 'unique' => 0),
			'fk_consult_locations_doctors1_idx' => array('column' => 'doctor_id', 'unique' => 0),
			'fk_doctor_consult_locations_consult_location_types1_idx' => array('column' => 'consultlocationtype_id', 'unique' => 0)
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
			'location_id' => 1,
			'doctor_id' => 1,
			'consultlocationtype_id' => 1,
			'addl' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-04 08:10:43',
			'modified' => '2012-10-04 08:10:43'
		),
	);

}
