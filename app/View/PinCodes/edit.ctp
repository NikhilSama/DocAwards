<div class="pinCodes form">
<?php echo $this->Form->create('PinCode'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pin Code'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pin_code');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PinCode.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PinCode.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pin Codes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
