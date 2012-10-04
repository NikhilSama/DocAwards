<div class="countries index">
	<h2><?php echo __('Countries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('iso2'); ?></th>
			<th><?php echo $this->Paginator->sort('long_name'); ?></th>
			<th><?php echo $this->Paginator->sort('iso3'); ?></th>
			<th><?php echo $this->Paginator->sort('numcode'); ?></th>
			<th><?php echo $this->Paginator->sort('un_member'); ?></th>
			<th><?php echo $this->Paginator->sort('calling_code'); ?></th>
			<th><?php echo $this->Paginator->sort('cctld'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($countries as $country): ?>
	<tr>
		<td><?php echo h($country['Country']['id']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['name']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['iso2']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['long_name']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['iso3']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['numcode']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['un_member']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['calling_code']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['cctld']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['created']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $country['Country']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $country['Country']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $country['Country']['id']), null, __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Country'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
