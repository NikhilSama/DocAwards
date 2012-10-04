<div class="posts view">
<h2><?php  echo __('Post'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($post['Post']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['User']['id'], array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Question']['id'], array('controller' => 'questions', 'action' => 'view', $post['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($post['Post']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($post['Post']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($post['Post']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($post['Post']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Post Feedbacks'), array('controller' => 'post_feedbacks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post Feedback'), array('controller' => 'post_feedbacks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Post Feedbacks'); ?></h3>
	<?php if (!empty($post['PostFeedback'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Like'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($post['PostFeedback'] as $postFeedback): ?>
		<tr>
			<td><?php echo $postFeedback['id']; ?></td>
			<td><?php echo $postFeedback['post_id']; ?></td>
			<td><?php echo $postFeedback['user_id']; ?></td>
			<td><?php echo $postFeedback['like']; ?></td>
			<td><?php echo $postFeedback['comment']; ?></td>
			<td><?php echo $postFeedback['created']; ?></td>
			<td><?php echo $postFeedback['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'post_feedbacks', 'action' => 'view', $postFeedback['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'post_feedbacks', 'action' => 'edit', $postFeedback['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'post_feedbacks', 'action' => 'delete', $postFeedback['id']), null, __('Are you sure you want to delete # %s?', $postFeedback['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post Feedback'), array('controller' => 'post_feedbacks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
