<?php
App::uses('AppModel', 'Model');
/**
 * UserFollower Model
 *
 * @property User $SourceUser
 * @property User $FollowerUser
 */
class UserFollower extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'SourceUser' => array(
			'className' => 'User',
			'foreignKey' => 'source_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FollowerUser' => array(
			'className' => 'User',
			'foreignKey' => 'follower_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
