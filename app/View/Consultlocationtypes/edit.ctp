<div class="consultlocationtypes form">
<?php echo $this->Form->create('Consultlocationtype'); ?>
	<fieldset>
		<legend><?php echo __('Edit Consultlocationtype'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Consultlocationtype.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Consultlocationtype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Consultlocationtypes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Docconsultlocations'), array('controller' => 'docconsultlocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docconsultlocation'), array('controller' => 'docconsultlocations', 'action' => 'add')); ?> </li>
	</ul>
</div>
