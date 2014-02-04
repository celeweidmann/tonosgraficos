<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cartucho.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Cartucho.id'))); ?></li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Cartuchos'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="cartuchos form">
			<?php echo $this->Form->create('Cartucho'); ?>
			<fieldset>
				<legend><h3><?php echo __('Edit Cartucho'); ?></h3></legend>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('name');
					echo $this->Form->input('modelo_id', array('type'=>'select'));
				?>
			</fieldset>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>