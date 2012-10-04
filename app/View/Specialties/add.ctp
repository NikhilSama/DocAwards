<div class="specialties form">
<?php echo $this->Form->create('Specialty'); ?>
	<fieldset>
		<legend><?php echo __('Add Specialty'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Specialties'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Docspeclinks'), array('controller' => 'docspeclinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docspeclink'), array('controller' => 'docspeclinks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dslinks'), array('controller' => 'dslinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dslink'), array('controller' => 'dslinks', 'action' => 'add')); ?> </li>
	</ul>
</div>
