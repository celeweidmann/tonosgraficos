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
