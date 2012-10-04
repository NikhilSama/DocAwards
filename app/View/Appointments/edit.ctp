<div class="appointments form">
<?php echo $this->Form->create('Appointment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Appointment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('subject');
		echo $this->Form->input('location');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
		echo $this->Form->input('is_all_day');
		echo $this->Form->input('color');
		echo $this->Form->input('recuring_rule');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Appointment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Appointment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
