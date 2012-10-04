<div class="degrees form">
<?php echo $this->Form->create('Degree'); ?>
	<fieldset>
		<legend><?php echo __('Edit Degree'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Degree.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Degree.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Degrees'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Qualifications'), array('controller' => 'qualifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qualification'), array('controller' => 'qualifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
