<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="col-md-2">
	<div class="actions">
	<!--<h3><?php echo __('Actions'); ?></h3>-->
	<br><br>
	<ul>
		<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
		<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Item.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Item.id'))); ?></li>
	</ul>
	</div>
</div>
<div class="col-md-10">
	<div class="items form">
		<?php echo $this->Form->create('Item'); ?>
		<fieldset>
			<legend><h3><?php echo __('Edit Item'); ?></h3></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('costo');
				echo $this->Form->input('tinta', array('type'=>'select'));
				echo $this->Form->input('recipiente', array('type'=>'select'));
				echo $this->Form->input('cartucho', array('type'=>'select'));
				echo $this->Form->input('modelo', array('type'=>'select'));
				echo $this->Form->input('marca', array('type'=>'select'));
				echo $this->Form->input('pedido_id');
				echo $this->Form->input('producto_id');
			?>
		</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		<button class="btn btn-warning">Cancelar</button>
	</div>
</div>

