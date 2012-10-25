<div class="doctors form">
<?php echo $this->Form->create('Doctor', array('type' => 'file')); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('image', array('label' => 'Picture', 'type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
