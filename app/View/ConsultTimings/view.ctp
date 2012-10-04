<div class="consultTimings view">
<h2><?php  echo __('Consult Timing'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consultTiming['ConsultTiming']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monday'); ?></dt>
		<dd>
			<?php echo h($consultTiming['ConsultTiming']['monday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tuesday'); ?></dt>
		<dd>
			<?php echo h($consultTiming['ConsultTiming']['tuesday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wednesday'); ?></dt>
		<dd>
			<?php echo h($consultTiming['ConsultTiming']['wednesday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thursday'); ?></dt>
		<dd>
			<?php echo h($consultTiming['ConsultTiming']['thursday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Friday'); ?></dt>
		<dd>
			<?php echo h($consultTiming['ConsultTiming']['friday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saturday'); ?></dt>
		<dd>
			<?php echo h($consultTiming['ConsultTiming']['saturday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sunday'); ?></dt>
		<dd>
			<?php echo h($consultTiming['ConsultTiming']['sunday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($consultTiming['ConsultTiming']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End'); ?></dt>
		<dd>
			<?php echo h($consultTiming['ConsultTiming']['end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consult Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consultTiming['ConsultType']['name'], array('controller' => 'consult_types', 'action' => 'view', $consultTiming['ConsultType']['it'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Docconsultlocation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consultTiming['Docconsultlocation']['id'], array('controller' => 'docconsultlocations', 'action' => 'view', $consultTiming['Docconsultlocation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($consultTiming['ConsultTiming']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($consultTiming['ConsultTiming']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($consultTiming['ConsultTiming']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($consultTiming['ConsultTiming']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Consult Timing'), array('action' => 'edit', $consultTiming['ConsultTiming']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Consult Timing'), array('action' => 'delete', $consultTiming['ConsultTiming']['id']), null, __('Are you sure you want to delete # %s?', $consultTiming['ConsultTiming']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Consult Timings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consult Timing'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consult Types'), array('controller' => 'consult_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consult Type'), array('controller' => 'consult_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docconsultlocations'), array('controller' => 'docconsultlocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docconsultlocation'), array('controller' => 'docconsultlocations', 'action' => 'add')); ?> </li>
	</ul>
</div>
