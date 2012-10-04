<div class="consultTypes form">
<?php echo $this->Form->create('ConsultType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Consult Type'); ?></legend>
	<?php
		echo $this->Form->input('it');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ConsultType.it')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ConsultType.it'))); ?></li>
		<li><?php echo $this->Html->link(__('List Consult Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Consult Timings'), array('controller' => 'consult_timings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consult Timing'), array('controller' => 'consult_timings', 'action' => 'add')); ?> </li>
	</ul>
</div>
