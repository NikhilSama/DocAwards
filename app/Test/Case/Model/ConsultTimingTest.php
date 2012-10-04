<?php
App::uses('ConsultTiming', 'Model');

/**
 * ConsultTiming Test Case
 *
 */
class ConsultTimingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.consult_timing',
		'app.consult_type',
		'app.docconsultlocation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ConsultTiming = ClassRegistry::init('ConsultTiming');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ConsultTiming);

		parent::tearDown();
	}

}
