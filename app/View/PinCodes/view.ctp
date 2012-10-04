<div class="pinCodes view">
<h2><?php  echo __('Pin Code'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pinCode['PinCode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pin Code'); ?></dt>
		<dd>
			<?php echo h($pinCode['PinCode']['pin_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pinCode['PinCode']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pinCode['PinCode']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pin Code'), array('action' => 'edit', $pinCode['PinCode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pin Code'), array('action' => 'delete', $pinCode['PinCode']['id']), null, __('Are you sure you want to delete # %s?', $pinCode['PinCode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pin Codes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pin Code'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Locations'); ?></h3>
	<?php if (!empty($pinCode['Location'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Coords'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Pin Code Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pinCode['Location'] as $location): ?>
		<tr>
			<td><?php echo $location['id']; ?></td>
			<td><?php echo $location['name']; ?></td>
			<td><?php echo $location['address']; ?></td>
			<td><?php echo $location['coords']; ?></td>
			<td><?php echo $location['city_id']; ?></td>
			<td><?php echo $location['country_id']; ?></td>
			<td><?php echo $location['pin_code_id']; ?></td>
			<td><?php echo $location['created']; ?></td>
			<td><?php echo $location['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'locations', 'action' => 'view', $location['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'locations', 'action' => 'edit', $location['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'locations', 'action' => 'delete', $location['id']), null, __('Are you sure you want to delete # %s?', $location['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Patients'); ?></h3>
	<?php if (!empty($pinCode['Patient'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Pin Code Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pinCode['Patient'] as $patient): ?>
		<tr>
			<td><?php echo $patient['id']; ?></td>
			<td><?php echo $patient['user_id']; ?></td>
			<td><?php echo $patient['first_name']; ?></td>
			<td><?php echo $patient['last_name']; ?></td>
			<td><?php echo $patient['email']; ?></td>
			<td><?php echo $patient['phone']; ?></td>
			<td><?php echo $patient['address']; ?></td>
			<td><?php echo $patient['city_id']; ?></td>
			<td><?php echo $patient['pin_code_id']; ?></td>
			<td><?php echo $patient['country_id']; ?></td>
			<td><?php echo $patient['created']; ?></td>
			<td><?php echo $patient['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'patients', 'action' => 'view', $patient['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'patients', 'action' => 'edit', $patient['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'patients', 'action' => 'delete', $patient['id']), null, __('Are you sure you want to delete # %s?', $patient['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
