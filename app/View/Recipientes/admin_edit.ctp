<div class="row">
	<div class="col-md-2 col-md-offset-1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Recipiente.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Recipiente.id'))); ?></li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Recipientes'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-8">
		<div class="recipientes form">
			<?php echo $this->Form->create('Recipiente'); ?>
			<fieldset>
				<legend><?php echo __('Edit Recipiente'); ?></legend>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('name');
				?>
			</fieldset>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>