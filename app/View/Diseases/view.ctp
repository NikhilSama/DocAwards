<div class="diseases view">
<h2><?php  echo __('Disease'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($disease['Disease']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($disease['Disease']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($disease['Disease']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($disease['Disease']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Disease'), array('action' => 'edit', $disease['Disease']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Disease'), array('action' => 'delete', $disease['Disease']['id']), null, __('Are you sure you want to delete # %s?', $disease['Disease']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Diseases'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disease'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dslinks'), array('controller' => 'dslinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dslink'), array('controller' => 'dslinks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dslinks'); ?></h3>
	<?php if (!empty($disease['Dslink'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Specialty Id'); ?></th>
		<th><?php echo __('Disease Id'); ?></th>
		<th><?php echo __('Specialtydiseaselinktype Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($disease['Dslink'] as $dslink): ?>
		<tr>
			<td><?php echo $dslink['id']; ?></td>
			<td><?php echo $dslink['specialty_id']; ?></td>
			<td><?php echo $dslink['disease_id']; ?></td>
			<td><?php echo $dslink['specialtydiseaselinktype_id']; ?></td>
			<td><?php echo $dslink['created']; ?></td>
			<td><?php echo $dslink['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dslinks', 'action' => 'view', $dslink['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dslinks', 'action' => 'edit', $dslink['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dslinks', 'action' => 'delete', $dslink['id']), null, __('Are you sure you want to delete # %s?', $dslink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dslink'), array('controller' => 'dslinks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
