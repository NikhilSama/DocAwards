<div class="specialtydiseaselinktypes index">
	<h2><?php echo __('Specialtydiseaselinktypes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($specialtydiseaselinktypes as $specialtydiseaselinktype): ?>
	<tr>
		<td><?php echo h($specialtydiseaselinktype['Specialtydiseaselinktype']['id']); ?>&nbsp;</td>
		<td><?php echo h($specialtydiseaselinktype['Specialtydiseaselinktype']['name']); ?>&nbsp;</td>
		<td><?php echo h($specialtydiseaselinktype['Specialtydiseaselinktype']['created']); ?>&nbsp;</td>
		<td><?php echo h($specialtydiseaselinktype['Specialtydiseaselinktype']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $specialtydiseaselinktype['Specialtydiseaselinktype']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $specialtydiseaselinktype['Specialtydiseaselinktype']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $specialtydiseaselinktype['Specialtydiseaselinktype']['id']), null, __('Are you sure you want to delete # %s?', $specialtydiseaselinktype['Specialtydiseaselinktype']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Specialtydiseaselinktype'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dslinks'), array('controller' => 'dslinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dslink'), array('controller' => 'dslinks', 'action' => 'add')); ?> </li>
	</ul>
</div>
