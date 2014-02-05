<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Modelo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Modelo.id'))); ?></li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Modelos'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="modelos form">
			<?php echo $this->Form->create('Modelo'); ?>
			<fieldset>
				<legend><h3><?php echo __('Edit Modelo'); ?></h3></legend>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('name');
					echo $this->Form->input('marca_id', array('type'=>'select'));
				?>
			</fieldset>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>