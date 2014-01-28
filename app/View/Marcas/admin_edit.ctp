<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<h3><?php echo __('Acciones'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Borrar Marca'), array('action' => 'delete', $this->Form->value('Marca.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Marca.id'))); ?></li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Listar Marcas'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="marcas form">
			<?php echo $this->Form->create('Marca'); ?>
			<fieldset>
				<legend><h3><?php echo __('Editar Marca'); ?></h3></legend>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('name');
				?>
			</fieldset>
			<?php echo $this->Form->end(__('Guardar')); ?>
		</div>
	</div>
</div>
