<?php
App::uses('QuestionFollower', 'Model');

/**
 * QuestionFollower Test Case
 *
 */
class QuestionFollowerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.question_follower',
		'app.question',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuestionFollower = ClassRegistry::init('QuestionFollower');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuestionFollower);

		parent::tearDown();
	}

}
