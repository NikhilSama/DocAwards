<?php
App::uses('Specialtydiseaselinktype', 'Model');

/**
 * Specialtydiseaselinktype Test Case
 *
 */
class SpecialtydiseaselinktypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.specialtydiseaselinktype',
		'app.dslink',
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
		'app.disease'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Specialtydiseaselinktype = ClassRegistry::init('Specialtydiseaselinktype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Specialtydiseaselinktype);

		parent::tearDown();
	}

}
