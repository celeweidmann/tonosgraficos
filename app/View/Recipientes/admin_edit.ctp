<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Recipientes'), array('action' => 'index')); ?></li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Recipiente.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Recipiente.id'))); ?></li>				
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="recipientes form">
			<?php echo $this->Form->create('Recipiente'); ?>
			<fieldset>
				<legend><h3><?php echo __('Edit Recipiente'); ?></h3></legend>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('name');
				?>
			</fieldset>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>