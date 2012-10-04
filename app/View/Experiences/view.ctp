<div class="experiences view">
<h2><?php  echo __('Experience'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dept'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['dept']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doctor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($experience['Doctor']['id'], array('controller' => 'doctors', 'action' => 'view', $experience['Doctor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($experience['Location']['name'], array('controller' => 'locations', 'action' => 'view', $experience['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Experience'), array('action' => 'edit', $experience['Experience']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Experience'), array('action' => 'delete', $experience['Experience']['id']), null, __('Are you sure you want to delete # %s?', $experience['Experience']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
	</ul>
</div>
