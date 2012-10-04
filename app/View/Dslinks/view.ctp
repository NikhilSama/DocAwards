<div class="dslinks view">
<h2><?php  echo __('Dslink'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dslink['Dslink']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specialty'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dslink['Specialty']['name'], array('controller' => 'specialties', 'action' => 'view', $dslink['Specialty']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disease'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dslink['Disease']['name'], array('controller' => 'diseases', 'action' => 'view', $dslink['Disease']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specialtydiseaselinktype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dslink['Specialtydiseaselinktype']['name'], array('controller' => 'specialtydiseaselinktypes', 'action' => 'view', $dslink['Specialtydiseaselinktype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dslink['Dslink']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dslink['Dslink']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dslink'), array('action' => 'edit', $dslink['Dslink']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dslink'), array('action' => 'delete', $dslink['Dslink']['id']), null, __('Are you sure you want to delete # %s?', $dslink['Dslink']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dslinks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dslink'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialties'), array('controller' => 'specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialty'), array('controller' => 'specialties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Diseases'), array('controller' => 'diseases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disease'), array('controller' => 'diseases', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialtydiseaselinktypes'), array('controller' => 'specialtydiseaselinktypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialtydiseaselinktype'), array('controller' => 'specialtydiseaselinktypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
