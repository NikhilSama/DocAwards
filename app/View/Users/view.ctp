<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Post Feedbacks'), array('controller' => 'post_feedbacks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post Feedback'), array('controller' => 'post_feedbacks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Question Followers'), array('controller' => 'question_followers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question Follower'), array('controller' => 'question_followers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Appointments'); ?></h3>
	<?php if (!empty($user['Appointment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Subject'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('Is All Day'); ?></th>
		<th><?php echo __('Color'); ?></th>
		<th><?php echo __('Recuring Rule'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Appointment'] as $appointment): ?>
		<tr>
			<td><?php echo $appointment['id']; ?></td>
			<td><?php echo $appointment['user_id']; ?></td>
			<td><?php echo $appointment['subject']; ?></td>
			<td><?php echo $appointment['location']; ?></td>
			<td><?php echo $appointment['start']; ?></td>
			<td><?php echo $appointment['end']; ?></td>
			<td><?php echo $appointment['is_all_day']; ?></td>
			<td><?php echo $appointment['color']; ?></td>
			<td><?php echo $appointment['recuring_rule']; ?></td>
			<td><?php echo $appointment['created']; ?></td>
			<td><?php echo $appointment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'appointments', 'action' => 'view', $appointment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'appointments', 'action' => 'edit', $appointment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'appointments', 'action' => 'delete', $appointment['id']), null, __('Are you sure you want to delete # %s?', $appointment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Doctors'); ?></h3>
	<?php if (!empty($user['Doctor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Middle Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('DOB'); ?></th>
		<th><?php echo __('First Yr Of Practice'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Doctor'] as $doctor): ?>
		<tr>
			<td><?php echo $doctor['id']; ?></td>
			<td><?php echo $doctor['user_id']; ?></td>
			<td><?php echo $doctor['first_name']; ?></td>
			<td><?php echo $doctor['middle_name']; ?></td>
			<td><?php echo $doctor['last_name']; ?></td>
			<td><?php echo $doctor['image']; ?></td>
			<td><?php echo $doctor['gender']; ?></td>
			<td><?php echo $doctor['DOB']; ?></td>
			<td><?php echo $doctor['first_yr_of_practice']; ?></td>
			<td><?php echo $doctor['created']; ?></td>
			<td><?php echo $doctor['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'doctors', 'action' => 'view', $doctor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'doctors', 'action' => 'edit', $doctor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'doctors', 'action' => 'delete', $doctor['id']), null, __('Are you sure you want to delete # %s?', $doctor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Patients'); ?></h3>
	<?php if (!empty($user['Patient'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Pin Code Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Patient'] as $patient): ?>
		<tr>
			<td><?php echo $patient['id']; ?></td>
			<td><?php echo $patient['user_id']; ?></td>
			<td><?php echo $patient['first_name']; ?></td>
			<td><?php echo $patient['last_name']; ?></td>
			<td><?php echo $patient['email']; ?></td>
			<td><?php echo $patient['phone']; ?></td>
			<td><?php echo $patient['address']; ?></td>
			<td><?php echo $patient['city_id']; ?></td>
			<td><?php echo $patient['pin_code_id']; ?></td>
			<td><?php echo $patient['country_id']; ?></td>
			<td><?php echo $patient['created']; ?></td>
			<td><?php echo $patient['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'patients', 'action' => 'view', $patient['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'patients', 'action' => 'edit', $patient['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'patients', 'action' => 'delete', $patient['id']), null, __('Are you sure you want to delete # %s?', $patient['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Post Feedbacks'); ?></h3>
	<?php if (!empty($user['PostFeedback'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Like'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['PostFeedback'] as $postFeedback): ?>
		<tr>
			<td><?php echo $postFeedback['id']; ?></td>
			<td><?php echo $postFeedback['post_id']; ?></td>
			<td><?php echo $postFeedback['user_id']; ?></td>
			<td><?php echo $postFeedback['like']; ?></td>
			<td><?php echo $postFeedback['comment']; ?></td>
			<td><?php echo $postFeedback['created']; ?></td>
			<td><?php echo $postFeedback['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'post_feedbacks', 'action' => 'view', $postFeedback['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'post_feedbacks', 'action' => 'edit', $postFeedback['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'post_feedbacks', 'action' => 'delete', $postFeedback['id']), null, __('Are you sure you want to delete # %s?', $postFeedback['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post Feedback'), array('controller' => 'post_feedbacks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($user['Post'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><?php echo $post['user_id']; ?></td>
			<td><?php echo $post['question_id']; ?></td>
			<td><?php echo $post['title']; ?></td>
			<td><?php echo $post['content']; ?></td>
			<td><?php echo $post['created']; ?></td>
			<td><?php echo $post['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['id']), null, __('Are you sure you want to delete # %s?', $post['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Question Followers'); ?></h3>
	<?php if (!empty($user['QuestionFollower'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['QuestionFollower'] as $questionFollower): ?>
		<tr>
			<td><?php echo $questionFollower['id']; ?></td>
			<td><?php echo $questionFollower['question_id']; ?></td>
			<td><?php echo $questionFollower['user_id']; ?></td>
			<td><?php echo $questionFollower['created']; ?></td>
			<td><?php echo $questionFollower['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'question_followers', 'action' => 'view', $questionFollower['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'question_followers', 'action' => 'edit', $questionFollower['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'question_followers', 'action' => 'delete', $questionFollower['id']), null, __('Are you sure you want to delete # %s?', $questionFollower['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Question Follower'), array('controller' => 'question_followers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Questions'); ?></h3>
	<?php if (!empty($user['Question'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Question'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Question'] as $question): ?>
		<tr>
			<td><?php echo $question['id']; ?></td>
			<td><?php echo $question['user_id']; ?></td>
			<td><?php echo $question['question']; ?></td>
			<td><?php echo $question['created']; ?></td>
			<td><?php echo $question['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'questions', 'action' => 'view', $question['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'questions', 'action' => 'edit', $question['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'questions', 'action' => 'delete', $question['id']), null, __('Are you sure you want to delete # %s?', $question['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
