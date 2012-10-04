<?php
App::uses('DoctorContact', 'Model');

/**
 * DoctorContact Test Case
 *
 */
class DoctorContactTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.doctor_contact',
		'app.doctor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DoctorContact = ClassRegistry::init('DoctorContact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DoctorContact);

		parent::tearDown();
	}

}
