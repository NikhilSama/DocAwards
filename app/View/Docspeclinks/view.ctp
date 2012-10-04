<div class="docspeclinks view">
<h2><?php  echo __('Docspeclink'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($docspeclink['Docspeclink']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doctor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docspeclink['Doctor']['id'], array('controller' => 'doctors', 'action' => 'view', $docspeclink['Doctor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specialty'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docspeclink['Specialty']['name'], array('controller' => 'specialties', 'action' => 'view', $docspeclink['Specialty']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($docspeclink['Docspeclink']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($docspeclink['Docspeclink']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Docspeclink'), array('action' => 'edit', $docspeclink['Docspeclink']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Docspeclink'), array('action' => 'delete', $docspeclink['Docspeclink']['id']), null, __('Are you sure you want to delete # %s?', $docspeclink['Docspeclink']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Docspeclinks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docspeclink'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialties'), array('controller' => 'specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialty'), array('controller' => 'specialties', 'action' => 'add')); ?> </li>
	</ul>
</div>
