<div class="questionFollowers view">
<h2><?php  echo __('Question Follower'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($questionFollower['QuestionFollower']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo $this->Html->link($questionFollower['Question']['id'], array('controller' => 'questions', 'action' => 'view', $questionFollower['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($questionFollower['User']['id'], array('controller' => 'users', 'action' => 'view', $questionFollower['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($questionFollower['QuestionFollower']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($questionFollower['QuestionFollower']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Question Follower'), array('action' => 'edit', $questionFollower['QuestionFollower']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Question Follower'), array('action' => 'delete', $questionFollower['QuestionFollower']['id']), null, __('Are you sure you want to delete # %s?', $questionFollower['QuestionFollower']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Question Followers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question Follower'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
