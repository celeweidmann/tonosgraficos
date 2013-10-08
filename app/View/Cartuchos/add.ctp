<div class="cartuchos form">
<?php echo $this->Form->create('Cartucho'); ?>
	<fieldset>
		<legend><?php echo __('Add Cartucho'); ?></legend>
	<?php
		echo $this->Form->input('name');
		//echo $this->Form->input('modelo_id');
		echo $this->Form->input('modelo_id', array('type'=>'select'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cartuchos'), array('action' => 'index')); ?></li>
	</ul>
</div>
