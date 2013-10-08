<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
	<fieldset>
		<legend><?php echo __('Add Producto'); ?></legend>
	<?php
		echo $this->Form->input('precio');
		//echo $this->Form->input('cartucho_id');
		echo $this->Form->input('cartucho_id', array('type'=>'select'));
		//echo $this->Form->input('tinta_id');
		echo $this->Form->input('tinta_id', array('type'=>'select'));
		//echo $this->Form->input('recipiente_id');
		echo $this->Form->input('recipiente_id', array('type'=>'select'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?></li>
	</ul>
</div>
