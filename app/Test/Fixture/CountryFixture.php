<?php
/**
 * CountryFixture
 *
 */
class CountryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'iso2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'long_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 80, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'iso3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'numcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'un_member' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'calling_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cctld' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'iso2' => '',
			'long_name' => 'Lorem ipsum dolor sit amet',
			'iso3' => 'L',
			'numcode' => 'Lore',
			'un_member' => 'Lorem ipsu',
			'calling_code' => 'Lorem ',
			'cctld' => 'Lor',
			'created' => '2012-10-04 08:10:40',
			'modified' => '2012-10-04 08:10:40'
		),
	);

}
