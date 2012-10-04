<div class="specialties index">
	<h2><?php echo __('Specialties'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($specialties as $specialty): ?>
	<tr>
		<td><?php echo h($specialty['Specialty']['id']); ?>&nbsp;</td>
		<td><?php echo h($specialty['Specialty']['name']); ?>&nbsp;</td>
		<td><?php echo h($specialty['Specialty']['created']); ?>&nbsp;</td>
		<td><?php echo h($specialty['Specialty']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $specialty['Specialty']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $specialty['Specialty']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $specialty['Specialty']['id']), null, __('Are you sure you want to delete # %s?', $specialty['Specialty']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Specialty'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Docspeclinks'), array('controller' => 'docspeclinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docspeclink'), array('controller' => 'docspeclinks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dslinks'), array('controller' => 'dslinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dslink'), array('controller' => 'dslinks', 'action' => 'add')); ?> </li>
	</ul>
</div>
