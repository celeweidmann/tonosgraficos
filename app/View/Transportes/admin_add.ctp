<link href="/css/formulario.css" type="text/css" rel="stylesheet">

<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Transportes'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="transportes form">
			<?php echo $this->Form->create('Transporte'); ?>
				<fieldset>
					<legend><h3><?php echo __('Add Transporte'); ?></h3></legend>
				<?php
					echo $this->Form->input('name');
					echo $this->Form->input('address');
					echo $this->Form->input('telefono');
					echo $this->Form->input('email');
				?>
				</fieldset>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>		
	</div>
</div>