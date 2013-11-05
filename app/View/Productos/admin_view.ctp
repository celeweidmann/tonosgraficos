<div class="row">
	<div class="col-md-2 col-md-offset-1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['id']), null, __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-8">
		<div class="productos view">
		<h2><?php echo __('Producto'); ?></h2>
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
				<dt><?php echo __('Cartucho Id'); ?></dt>
				<dd>
					<?php echo h($producto['Producto']['cartucho_id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Tinta Id'); ?></dt>
				<dd>
					<?php echo h($producto['Producto']['tinta_id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Recipiente Id'); ?></dt>
				<dd>
					<?php echo h($producto['Producto']['recipiente_id']); ?>
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
			</dl>
		</div>
		
	</div>
</div>