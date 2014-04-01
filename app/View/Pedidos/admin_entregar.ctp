<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?></li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pedido.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Pedido.id'))); ?></li>			
			</ul>
		</div>	
	</div>
	<div class="col-md-10">
		<div class="pedidos form">
			<?php echo $this->Form->create('Pedido'); ?>
			<fieldset>
				<legend><h3><?php echo __('Edit Pedido'); ?></h3></legend>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('estado_id');
					echo $this->Form->input('transporte_id');
					echo $this->Form->input('costo');
					echo $this->Form->input('cliente', array( 'disabled' => 'disabled'));
					echo $this->Form->input('user_id', array('type'=>'text', 'label' => 'Usuario', 'disabled' => 'disabled' ));
				?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>