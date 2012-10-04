<div class="qualifications view">
<h2><?php  echo __('Qualification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($qualification['Qualification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doctor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($qualification['Doctor']['id'], array('controller' => 'doctors', 'action' => 'view', $qualification['Doctor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Degree'); ?></dt>
		<dd>
			<?php echo $this->Html->link($qualification['Degree']['name'], array('controller' => 'degrees', 'action' => 'view', $qualification['Degree']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($qualification['Location']['name'], array('controller' => 'locations', 'action' => 'view', $qualification['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($qualification['Qualification']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dept'); ?></dt>
		<dd>
			<?php echo h($qualification['Qualification']['dept']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($qualification['Qualification']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($qualification['Qualification']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Qualification'), array('action' => 'edit', $qualification['Qualification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Qualification'), array('action' => 'delete', $qualification['Qualification']['id']), null, __('Are you sure you want to delete # %s?', $qualification['Qualification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Qualifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qualification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Degrees'), array('controller' => 'degrees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Degree'), array('controller' => 'degrees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
	</ul>
</div>
