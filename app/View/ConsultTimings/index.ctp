<div class="consultTimings index">
	<h2><?php echo __('Consult Timings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('monday'); ?></th>
			<th><?php echo $this->Paginator->sort('tuesday'); ?></th>
			<th><?php echo $this->Paginator->sort('wednesday'); ?></th>
			<th><?php echo $this->Paginator->sort('thursday'); ?></th>
			<th><?php echo $this->Paginator->sort('friday'); ?></th>
			<th><?php echo $this->Paginator->sort('saturday'); ?></th>
			<th><?php echo $this->Paginator->sort('sunday'); ?></th>
			<th><?php echo $this->Paginator->sort('start'); ?></th>
			<th><?php echo $this->Paginator->sort('end'); ?></th>
			<th><?php echo $this->Paginator->sort('consult_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('docconsultlocation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($consultTimings as $consultTiming): ?>
	<tr>
		<td><?php echo h($consultTiming['ConsultTiming']['id']); ?>&nbsp;</td>
		<td><?php echo h($consultTiming['ConsultTiming']['monday']); ?>&nbsp;</td>
		<td><?php echo h($consultTiming['ConsultTiming']['tuesday']); ?>&nbsp;</td>
		<td><?php echo h($consultTiming['ConsultTiming']['wednesday']); ?>&nbsp;</td>
		<td><?php echo h($consultTiming['ConsultTiming']['thursday']); ?>&nbsp;</td>
		<td><?php echo h($consultTiming['ConsultTiming']['friday']); ?>&nbsp;</td>
		<td><?php echo h($consultTiming['ConsultTiming']['saturday']); ?>&nbsp;</td>
		<td><?php echo h($consultTiming['ConsultTiming']['sunday']); ?>&nbsp;</td>
		<td><?php echo h($consultTiming['ConsultTiming']['start']); ?>&nbsp;</td>
		<td><?php echo h($consultTiming['ConsultTiming']['end']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($consultTiming['ConsultType']['name'], array('controller' => 'consult_types', 'action' => 'view', $consultTiming['ConsultType']['it'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($consultTiming['Docconsultlocation']['id'], array('controller' => 'docconsultlocations', 'action' => 'view', $consultTiming['Docconsultlocation']['id'])); ?>
		</td>
		<td><?php echo h($consultTiming['ConsultTiming']['phone']); ?>&nbsp;</td>
		<td><?php echo h($consultTiming['ConsultTiming']['email']); ?>&nbsp;</td>
		<td><?php echo h($consultTiming['ConsultTiming']['created']); ?>&nbsp;</td>
		<td><?php echo h($consultTiming['ConsultTiming']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $consultTiming['ConsultTiming']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $consultTiming['ConsultTiming']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $consultTiming['ConsultTiming']['id']), null, __('Are you sure you want to delete # %s?', $consultTiming['ConsultTiming']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Consult Timing'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Consult Types'), array('controller' => 'consult_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consult Type'), array('controller' => 'consult_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docconsultlocations'), array('controller' => 'docconsultlocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docconsultlocation'), array('controller' => 'docconsultlocations', 'action' => 'add')); ?> </li>
	</ul>
</div>
