<?php
App::uses('PinCode', 'Model');

/**
 * PinCode Test Case
 *
 */
class PinCodeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pin_code',
		'app.location',
		'app.city',
		'app.patient',
		'app.user',
		'app.country',
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
		$this->PinCode = ClassRegistry::init('PinCode');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PinCode);

		parent::tearDown();
	}

}
