<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.appointment',
		'app.doctor',
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
		'app.docspeclink',
		'app.specialty',
		'app.dslink',
		'app.disease',
		'app.specialtydiseaselinktype',
		'app.doctor_contact',
		'app.post_feedback',
		'app.post',
		'app.question',
		'app.question_follower'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
