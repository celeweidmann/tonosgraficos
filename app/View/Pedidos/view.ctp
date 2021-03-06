<div class="row">
	<div class="col-md-2 col-md-offset-1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<!--<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Pedido'), array('action' => 'edit', $pedido['Pedido']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Pedido'), array('action' => 'delete', $pedido['Pedido']['id']), null, __('Are you sure you want to delete # %s?', $pedido['Pedido']['id'])); ?> </li>-->
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?> </li>
				<!--<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Pedido'), array('action' => 'add')); ?> </li>-->
			</ul>
		</div>
	</div>
	<div class="col-md-8">
		<div class="row pedidos">
			<h2><?php echo __('Pedido'); ?></h2>
			<dl class="dl-horizontal">
				<!--<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($pedido['Pedido']['id']); ?>
					&nbsp;
				</dd>-->
				<dt><?php echo __('Estado'); ?></dt>
				<dd>
					<?php echo h($pedido['Estado']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Transporte'); ?></dt>
				<dd>
					<?php echo h($pedido['Transporte']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Costo Total'); ?></dt>
				<dd>
					$ <?php echo h($pedido['Pedido']['costo']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
		<div class="row">
			<table  class="table table-striped">
				<thead>
					<tr>
						<th>Item</th>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Cartucho</th>
						<th>Tinta</th>
						<th>Recipiente</th>
						<th>Precio</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($items as $item): ?>
					<tr>
						<td>
							<?php echo $item['Item']['id'];?>
						</td>
						<td>
							<?php echo $item['Marca']['name'];?>
						</td>
						<td>
							<?php echo $item['Modelo']['name'];?>
						</td>
						<td>
							<?php echo $item['Cartucho']['name'];?>
						</td>
						<td>
							<?php echo $item['Item']['tinta'];?>
						</td>
						<td>
							<?php echo $item['Item']['recipiente'];?>
						</td>
						<td>
							<?php echo $item['Item']['costo'];?>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="5"></th>
						<th >Total</th>
						<th><?php echo $pedido['Pedido']['costo'] ?></th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
<!--
<div class="pedidos view">
<h2><?php echo __('Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Id'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['estado_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transporte Id'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['transporte_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Costo'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['costo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['cliente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pedido'), array('action' => 'edit', $pedido['Pedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pedido'), array('action' => 'delete', $pedido['Pedido']['id']), null, __('Are you sure you want to delete # %s?', $pedido['Pedido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('action' => 'add')); ?> </li>
	</ul>
</div>
-->