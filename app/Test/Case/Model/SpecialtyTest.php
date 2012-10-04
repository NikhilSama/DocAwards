<?php
App::uses('Specialty', 'Model');

/**
 * Specialty Test Case
 *
 */
class SpecialtyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.specialty',
		'app.docspeclink',
		'app.doctor',
		'app.user',
		'app.docconsultlocation',
		'app.location',
		'app.city',
		'app.patient',
		'app.pin_code',
		'app.country',
		'app.experience',
		'app.qualification',
		'app.degree',
		'app.consultlocationtype',
		'app.consult_timing',
		'app.consult_type',
		'app.doctor_contact',
		'app.dslink',
		'app.disease',
		'app.specialtydiseaselinktype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Specialty = ClassRegistry::init('Specialty');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Specialty);

		parent::tearDown();
	}

}
