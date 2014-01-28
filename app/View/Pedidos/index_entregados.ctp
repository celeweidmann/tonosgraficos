<div class="row">
	<!--<div class="col-md-2 col-md-offset-1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Listado Pedido'), array('action' => 'index')); ?></li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Agregar Pedido'), array('action' => 'agregar')); ?></li>
			</ul>
		</div>
	</div>-->
	<div class="col-md-12">
		<div class="row pedidos index">
			<h3><?php echo __('Pedidos'); ?></h3>
			
			<ul class="nav nav-tabs">
				<li>
					<?php echo $this->Html->link('Todos', array('action'=>'index'));?>
  				</li>
  				<li>
  					<?php echo $this->Html->link('Pendientes', array('action'=>'index_pendientes'));?>
  				</li>
  				<li>
  					<?php echo $this->Html->link('Pagados', array('action'=>'index_pagados'));?>
  				</li>
  				<li class="active">
  					<?php echo $this->Html->link('Entregados', array('action'=>'index_entregados'));?>
  				</li>
			</ul>
			<br>
			
			<table class="table table-striped" cellpadding="0" cellspacing="0">
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
					<th><?php echo $this->Paginator->sort('transporte_id'); ?></th>
					<th><?php echo $this->Paginator->sort('costo'); ?></th>
					<th><?php echo $this->Paginator->sort('cliente'); ?></th>
					<th><?php echo $this->Paginator->sort('created'); ?></th>
					<th><?php echo $this->Paginator->sort('modified'); ?></th>
					<th><?php echo $this->Paginator->sort('user_id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($pedidospendientes as $pedido): ?>
			<tr>
				<td><?php echo h($pedido['Pedido']['id']); ?>&nbsp;</td>
				<!--<td><?php echo h($pedido['Pedido']['estado_id']); ?>&nbsp;</td>-->
				<td><?php echo h($pedido['Estado']['name']); ?>&nbsp;</td>
				<!--<td><?php echo h($pedido['Pedido']['transporte_id']); ?>&nbsp;</td>-->
				<td><?php echo h($pedido['Transporte']['name']); ?>&nbsp;</td>
				<td><?php echo h($pedido['Pedido']['costo']); ?>&nbsp;</td>
				<td><?php echo h($pedido['Pedido']['cliente']); ?>&nbsp;</td>
				<td><?php echo h($pedido['Pedido']['created']); ?>&nbsp;</td>
				<td><?php echo h($pedido['Pedido']['modified']); ?>&nbsp;</td>
				<!--<td><?php echo h($pedido['Pedido']['user_id']); ?>&nbsp;</td>-->
				<td><?php echo h($pedido['User']['name']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $pedido['Pedido']['id'])); ?>
				<!--	<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pedido['Pedido']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pedido['Pedido']['id']), null, __('Are you sure you want to delete # %s?', $pedido['Pedido']['id'])); ?>-->
				</td>
			</tr>
		<?php endforeach; ?>
			</table>
			<p>
			<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?>	</p>
			<div class="paging">
			<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
			</div>
		</div>
	</div>
</div>

<!--


<div class="pedidos index">
	<h2><?php echo __('Pedidos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('transporte_id'); ?></th>
			<th><?php echo $this->Paginator->sort('costo'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pedidos as $pedido): ?>
	<tr>
		<td><?php echo h($pedido['Pedido']['id']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['estado_id']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['transporte_id']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['costo']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['cliente']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['created']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['modified']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['user_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pedido['Pedido']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pedido['Pedido']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pedido['Pedido']['id']), null, __('Are you sure you want to delete # %s?', $pedido['Pedido']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Pedido'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Pedido'), array('action' => 'agregar')); ?></li>
	</ul>
</div>
-->