<div class="specialties view">
<h2><?php  echo __('Specialty'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($specialty['Specialty']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($specialty['Specialty']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($specialty['Specialty']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($specialty['Specialty']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Specialty'), array('action' => 'edit', $specialty['Specialty']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Specialty'), array('action' => 'delete', $specialty['Specialty']['id']), null, __('Are you sure you want to delete # %s?', $specialty['Specialty']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialty'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docspeclinks'), array('controller' => 'docspeclinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docspeclink'), array('controller' => 'docspeclinks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dslinks'), array('controller' => 'dslinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dslink'), array('controller' => 'dslinks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Docspeclinks'); ?></h3>
	<?php if (!empty($specialty['Docspeclink'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Doctor Id'); ?></th>
		<th><?php echo __('Specialty Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($specialty['Docspeclink'] as $docspeclink): ?>
		<tr>
			<td><?php echo $docspeclink['id']; ?></td>
			<td><?php echo $docspeclink['doctor_id']; ?></td>
			<td><?php echo $docspeclink['specialty_id']; ?></td>
			<td><?php echo $docspeclink['created']; ?></td>
			<td><?php echo $docspeclink['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'docspeclinks', 'action' => 'view', $docspeclink['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'docspeclinks', 'action' => 'edit', $docspeclink['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'docspeclinks', 'action' => 'delete', $docspeclink['id']), null, __('Are you sure you want to delete # %s?', $docspeclink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Docspeclink'), array('controller' => 'docspeclinks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dslinks'); ?></h3>
	<?php if (!empty($specialty['Dslink'])): ?>
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
		foreach ($specialty['Dslink'] as $dslink): ?>
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
