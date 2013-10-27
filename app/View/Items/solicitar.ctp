<link href="/css/items/solicitar.css" type="text/css" rel="stylesheet">

<div class="row">
	<!--
	<div class="col-md-2 col-md-offset-1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Crear Pedido'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>-->
	<div class="col-md-4">
		<div class="row pedidos index">
			<div class="items form">
				<?php echo $this->Form->create('Item'); ?>
					<fieldset>
						<legend><?php echo __('Add Item'); ?></legend>
						<?php
							echo $this->Form->input('marca_id', array('empty' => 'Elije una marca'));
					        echo $this->Form->input('modelo_id', array('empty' => 'Elije un modelo'));
					        echo $this->Form->input('cartucho_id', array('empty' => 'Elije un cartucho'));	
							
							//echo $this->Form->input('tinta_id', array('type'=>'select'));
							//echo $this->Form->input('recipiente_id', array('type'=>'select'));
							echo $this->Form->input('tinta', array('type'=>'select'));
							echo $this->Form->input('recipiente', array('type'=>'select'));
						?>
					</fieldset>
				<?php echo $this->Form->end(__('Agregar al carrito')); ?>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<legend><?php echo __('Pedido'); ?></legend>
		<table  class="table table-striped">
			<thead>
				<tr>
					<th>Cartucho</th>
					<th>Tinta</th>
					<th>Cantidad</th>
					<th>Costo</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?foreach ($items as $item){
					echo '<tr>';
					echo '<td>'.$item['Cartucho']['name'].'</td>';
					echo '<td>'.$item['Item']['tinta'].'</td>';
					echo '<td>'.$item['Item']['recipiente'].'</td>';
					echo '<td>'.$item['Item']['costo'].'</td>';
					echo '<td>'.$this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])).'</td>';
										
					echo '</tr>';
					$costo_total += $item['Item']['costo'];
				}
				?>
			</tbody>
			<tfoot>
				<tr>
					<td>Total</td>
					<td></td>
					<td></td>
					<?php echo '<td>'.$costo_total.'</td>';?>
				</tr>
			</tfoot>
		</table>
		<div class="row text-right">
			<button class="btn btn-warning">Cancelar</button>
			<button class="btn btn-success">Confirmar Pedido</button>
			<!--<?php echo $this->Html->link(__('Confirmar'), array('controller'=>'','action' => 'confirmar')); ?>-->
		</div>
	</div>
</div>


<?php
$this->Js->get('#ItemMarcaId')->event('change', 
		$this->Js->request(array(
					'controller'=>'modelos',
					'action'=>'getItemByMarca'
					), array(
						'update'=>'#ItemModeloId',
						'async' => true,
						'method' => 'post',
						'dataExpression'=>true,
						'data'=> $this->Js->serializeForm(array(
							'isForm' => true,
							'inline' => true
						))
					))
		);
$this->Js->get('#ItemModeloId')->event('change', 
		$this->Js->request(array(
					'controller'=>'cartuchos',
					'action'=>'getItemByModelo'
					), array(
						'update'=>'#ItemCartuchoId',
						'async' => true,
						'method' => 'post',
						'dataExpression'=>true,
						'data'=> $this->Js->serializeForm(array(
							'isForm' => true,
							'inline' => true
						))
					))
		);	
?>