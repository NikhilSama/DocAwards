<?php
App::uses('Consultlocationtype', 'Model');

/**
 * Consultlocationtype Test Case
 *
 */
class ConsultlocationtypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.consultlocationtype',
		'app.docconsultlocation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Consultlocationtype = ClassRegistry::init('Consultlocationtype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Consultlocationtype);

		parent::tearDown();
	}

}
