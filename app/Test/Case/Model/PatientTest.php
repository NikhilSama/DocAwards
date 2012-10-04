<?php
App::uses('Patient', 'Model');

/**
 * Patient Test Case
 *
 */
class PatientTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.patient',
		'app.user',
		'app.city',
		'app.location',
		'app.country',
		'app.pin_code',
		'app.docconsultlocation',
		'app.doctor',
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
		$this->Patient = ClassRegistry::init('Patient');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Patient);

		parent::tearDown();
	}

}
