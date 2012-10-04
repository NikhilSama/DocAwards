<div class="questionFollowers index">
	<h2><?php echo __('Question Followers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('question_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($questionFollowers as $questionFollower): ?>
	<tr>
		<td><?php echo h($questionFollower['QuestionFollower']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($questionFollower['Question']['id'], array('controller' => 'questions', 'action' => 'view', $questionFollower['Question']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($questionFollower['User']['id'], array('controller' => 'users', 'action' => 'view', $questionFollower['User']['id'])); ?>
		</td>
		<td><?php echo h($questionFollower['QuestionFollower']['created']); ?>&nbsp;</td>
		<td><?php echo h($questionFollower['QuestionFollower']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $questionFollower['QuestionFollower']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $questionFollower['QuestionFollower']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $questionFollower['QuestionFollower']['id']), null, __('Are you sure you want to delete # %s?', $questionFollower['QuestionFollower']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Question Follower'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
