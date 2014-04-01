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
			<p class="pasonoactivo"><span class="badge pasos">1 </span> Elegi el transporte para realizar el envío.
			</p>
		</div>
		<div class="col-md-4">
			<p class="pasonoactivo"><span class="badge pasos">2 </span> Seleccioná los items del pedido y confirmá.</p>
		</div>
		<div class="col-md-4">
			<p><span class="badge pasos pasoactivo">3 </span> Recibiras información de pago</p>
		</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="row pedidos index">
			<div class="col-md-10">
				<div class="row">
					<h3>Opciones de Pago</h3>
					<p>A traves de:</p>	
				</div>
				<div class="row">
					<div class="col-md-12">			
						<div class="col-md-4">
							<dl>
								<dt>Transferencia Bancaria</dt>
								<dd>
									CBU:<br>
									Nº de Cuenta:<br>
									A nombre de:<br>
								</dd>
							</dl>
						</div>
						<div class="col-md-4">
							<dl>
							<dt>Mercado Pago</dt>
								<dd>
								</dd>	
							</dl>
						</div>
						<div class="col-md-4">
							<dl>
								<dt>Pago en el exterior</dt>
								<dd>
									Western Union<br>
									PayPal<br>
								</dd>	
							</dl>
						</div>
					</div>
				</div>
				<div class="row">
					
		<?php echo $this->Html->link('Finalizar pedido', array('controller' => 'pedidos', 'action' => 'index'), array('class'=>'btn btn-success pull-right'));?>
				</div>
			</div>
		</div>
	</div>
</div>