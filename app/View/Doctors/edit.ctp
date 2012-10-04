<div class="doctors form">
<?php echo $this->Form->create('Doctor'); ?>
	<fieldset>
		<legend><?php echo __('Edit Doctor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('image');
		echo $this->Form->input('gender');
		echo $this->Form->input('DOB');
		echo $this->Form->input('first_yr_of_practice');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Doctor.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Doctor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docconsultlocations'), array('controller' => 'docconsultlocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docconsultlocation'), array('controller' => 'docconsultlocations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docspeclinks'), array('controller' => 'docspeclinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docspeclink'), array('controller' => 'docspeclinks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctor Contacts'), array('controller' => 'doctor_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor Contact'), array('controller' => 'doctor_contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qualifications'), array('controller' => 'qualifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qualification'), array('controller' => 'qualifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
