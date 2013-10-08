<div class="modelos form">
<?php echo $this->Form->create('Modelo'); ?>
	<fieldset>
		<legend><?php echo __('Add Modelo'); ?></legend>
	<?php
		echo $this->Form->input('name');
		//echo $this->Form->input('marca_id');
		echo $this->Form->input('marca_id', array('type'=>'select'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Modelos'), array('action' => 'index')); ?></li>
	</ul>
</div>
