<div class="consultTypes index">
	<h2><?php echo __('Consult Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('it'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($consultTypes as $consultType): ?>
	<tr>
		<td><?php echo h($consultType['ConsultType']['it']); ?>&nbsp;</td>
		<td><?php echo h($consultType['ConsultType']['name']); ?>&nbsp;</td>
		<td><?php echo h($consultType['ConsultType']['created']); ?>&nbsp;</td>
		<td><?php echo h($consultType['ConsultType']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $consultType['ConsultType']['it'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $consultType['ConsultType']['it'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $consultType['ConsultType']['it']), null, __('Are you sure you want to delete # %s?', $consultType['ConsultType']['it'])); ?>
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
		<li><?php echo $this->Html->link(__('New Consult Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Consult Timings'), array('controller' => 'consult_timings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consult Timing'), array('controller' => 'consult_timings', 'action' => 'add')); ?> </li>
	</ul>
</div>
