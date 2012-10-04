<div class="docconsultlocations form">
<?php echo $this->Form->create('Docconsultlocation'); ?>
	<fieldset>
		<legend><?php echo __('Add Docconsultlocation'); ?></legend>
	<?php
		echo $this->Form->input('location_id');
		echo $this->Form->input('doctor_id');
		echo $this->Form->input('consultlocationtype_id');
		echo $this->Form->input('addl');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Docconsultlocations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consultlocationtypes'), array('controller' => 'consultlocationtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consultlocationtype'), array('controller' => 'consultlocationtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consult Timings'), array('controller' => 'consult_timings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consult Timing'), array('controller' => 'consult_timings', 'action' => 'add')); ?> </li>
	</ul>
</div>
