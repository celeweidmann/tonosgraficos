<div class="row">
	<div class="col-md-2 col-md-offset-1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-8">
		<div class="row pedidos index">
			<div class="pedidos form">
				<?php echo $this->Form->create('Pedido'); ?>
				<fieldset>
					<legend><?php echo __('Nuevo Pedido'); ?></legend>
					<?php
						echo $this->Form->label('Cliente');
						echo ': '.$users['User']['name'].' '.$users['User']['surname'];
				//		echo $this->Form->input('user', array('disabled' => true, 'value'=>$users['User']['name']));  
				
						//echo $this->Form->input('cliente');
						//echo $this->Form->input('estado_id');
						//echo $this->Form->input('estado_id', array('type'=>'select'));
						//echo $this->Form->input('transporte_id');
						echo $this->Form->input('transporte_id', array('type'=>'select'));
						//echo $this->Form->input('costo');
						//echo $this->Form->input('cliente');
						//echo $this->Form->input('user_id');
						//echo $this->Form->input('user_id');
						
					?>
					<?php 
						//	echo $this->Html->link('agregar item', array('controller' => 'Items', 'action' => 'solicitar'));
					?>
				</fieldset><br>
				<?php echo $this->Form->end(__('Siguiente')); ?>
			</div>
		</div>
	</div>
</div>