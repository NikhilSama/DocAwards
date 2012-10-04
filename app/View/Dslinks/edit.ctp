<div class="dslinks form">
<?php echo $this->Form->create('Dslink'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dslink'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('specialty_id');
		echo $this->Form->input('disease_id');
		echo $this->Form->input('specialtydiseaselinktype_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Dslink.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Dslink.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dslinks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Specialties'), array('controller' => 'specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialty'), array('controller' => 'specialties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Diseases'), array('controller' => 'diseases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disease'), array('controller' => 'diseases', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialtydiseaselinktypes'), array('controller' => 'specialtydiseaselinktypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialtydiseaselinktype'), array('controller' => 'specialtydiseaselinktypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
