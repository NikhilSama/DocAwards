<?php
App::uses('Location', 'Model');

/**
 * Location Test Case
 *
 */
class LocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.location',
		'app.city',
		'app.patient',
		'app.country',
		'app.pin_code',
		'app.docconsultlocation',
		'app.doctor',
		'app.user',
		'app.docspeclink',
		'app.specialty',
		'app.doctor_contact',
		'app.experience',
		'app.qualification',
		'app.consultlocationtype',
		'app.consult_timing',
		'app.consult_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Location = ClassRegistry::init('Location');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Location);

		parent::tearDown();
	}

}
