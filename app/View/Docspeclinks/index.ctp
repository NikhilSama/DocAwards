<div class="docspeclinks index">
	<h2><?php echo __('Docspeclinks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('doctor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('specialty_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($docspeclinks as $docspeclink): ?>
	<tr>
		<td><?php echo h($docspeclink['Docspeclink']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($docspeclink['Doctor']['id'], array('controller' => 'doctors', 'action' => 'view', $docspeclink['Doctor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($docspeclink['Specialty']['name'], array('controller' => 'specialties', 'action' => 'view', $docspeclink['Specialty']['id'])); ?>
		</td>
		<td><?php echo h($docspeclink['Docspeclink']['created']); ?>&nbsp;</td>
		<td><?php echo h($docspeclink['Docspeclink']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $docspeclink['Docspeclink']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $docspeclink['Docspeclink']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $docspeclink['Docspeclink']['id']), null, __('Are you sure you want to delete # %s?', $docspeclink['Docspeclink']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Docspeclink'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialties'), array('controller' => 'specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialty'), array('controller' => 'specialties', 'action' => 'add')); ?> </li>
	</ul>
</div>
