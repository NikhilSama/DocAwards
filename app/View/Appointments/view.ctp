<div class="appointments view">
<h2><?php  echo __('Appointment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($appointment['User']['id'], array('controller' => 'users', 'action' => 'view', $appointment['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is All Day'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['is_all_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recuring Rule'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['recuring_rule']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Appointment'), array('action' => 'edit', $appointment['Appointment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Appointment'), array('action' => 'delete', $appointment['Appointment']['id']), null, __('Are you sure you want to delete # %s?', $appointment['Appointment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
