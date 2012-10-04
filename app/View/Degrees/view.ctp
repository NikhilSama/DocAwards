<div class="degrees view">
<h2><?php  echo __('Degree'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($degree['Degree']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($degree['Degree']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($degree['Degree']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($degree['Degree']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Degree'), array('action' => 'edit', $degree['Degree']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Degree'), array('action' => 'delete', $degree['Degree']['id']), null, __('Are you sure you want to delete # %s?', $degree['Degree']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Degrees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Degree'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qualifications'), array('controller' => 'qualifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qualification'), array('controller' => 'qualifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Qualifications'); ?></h3>
	<?php if (!empty($degree['Qualification'])): ?>
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
		foreach ($degree['Qualification'] as $qualification): ?>
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
