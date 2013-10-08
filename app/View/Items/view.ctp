<div class="items view">
<h2><?php echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Costo'); ?></dt>
		<dd>
			<?php echo h($item['Item']['costo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo h($item['Item']['color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($item['Item']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($item['Item']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($item['Item']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Cartucho'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id_cartucho']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Modelo'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id_modelo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Marca'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id_marca']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Pedido'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id_pedido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Producto'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id_producto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
	</ul>
</div>
