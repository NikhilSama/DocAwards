<div class="userFollowers index">
	<h2><?php echo __('User Followers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('source_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('follower_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($userFollowers as $userFollower): ?>
	<tr>
		<td><?php echo h($userFollower['UserFollower']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userFollower['SourceUser']['id'], array('controller' => 'users', 'action' => 'view', $userFollower['SourceUser']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userFollower['FollowerUser']['id'], array('controller' => 'users', 'action' => 'view', $userFollower['FollowerUser']['id'])); ?>
		</td>
		<td><?php echo h($userFollower['UserFollower']['created']); ?>&nbsp;</td>
		<td><?php echo h($userFollower['UserFollower']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userFollower['UserFollower']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userFollower['UserFollower']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userFollower['UserFollower']['id']), null, __('Are you sure you want to delete # %s?', $userFollower['UserFollower']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Follower'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Source User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
