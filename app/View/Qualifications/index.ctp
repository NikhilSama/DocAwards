<div class="qualifications index">
	<h2><?php echo __('Qualifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('doctor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('degree_id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('dept'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($qualifications as $qualification): ?>
	<tr>
		<td><?php echo h($qualification['Qualification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($qualification['Doctor']['id'], array('controller' => 'doctors', 'action' => 'view', $qualification['Doctor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($qualification['Degree']['name'], array('controller' => 'degrees', 'action' => 'view', $qualification['Degree']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($qualification['Location']['name'], array('controller' => 'locations', 'action' => 'view', $qualification['Location']['id'])); ?>
		</td>
		<td><?php echo h($qualification['Qualification']['year']); ?>&nbsp;</td>
		<td><?php echo h($qualification['Qualification']['dept']); ?>&nbsp;</td>
		<td><?php echo h($qualification['Qualification']['created']); ?>&nbsp;</td>
		<td><?php echo h($qualification['Qualification']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $qualification['Qualification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $qualification['Qualification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $qualification['Qualification']['id']), null, __('Are you sure you want to delete # %s?', $qualification['Qualification']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Qualification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Degrees'), array('controller' => 'degrees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Degree'), array('controller' => 'degrees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
	</ul>
</div>
