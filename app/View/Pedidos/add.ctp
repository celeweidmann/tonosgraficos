<div class="pedidos form">
<?php echo $this->Form->create('Pedido'); ?>
	<fieldset>
		<legend><?php echo __('Add Pedido'); ?></legend>
	<?php
		//echo $this->Form->input('estado_id');
		echo $this->Form->input('estado_id', array('type'=>'select'));
		//echo $this->Form->input('transporte_id');
		echo $this->Form->input('transporte_id', array('type'=>'select'));
		echo $this->Form->input('costo');
		echo $this->Form->input('cliente');
		//echo $this->Form->input('user_id');
		echo $this->Form->input('user_id', array('type'=>'select'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?></li>
	</ul>
</div>
