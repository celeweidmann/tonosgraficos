<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Add Item'); ?></legend>
	<?php
		echo $this->Form->input('costo');
		echo $this->Form->input('color');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('id_cartucho');
		echo $this->Form->input('id_modelo');
		echo $this->Form->input('id_marca');
		echo $this->Form->input('id_pedido');
		echo $this->Form->input('id_producto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
	</ul>
</div>