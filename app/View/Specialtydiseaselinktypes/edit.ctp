<div class="specialtydiseaselinktypes form">
<?php echo $this->Form->create('Specialtydiseaselinktype'); ?>
	<fieldset>
		<legend><?php echo __('Edit Specialtydiseaselinktype'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Specialtydiseaselinktype.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Specialtydiseaselinktype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Specialtydiseaselinktypes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dslinks'), array('controller' => 'dslinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dslink'), array('controller' => 'dslinks', 'action' => 'add')); ?> </li>
	</ul>
</div>
