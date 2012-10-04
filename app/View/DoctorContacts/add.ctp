<div class="doctorContacts form">
<?php echo $this->Form->create('DoctorContact'); ?>
	<fieldset>
		<legend><?php echo __('Add Doctor Contact'); ?></legend>
	<?php
		echo $this->Form->input('doctor_id');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Doctor Contacts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
	</ul>
</div>
