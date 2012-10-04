<?php
App::uses('Docspeclink', 'Model');

/**
 * Docspeclink Test Case
 *
 */
class DocspeclinkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.docspeclink',
		'app.doctor',
		'app.specialty'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Docspeclink = ClassRegistry::init('Docspeclink');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Docspeclink);

		parent::tearDown();
	}

}
