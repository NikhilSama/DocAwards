<div class="countries view">
<h2><?php  echo __('Country'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($country['Country']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($country['Country']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iso2'); ?></dt>
		<dd>
			<?php echo h($country['Country']['iso2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long Name'); ?></dt>
		<dd>
			<?php echo h($country['Country']['long_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iso3'); ?></dt>
		<dd>
			<?php echo h($country['Country']['iso3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numcode'); ?></dt>
		<dd>
			<?php echo h($country['Country']['numcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Un Member'); ?></dt>
		<dd>
			<?php echo h($country['Country']['un_member']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calling Code'); ?></dt>
		<dd>
			<?php echo h($country['Country']['calling_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cctld'); ?></dt>
		<dd>
			<?php echo h($country['Country']['cctld']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($country['Country']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($country['Country']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Country'), array('action' => 'edit', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Country'), array('action' => 'delete', $country['Country']['id']), null, __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Locations'); ?></h3>
	<?php if (!empty($country['Location'])): ?>
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
		foreach ($country['Location'] as $location): ?>
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
	<?php if (!empty($country['Patient'])): ?>
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
		foreach ($country['Patient'] as $patient): ?>
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
