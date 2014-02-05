<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="estados form">
			<?php echo $this->Form->create('Estado'); ?>
			<fieldset>
				<legend><h3><?php echo __('Add Estado'); ?></h3></legend>
				<?php echo $this->Form->input('name'); ?>
			</fieldset>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>