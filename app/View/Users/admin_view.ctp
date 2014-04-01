<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="users view">
			<legend><h3><?php echo __('User'); ?></h3></legend>
			<!--
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
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($user['User']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Surname'); ?></dt>
				<dd>
					<?php echo h($user['User']['surname']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Email'); ?></dt>
				<dd>
					<?php echo h($user['User']['email']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Telefono'); ?></dt>
				<dd>
					<?php echo h($user['User']['telefono']); ?>
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
			</dl>-->
			
			<table class="table table-striped">
				<tr>
					<td>Id</td>
					<td><?php echo ($user['User']['id']); ?></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo ($user['User']['username']); ?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><?php echo ($user['User']['password']); ?></td>
				</tr>
				<tr>
					<td>Role</td>
					<td><?php echo ($user['User']['role']); ?></td>
				</tr><tr>
					<td>Nombre</td>
					<td><?php echo ($user['User']['name']); ?></td>
				</tr>
				<tr>
					<td>Apellido</td>
					<td><?php echo ($user['User']['surname']); ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo ($user['User']['email']); ?></td>
				</tr>
				<tr>
					<td>Teléfono</td>
					<td><?php echo ($user['User']['telefono']); ?></td>
				</tr>
				<tr>
					<td>Creado</td>
					<td><?php echo ($user['User']['created']); ?></td>
				</tr>
				<tr>
					<td>Modificado</td>
					<td><?php echo ($user['User']['modified']); ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>