<div class="postFeedbacks view">
<h2><?php  echo __('Post Feedback'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($postFeedback['PostFeedback']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($postFeedback['Post']['title'], array('controller' => 'posts', 'action' => 'view', $postFeedback['Post']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($postFeedback['User']['id'], array('controller' => 'users', 'action' => 'view', $postFeedback['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Like'); ?></dt>
		<dd>
			<?php echo h($postFeedback['PostFeedback']['like']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($postFeedback['PostFeedback']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($postFeedback['PostFeedback']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($postFeedback['PostFeedback']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post Feedback'), array('action' => 'edit', $postFeedback['PostFeedback']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post Feedback'), array('action' => 'delete', $postFeedback['PostFeedback']['id']), null, __('Are you sure you want to delete # %s?', $postFeedback['PostFeedback']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Post Feedbacks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post Feedback'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
