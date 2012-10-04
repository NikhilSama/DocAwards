<div class="doctors view">
<h2><?php  echo __('Doctor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($doctor['User']['id'], array('controller' => 'users', 'action' => 'view', $doctor['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Name'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['middle_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DOB'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['DOB']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Yr Of Practice'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['first_yr_of_practice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doctor'), array('action' => 'edit', $doctor['Doctor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doctor'), array('action' => 'delete', $doctor['Doctor']['id']), null, __('Are you sure you want to delete # %s?', $doctor['Doctor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docconsultlocations'), array('controller' => 'docconsultlocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docconsultlocation'), array('controller' => 'docconsultlocations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docspeclinks'), array('controller' => 'docspeclinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docspeclink'), array('controller' => 'docspeclinks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctor Contacts'), array('controller' => 'doctor_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor Contact'), array('controller' => 'doctor_contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qualifications'), array('controller' => 'qualifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qualification'), array('controller' => 'qualifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Docconsultlocations'); ?></h3>
	<?php if (!empty($doctor['Docconsultlocation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Doctor Id'); ?></th>
		<th><?php echo __('Consultlocationtype Id'); ?></th>
		<th><?php echo __('Addl'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($doctor['Docconsultlocation'] as $docconsultlocation): ?>
		<tr>
			<td><?php echo $docconsultlocation['id']; ?></td>
			<td><?php echo $docconsultlocation['location_id']; ?></td>
			<td><?php echo $docconsultlocation['doctor_id']; ?></td>
			<td><?php echo $docconsultlocation['consultlocationtype_id']; ?></td>
			<td><?php echo $docconsultlocation['addl']; ?></td>
			<td><?php echo $docconsultlocation['created']; ?></td>
			<td><?php echo $docconsultlocation['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'docconsultlocations', 'action' => 'view', $docconsultlocation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'docconsultlocations', 'action' => 'edit', $docconsultlocation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'docconsultlocations', 'action' => 'delete', $docconsultlocation['id']), null, __('Are you sure you want to delete # %s?', $docconsultlocation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Docconsultlocation'), array('controller' => 'docconsultlocations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Docspeclinks'); ?></h3>
	<?php if (!empty($doctor['Docspeclink'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Doctor Id'); ?></th>
		<th><?php echo __('Specialty Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($doctor['Docspeclink'] as $docspeclink): ?>
		<tr>
			<td><?php echo $docspeclink['id']; ?></td>
			<td><?php echo $docspeclink['doctor_id']; ?></td>
			<td><?php echo $docspeclink['specialty_id']; ?></td>
			<td><?php echo $docspeclink['created']; ?></td>
			<td><?php echo $docspeclink['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'docspeclinks', 'action' => 'view', $docspeclink['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'docspeclinks', 'action' => 'edit', $docspeclink['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'docspeclinks', 'action' => 'delete', $docspeclink['id']), null, __('Are you sure you want to delete # %s?', $docspeclink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Docspeclink'), array('controller' => 'docspeclinks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Doctor Contacts'); ?></h3>
	<?php if (!empty($doctor['DoctorContact'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Doctor Id'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($doctor['DoctorContact'] as $doctorContact): ?>
		<tr>
			<td><?php echo $doctorContact['id']; ?></td>
			<td><?php echo $doctorContact['doctor_id']; ?></td>
			<td><?php echo $doctorContact['phone']; ?></td>
			<td><?php echo $doctorContact['email']; ?></td>
			<td><?php echo $doctorContact['created']; ?></td>
			<td><?php echo $doctorContact['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'doctor_contacts', 'action' => 'view', $doctorContact['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'doctor_contacts', 'action' => 'edit', $doctorContact['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'doctor_contacts', 'action' => 'delete', $doctorContact['id']), null, __('Are you sure you want to delete # %s?', $doctorContact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Doctor Contact'), array('controller' => 'doctor_contacts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Experiences'); ?></h3>
	<?php if (!empty($doctor['Experience'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('From'); ?></th>
		<th><?php echo __('To'); ?></th>
		<th><?php echo __('Dept'); ?></th>
		<th><?php echo __('Doctor Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($doctor['Experience'] as $experience): ?>
		<tr>
			<td><?php echo $experience['id']; ?></td>
			<td><?php echo $experience['from']; ?></td>
			<td><?php echo $experience['to']; ?></td>
			<td><?php echo $experience['dept']; ?></td>
			<td><?php echo $experience['doctor_id']; ?></td>
			<td><?php echo $experience['location_id']; ?></td>
			<td><?php echo $experience['created']; ?></td>
			<td><?php echo $experience['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'experiences', 'action' => 'view', $experience['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'experiences', 'action' => 'edit', $experience['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'experiences', 'action' => 'delete', $experience['id']), null, __('Are you sure you want to delete # %s?', $experience['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Qualifications'); ?></h3>
	<?php if (!empty($doctor['Qualification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Doctor Id'); ?></th>
		<th><?php echo __('Degree Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Dept'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($doctor['Qualification'] as $qualification): ?>
		<tr>
			<td><?php echo $qualification['id']; ?></td>
			<td><?php echo $qualification['doctor_id']; ?></td>
			<td><?php echo $qualification['degree_id']; ?></td>
			<td><?php echo $qualification['location_id']; ?></td>
			<td><?php echo $qualification['year']; ?></td>
			<td><?php echo $qualification['dept']; ?></td>
			<td><?php echo $qualification['created']; ?></td>
			<td><?php echo $qualification['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'qualifications', 'action' => 'view', $qualification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'qualifications', 'action' => 'edit', $qualification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'qualifications', 'action' => 'delete', $qualification['id']), null, __('Are you sure you want to delete # %s?', $qualification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Qualification'), array('controller' => 'qualifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
