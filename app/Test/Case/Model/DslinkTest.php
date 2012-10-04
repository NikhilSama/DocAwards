<?php
App::uses('Dslink', 'Model');

/**
 * Dslink Test Case
 *
 */
class DslinkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dslink',
		'app.specialty',
		'app.disease',
		'app.specialtydiseaselinktype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dslink = ClassRegistry::init('Dslink');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dslink);

		parent::tearDown();
	}

}
