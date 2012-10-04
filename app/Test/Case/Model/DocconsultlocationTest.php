<?php
App::uses('Docconsultlocation', 'Model');

/**
 * Docconsultlocation Test Case
 *
 */
class DocconsultlocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.docconsultlocation',
		'app.location',
		'app.doctor',
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
		$this->Docconsultlocation = ClassRegistry::init('Docconsultlocation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Docconsultlocation);

		parent::tearDown();
	}

}
