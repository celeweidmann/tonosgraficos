<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['id']), null, __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="productos view">
		<legend><h3><?php echo __('Producto'); ?></h3></legend>	
			<!--
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($producto['Producto']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Precio'); ?></dt>
				<dd>
					<?php echo h($producto['Producto']['precio']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Cartucho'); ?></dt>
				<dd>
					<?php /*echo h($producto['Producto']['cartucho_id']);*/ ?>
					<?php echo h($producto['Cartucho']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Tinta'); ?></dt>
				<dd>
					<?php /*echo h($producto['Producto']['tinta_id']);*/ ?>
					<?php echo h($producto['Tinta']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Recipiente'); ?></dt>
				<dd>
					<?php /*echo h($producto['Producto']['recipiente_id']); */?>
					<?php echo h($producto['Recipiente']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($producto['Producto']['created']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Modified'); ?></dt>
				<dd>
					<?php echo h($producto['Producto']['modified']); ?>
					&nbsp;
				</dd>
			</dl>-->
			<table class="table table-striped">
				<tr>
					<td>Id</td>
					<td><?php echo h($producto['Producto']['id']); ?></td>
				</tr>
				<tr>
					<td>Precio</td>
					<td><?php echo h($producto['Producto']['precio']); ?></td>
				</tr>
				<tr>
					<td>Cartucho</td>
					<td><?php echo h($producto['Cartucho']['name']); ?></td>
				</tr>
				<tr>
					<td>Tinta</td>
					<td><?php echo h($producto['Tinta']['name']); ?></td>
				</tr>
				<tr>
					<td>Recipiente</td>
					<td><?php echo h($producto['Recipiente']['name']); ?></td>
				</tr>
				<tr>
					<td>Creado</td>
					<td><?php echo h($producto['Producto']['created']); ?></td>
				</tr>
				<tr>
					<td>Modificado</td>
					<td><?php echo h($producto['Producto']['modified']); ?></td>
				</tr>
			</table>
		</div>
		
	</div>
</div>