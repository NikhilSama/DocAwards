<div class="doctorContacts view">
<h2><?php  echo __('Doctor Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($doctorContact['DoctorContact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doctor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($doctorContact['Doctor']['id'], array('controller' => 'doctors', 'action' => 'view', $doctorContact['Doctor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($doctorContact['DoctorContact']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($doctorContact['DoctorContact']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($doctorContact['DoctorContact']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($doctorContact['DoctorContact']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doctor Contact'), array('action' => 'edit', $doctorContact['DoctorContact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doctor Contact'), array('action' => 'delete', $doctorContact['DoctorContact']['id']), null, __('Are you sure you want to delete # %s?', $doctorContact['DoctorContact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctor Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor Contact'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
	</ul>
</div>
