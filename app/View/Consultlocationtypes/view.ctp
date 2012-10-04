<div class="consultlocationtypes view">
<h2><?php  echo __('Consultlocationtype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consultlocationtype['Consultlocationtype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($consultlocationtype['Consultlocationtype']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($consultlocationtype['Consultlocationtype']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($consultlocationtype['Consultlocationtype']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Consultlocationtype'), array('action' => 'edit', $consultlocationtype['Consultlocationtype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Consultlocationtype'), array('action' => 'delete', $consultlocationtype['Consultlocationtype']['id']), null, __('Are you sure you want to delete # %s?', $consultlocationtype['Consultlocationtype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Consultlocationtypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consultlocationtype'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docconsultlocations'), array('controller' => 'docconsultlocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docconsultlocation'), array('controller' => 'docconsultlocations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Docconsultlocations'); ?></h3>
	<?php if (!empty($consultlocationtype['Docconsultlocation'])): ?>
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
		foreach ($consultlocationtype['Docconsultlocation'] as $docconsultlocation): ?>
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
