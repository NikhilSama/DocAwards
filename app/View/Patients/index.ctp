<div class="patients index">
	<h2><?php echo __('Patients'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pin_code_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($patients as $patient): ?>
	<tr>
		<td><?php echo h($patient['Patient']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($patient['User']['id'], array('controller' => 'users', 'action' => 'view', $patient['User']['id'])); ?>
		</td>
		<td><?php echo h($patient['Patient']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['email']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['phone']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['address']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($patient['City']['name'], array('controller' => 'cities', 'action' => 'view', $patient['City']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($patient['PinCode']['id'], array('controller' => 'pin_codes', 'action' => 'view', $patient['PinCode']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($patient['Country']['name'], array('controller' => 'countries', 'action' => 'view', $patient['Country']['id'])); ?>
		</td>
		<td><?php echo h($patient['Patient']['created']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $patient['Patient']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $patient['Patient']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $patient['Patient']['id']), null, __('Are you sure you want to delete # %s?', $patient['Patient']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Patient'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pin Codes'), array('controller' => 'pin_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pin Code'), array('controller' => 'pin_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
