<div class="consultTypes view">
<h2><?php  echo __('Consult Type'); ?></h2>
	<dl>
		<dt><?php echo __('It'); ?></dt>
		<dd>
			<?php echo h($consultType['ConsultType']['it']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($consultType['ConsultType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($consultType['ConsultType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($consultType['ConsultType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Consult Type'), array('action' => 'edit', $consultType['ConsultType']['it'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Consult Type'), array('action' => 'delete', $consultType['ConsultType']['it']), null, __('Are you sure you want to delete # %s?', $consultType['ConsultType']['it'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Consult Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consult Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consult Timings'), array('controller' => 'consult_timings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consult Timing'), array('controller' => 'consult_timings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Consult Timings'); ?></h3>
	<?php if (!empty($consultType['ConsultTiming'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Monday'); ?></th>
		<th><?php echo __('Tuesday'); ?></th>
		<th><?php echo __('Wednesday'); ?></th>
		<th><?php echo __('Thursday'); ?></th>
		<th><?php echo __('Friday'); ?></th>
		<th><?php echo __('Saturday'); ?></th>
		<th><?php echo __('Sunday'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('Consult Type Id'); ?></th>
		<th><?php echo __('Docconsultlocation Id'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($consultType['ConsultTiming'] as $consultTiming): ?>
		<tr>
			<td><?php echo $consultTiming['id']; ?></td>
			<td><?php echo $consultTiming['monday']; ?></td>
			<td><?php echo $consultTiming['tuesday']; ?></td>
			<td><?php echo $consultTiming['wednesday']; ?></td>
			<td><?php echo $consultTiming['thursday']; ?></td>
			<td><?php echo $consultTiming['friday']; ?></td>
			<td><?php echo $consultTiming['saturday']; ?></td>
			<td><?php echo $consultTiming['sunday']; ?></td>
			<td><?php echo $consultTiming['start']; ?></td>
			<td><?php echo $consultTiming['end']; ?></td>
			<td><?php echo $consultTiming['consult_type_id']; ?></td>
			<td><?php echo $consultTiming['docconsultlocation_id']; ?></td>
			<td><?php echo $consultTiming['phone']; ?></td>
			<td><?php echo $consultTiming['email']; ?></td>
			<td><?php echo $consultTiming['created']; ?></td>
			<td><?php echo $consultTiming['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'consult_timings', 'action' => 'view', $consultTiming['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'consult_timings', 'action' => 'edit', $consultTiming['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'consult_timings', 'action' => 'delete', $consultTiming['id']), null, __('Are you sure you want to delete # %s?', $consultTiming['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Consult Timing'), array('controller' => 'consult_timings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
