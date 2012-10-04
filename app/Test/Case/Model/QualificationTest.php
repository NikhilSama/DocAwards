<?php
App::uses('Qualification', 'Model');

/**
 * Qualification Test Case
 *
 */
class QualificationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qualification',
		'app.doctor',
		'app.user',
		'app.docconsultlocation',
		'app.location',
		'app.city',
		'app.patient',
		'app.pin_code',
		'app.country',
		'app.experience',
		'app.consultlocationtype',
		'app.consult_timing',
		'app.consult_type',
		'app.docspeclink',
		'app.specialty',
		'app.doctor_contact',
		'app.degree'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Qualification = ClassRegistry::init('Qualification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Qualification);

		parent::tearDown();
	}

}
