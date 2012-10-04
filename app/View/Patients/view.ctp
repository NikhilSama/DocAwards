<div class="patients view">
<h2><?php  echo __('Patient'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($patient['User']['id'], array('controller' => 'users', 'action' => 'view', $patient['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($patient['City']['name'], array('controller' => 'cities', 'action' => 'view', $patient['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pin Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($patient['PinCode']['id'], array('controller' => 'pin_codes', 'action' => 'view', $patient['PinCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($patient['Country']['name'], array('controller' => 'countries', 'action' => 'view', $patient['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Patient'), array('action' => 'edit', $patient['Patient']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Patient'), array('action' => 'delete', $patient['Patient']['id']), null, __('Are you sure you want to delete # %s?', $patient['Patient']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pin Codes'), array('controller' => 'pin_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pin Code'), array('controller' => 'pin_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
