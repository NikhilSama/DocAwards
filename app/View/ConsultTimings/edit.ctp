<div class="consultTimings form">
<?php echo $this->Form->create('ConsultTiming'); ?>
	<fieldset>
		<legend><?php echo __('Edit Consult Timing'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('monday');
		echo $this->Form->input('tuesday');
		echo $this->Form->input('wednesday');
		echo $this->Form->input('thursday');
		echo $this->Form->input('friday');
		echo $this->Form->input('saturday');
		echo $this->Form->input('sunday');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
		echo $this->Form->input('consult_type_id');
		echo $this->Form->input('docconsultlocation_id');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ConsultTiming.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ConsultTiming.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Consult Timings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Consult Types'), array('controller' => 'consult_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consult Type'), array('controller' => 'consult_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docconsultlocations'), array('controller' => 'docconsultlocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docconsultlocation'), array('controller' => 'docconsultlocations', 'action' => 'add')); ?> </li>
	</ul>
</div>
