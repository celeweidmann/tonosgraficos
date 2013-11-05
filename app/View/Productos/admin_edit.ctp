<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-2 col-md-offset-1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Producto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Producto.id'))); ?></li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div>
		<div class="productos form">
			<?php echo $this->Form->create('Producto'); ?>
			<fieldset>
				<legend><?php echo __('Edit Producto'); ?></legend>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('precio');
					echo $this->Form->input('cartucho_id');
					echo $this->Form->input('tinta_id');
					echo $this->Form->input('recipiente_id');
				?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>