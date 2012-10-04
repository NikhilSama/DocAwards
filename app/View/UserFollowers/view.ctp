<div class="userFollowers view">
<h2><?php  echo __('User Follower'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userFollower['UserFollower']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Source User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userFollower['SourceUser']['id'], array('controller' => 'users', 'action' => 'view', $userFollower['SourceUser']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Follower User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userFollower['FollowerUser']['id'], array('controller' => 'users', 'action' => 'view', $userFollower['FollowerUser']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userFollower['UserFollower']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userFollower['UserFollower']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Follower'), array('action' => 'edit', $userFollower['UserFollower']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Follower'), array('action' => 'delete', $userFollower['UserFollower']['id']), null, __('Are you sure you want to delete # %s?', $userFollower['UserFollower']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Followers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Follower'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Source User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
