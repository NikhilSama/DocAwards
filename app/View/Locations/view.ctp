<div class="locations view">
<h2><?php  echo __('Location'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($location['Location']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($location['Location']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($location['Location']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coords'); ?></dt>
		<dd>
			<?php echo h($location['Location']['coords']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($location['City']['name'], array('controller' => 'cities', 'action' => 'view', $location['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($location['Country']['name'], array('controller' => 'countries', 'action' => 'view', $location['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pin Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($location['PinCode']['id'], array('controller' => 'pin_codes', 'action' => 'view', $location['PinCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($location['Location']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($location['Location']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Location'), array('action' => 'edit', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Location'), array('action' => 'delete', $location['Location']['id']), null, __('Are you sure you want to delete # %s?', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pin Codes'), array('controller' => 'pin_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pin Code'), array('controller' => 'pin_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docconsultlocations'), array('controller' => 'docconsultlocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docconsultlocation'), array('controller' => 'docconsultlocations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qualifications'), array('controller' => 'qualifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qualification'), array('controller' => 'qualifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Docconsultlocations'); ?></h3>
	<?php if (!empty($location['Docconsultlocation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Doctor Id'); ?></th>
		<th><?php echo __('Consultlocationtype Id'); ?></th>
		<th><?php echo __('Addl'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Docconsultlocation'] as $docconsultlocation): ?>
		<tr>
			<td><?php echo $docconsultlocation['id']; ?></td>
			<td><?php echo $docconsultlocation['location_id']; ?></td>
			<td><?php echo $docconsultlocation['doctor_id']; ?></td>
			<td><?php echo $docconsultlocation['consultlocationtype_id']; ?></td>
			<td><?php echo $docconsultlocation['addl']; ?></td>
			<td><?php echo $docconsultlocation['created']; ?></td>
			<td><?php echo $docconsultlocation['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'docconsultlocations', 'action' => 'view', $docconsultlocation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'docconsultlocations', 'action' => 'edit', $docconsultlocation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'docconsultlocations', 'action' => 'delete', $docconsultlocation['id']), null, __('Are you sure you want to delete # %s?', $docconsultlocation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Docconsultlocation'), array('controller' => 'docconsultlocations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Experiences'); ?></h3>
	<?php if (!empty($location['Experience'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('From'); ?></th>
		<th><?php echo __('To'); ?></th>
		<th><?php echo __('Dept'); ?></th>
		<th><?php echo __('Doctor Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Experience'] as $experience): ?>
		<tr>
			<td><?php echo $experience['id']; ?></td>
			<td><?php echo $experience['from']; ?></td>
			<td><?php echo $experience['to']; ?></td>
			<td><?php echo $experience['dept']; ?></td>
			<td><?php echo $experience['doctor_id']; ?></td>
			<td><?php echo $experience['location_id']; ?></td>
			<td><?php echo $experience['created']; ?></td>
			<td><?php echo $experience['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'experiences', 'action' => 'view', $experience['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'experiences', 'action' => 'edit', $experience['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'experiences', 'action' => 'delete', $experience['id']), null, __('Are you sure you want to delete # %s?', $experience['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Qualifications'); ?></h3>
	<?php if (!empty($location['Qualification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Doctor Id'); ?></th>
		<th><?php echo __('Degree Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Dept'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Qualification'] as $qualification): ?>
		<tr>
			<td><?php echo $qualification['id']; ?></td>
			<td><?php echo $qualification['doctor_id']; ?></td>
			<td><?php echo $qualification['degree_id']; ?></td>
			<td><?php echo $qualification['location_id']; ?></td>
			<td><?php echo $qualification['year']; ?></td>
			<td><?php echo $qualification['dept']; ?></td>
			<td><?php echo $qualification['created']; ?></td>
			<td><?php echo $qualification['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'qualifications', 'action' => 'view', $qualification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'qualifications', 'action' => 'edit', $qualification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'qualifications', 'action' => 'delete', $qualification['id']), null, __('Are you sure you want to delete # %s?', $qualification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Qualification'), array('controller' => 'qualifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
