<?php
App::uses('UserFollower', 'Model');

/**
 * UserFollower Test Case
 *
 */
class UserFollowerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_follower',
		'app.source_user',
		'app.follower_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserFollower = ClassRegistry::init('UserFollower');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserFollower);

		parent::tearDown();
	}

}
