<?php
App::uses('PostFeedback', 'Model');

/**
 * PostFeedback Test Case
 *
 */
class PostFeedbackTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.post_feedback',
		'app.post',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PostFeedback = ClassRegistry::init('PostFeedback');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PostFeedback);

		parent::tearDown();
	}

}
