<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Pedido'), array('action' => 'add')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Pedido'), array('action' => 'edit', $pedido['Pedido']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Pedido'), array('action' => 'delete', $pedido['Pedido']['id']), null, __('Are you sure you want to delete # %s?', $pedido['Pedido']['id'])); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="row pedidos">
			<legend><h3><?php echo __('Pedido'); ?></h3></legend>
			<dl class="dl-horizontal">
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($pedido['Pedido']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Estado Id'); ?></dt>
				<dd>
					<!--<?php echo h($pedido['Pedido']['estado_id']); ?>-->
					<?php echo h($pedido['Estado']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Cliente'); ?></dt>
				<dd>
					<!--<?php echo h($pedido['Pedido']['transporte_id']); ?>-->
					<?php echo h($pedido['Pedido']['cliente']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Transporte Id'); ?></dt>
				<dd>
					<!--<?php echo h($pedido['Pedido']['transporte_id']); ?>-->
					<?php echo h($pedido['Transporte']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Costo'); ?></dt>
				<dd>
					<?php echo h($pedido['Pedido']['costo']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
		<div class="row">
			<legend><h3>Items</h3></legend>
			<table  class="table table-striped">
				<thead>
					<tr>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Cartucho</th>
						<th>Tinta</th>
						<th>Recipiente</th>
						<th>Costo</th>
					</tr>
				</thead>
				<tbody>
					
					<?php 
						foreach ($items as $item):
							echo '<tr>';
							echo '<td>'.$item['Marca']['name'].'</td>';
							echo '<td>'.$item['Modelo']['name'].'</td>';
							echo '<td>'.$item['Cartucho']['name'].'</td>';
							echo '<td>'.$item['Item']['tinta'].'</td>';
							echo '<td>'.$item['Item']['recipiente'].'</td>';
							echo '<td>'.$item['Item']['costo'].'</td>';
							echo '</tr>';
						endforeach;
					?>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="5">Total</th>
						<th> <?php echo $pedido['Pedido']['costo'];?></th>
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