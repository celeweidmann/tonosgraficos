<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-2 col-md-offset-1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-8">
		<div class="estados form">
			<?php echo $this->Form->create('Estado'); ?>
			<fieldset>
				<legend><?php echo __('Add Estado'); ?></legend>
				<?php echo $this->Form->input('name'); ?>
			</fieldset>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>