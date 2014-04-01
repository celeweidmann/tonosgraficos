<div class="col-md-2">
	<div class="actions">
		<!--<h3><?php echo __('Actions'); ?></h3>-->
		<br><br>
		<ul>
			<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
			<!--<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>-->
			<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
			<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		</ul>
	</div>
</div>
<div class="col-md-10">
	<div class="items view">
		<legend><h3><?php echo __('Item'); ?></h3></legend>
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
				<?php echo h($item['Item']['tinta']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Cantidad'); ?></dt>
			<dd>
				<?php echo h($item['Item']['recipiente']); ?>
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
			<dt><?php echo __('Cartucho'); ?></dt>
			<dd>
				<?php echo h($item['Cartucho']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Id Modelo'); ?></dt>
			<dd>
				<?php echo h($item['Modelo']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Marca'); ?></dt>
			<dd>
				<?php echo h($item['Marca']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Id Pedido'); ?></dt>
			<dd>
				<?php echo h($item['Item']['pedido_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Id Producto'); ?></dt>
			<dd>
				<?php echo h($item['Item']['producto_id']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
</div>
