<div class="doctors index">
	<h2><?php echo __('Doctors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('DOB'); ?></th>
			<th><?php echo $this->Paginator->sort('first_yr_of_practice'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($doctors as $doctor): ?>
	<tr>
		<td><?php echo h($doctor['Doctor']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($doctor['User']['id'], array('controller' => 'users', 'action' => 'view', $doctor['User']['id'])); ?>
		</td>
		<td><?php echo h($doctor['Doctor']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($doctor['Doctor']['middle_name']); ?>&nbsp;</td>
		<td><?php echo h($doctor['Doctor']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($doctor['Doctor']['image']); ?>&nbsp;</td>
		<td><?php echo h($doctor['Doctor']['gender']); ?>&nbsp;</td>
		<td><?php echo h($doctor['Doctor']['DOB']); ?>&nbsp;</td>
		<td><?php echo h($doctor['Doctor']['first_yr_of_practice']); ?>&nbsp;</td>
		<td><?php echo h($doctor['Doctor']['created']); ?>&nbsp;</td>
		<td><?php echo h($doctor['Doctor']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $doctor['Doctor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $doctor['Doctor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $doctor['Doctor']['id']), null, __('Are you sure you want to delete # %s?', $doctor['Doctor']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Doctor'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docconsultlocations'), array('controller' => 'docconsultlocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docconsultlocation'), array('controller' => 'docconsultlocations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docspeclinks'), array('controller' => 'docspeclinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docspeclink'), array('controller' => 'docspeclinks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctor Contacts'), array('controller' => 'doctor_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor Contact'), array('controller' => 'doctor_contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qualifications'), array('controller' => 'qualifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qualification'), array('controller' => 'qualifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
