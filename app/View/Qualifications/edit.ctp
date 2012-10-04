<div class="qualifications form">
<?php echo $this->Form->create('Qualification'); ?>
	<fieldset>
		<legend><?php echo __('Edit Qualification'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('doctor_id');
		echo $this->Form->input('degree_id');
		echo $this->Form->input('location_id');
		echo $this->Form->input('year');
		echo $this->Form->input('dept');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Qualification.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Qualification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Qualifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Degrees'), array('controller' => 'degrees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Degree'), array('controller' => 'degrees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
	</ul>
</div>
