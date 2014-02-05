<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="col-md-2">
	<div class="actions">
		<!--<h3><?php echo __('Actions'); ?></h3>-->
		<br><br>
		<ul>
			<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
		</ul>
	</div>
</div>
<div class="col-md-10">
	<div class="items form">
	<?php echo $this->Form->create('Item'); ?>
		<fieldset>
			<legend><h3><?php echo __('Add Item'); ?></h3></legend>
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
</div>

