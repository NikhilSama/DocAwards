<?php
App::uses('Appointment', 'Model');

/**
 * Appointment Test Case
 *
 */
class AppointmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.appointment',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Appointment = ClassRegistry::init('Appointment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Appointment);

		parent::tearDown();
	}

}
