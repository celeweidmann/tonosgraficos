<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="pedidos form">
			<?php echo $this->Form->create('Pedido'); ?>
			<fieldset>
				<legend><h3><?php echo __('Add Pedido'); ?></h3></legend>
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
	</div>
</div>

