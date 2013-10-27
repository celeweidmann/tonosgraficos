<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
	<fieldset>
		<legend><?php echo __('Add Producto'); ?></legend>
	<?php
		echo $this->Form->input('precio');
		//echo $this->Form->input('cartucho_id');
		//echo $this->Form->input('cartucho_id', array('type'=>'select'));

/*
		echo $this->Form->input('marca_id');
        echo $this->Form->input('modelo_id');
        echo $this->Form->input('cartucho_id');
	*/
	
		echo $this->Form->input('marca_id', array('empty' => 'Elije una marca'));
        echo $this->Form->input('modelo_id', array('empty' => 'Elije un modelo'));
        echo $this->Form->input('cartucho_id', array('empty' => 'Elije un cartucho'));	
		
		//echo $this->Form->input('tinta_id');
		echo $this->Form->input('tinta_id', array('type'=>'select'));
		//echo $this->Form->input('recipiente_id');
		echo $this->Form->input('recipiente_id', array('type'=>'select'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?></li>
	</ul>
</div>

<?php
$this->Js->get('#ProductoMarcaId')->event('change', 
		$this->Js->request(array(
					'controller'=>'modelos',
					'action'=>'getByMarca'
					), array(
						'update'=>'#ProductoModeloId',
						'async' => true,
						'method' => 'post',
						'dataExpression'=>true,
						'data'=> $this->Js->serializeForm(array(
							'isForm' => true,
							'inline' => true
						))
					))
		);
		
$this->Js->get('#ProductoModeloId')->event('change', 
		$this->Js->request(array(
					'controller'=>'cartuchos',
					'action'=>'getByModelo'
					), array(
						'update'=>'#ProductoCartuchoId',
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