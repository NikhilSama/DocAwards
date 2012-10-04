<?php
App::uses('ConsultType', 'Model');

/**
 * ConsultType Test Case
 *
 */
class ConsultTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.consult_type',
		'app.consult_timing',
		'app.docconsultlocation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ConsultType = ClassRegistry::init('ConsultType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ConsultType);

		parent::tearDown();
	}

}
