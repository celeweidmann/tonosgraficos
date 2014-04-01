<div class="row">
	<!--<div class="col-md-2 col-md-offset-1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>-->
	<br><br>
	<div class="col-md-12">
		<div class="row">
		<div class="col-md-4">
			<p><span class="badge pasos pasoactivo">1 </span> Elegi el transporte para realizar el envío.
			</p>
		</div>
		<div class="col-md-4">
			<p class="pasonoactivo"><span class="badge pasos">2 </span> Seleccioná los items del pedido y confirmá.</p>
		</div>
		<div class="col-md-4">
			<p class="pasonoactivo"><span class="badge pasos">3 </span> Recibiras información de pago</p>
		</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="row pedidos index">
			<div class="pedidos form">
				<?php echo $this->Form->create('Pedido'); ?>
				<fieldset>
					<!--<legend><?php echo __('Nuevo Pedido'); ?></legend>-->
					<h3><?php echo __('Nuevo Pedido'); ?></h3>
			
					<?php
						echo $this->Form->label('Cliente');
						//echo ': '.$users['User']['name'].' '.$users['User']['surname'];
				//		echo $this->Form->input('user', array('disabled' => true, 'value'=>$users['User']['name']));  
				
						echo $this->Form->input('cliente' , array('value'=>$users['User']['name'].' '.$users['User']['surname'])) ;
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
				<!--<?php echo $this->Form->end(__('Siguiente')); ?>-->
				
				
				

				<? echo '<input type="submit" value="Siguiente" class="btn btn-success"/>
						
						</form>';?>


			</div>
		</div>
	</div>
</div>