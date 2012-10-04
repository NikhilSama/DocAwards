<div class="specialtydiseaselinktypes form">
<?php echo $this->Form->create('Specialtydiseaselinktype'); ?>
	<fieldset>
		<legend><?php echo __('Add Specialtydiseaselinktype'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Specialtydiseaselinktypes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dslinks'), array('controller' => 'dslinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dslink'), array('controller' => 'dslinks', 'action' => 'add')); ?> </li>
	</ul>
</div>
