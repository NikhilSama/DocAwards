<div class="dslinks index">
	<h2><?php echo __('Dslinks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('specialty_id'); ?></th>
			<th><?php echo $this->Paginator->sort('disease_id'); ?></th>
			<th><?php echo $this->Paginator->sort('specialtydiseaselinktype_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($dslinks as $dslink): ?>
	<tr>
		<td><?php echo h($dslink['Dslink']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dslink['Specialty']['name'], array('controller' => 'specialties', 'action' => 'view', $dslink['Specialty']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dslink['Disease']['name'], array('controller' => 'diseases', 'action' => 'view', $dslink['Disease']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dslink['Specialtydiseaselinktype']['name'], array('controller' => 'specialtydiseaselinktypes', 'action' => 'view', $dslink['Specialtydiseaselinktype']['id'])); ?>
		</td>
		<td><?php echo h($dslink['Dslink']['created']); ?>&nbsp;</td>
		<td><?php echo h($dslink['Dslink']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dslink['Dslink']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dslink['Dslink']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dslink['Dslink']['id']), null, __('Are you sure you want to delete # %s?', $dslink['Dslink']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dslink'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Specialties'), array('controller' => 'specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialty'), array('controller' => 'specialties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Diseases'), array('controller' => 'diseases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disease'), array('controller' => 'diseases', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialtydiseaselinktypes'), array('controller' => 'specialtydiseaselinktypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialtydiseaselinktype'), array('controller' => 'specialtydiseaselinktypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
