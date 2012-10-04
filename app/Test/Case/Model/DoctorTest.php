<?php
App::uses('Doctor', 'Model');

/**
 * Doctor Test Case
 *
 */
class DoctorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.doctor',
		'app.user',
		'app.docconsultlocation',
		'app.location',
		'app.consultlocationtype',
		'app.consult_timing',
		'app.consult_type',
		'app.docspeclink',
		'app.specialty',
		'app.doctor_contact',
		'app.experience',
		'app.qualification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Doctor = ClassRegistry::init('Doctor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Doctor);

		parent::tearDown();
	}

}
