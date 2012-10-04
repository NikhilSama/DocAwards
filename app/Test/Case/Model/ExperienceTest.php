<?php
App::uses('Experience', 'Model');

/**
 * Experience Test Case
 *
 */
class ExperienceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.experience',
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
		'app.qualification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Experience = ClassRegistry::init('Experience');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Experience);

		parent::tearDown();
	}

}
