<div class="transportes form">
<?php echo $this->Form->create('Transporte'); ?>
	<fieldset>
		<legend><?php echo __('Edit Transporte'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Transporte.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Transporte.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Transportes'), array('action' => 'index')); ?></li>
	</ul>
</div>
