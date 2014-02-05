<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="users form">
			<?php echo $this->Form->create('User'); ?>
				<fieldset>
					<legend><h3><?php echo __('Add User'); ?></h3></legend>
					<?php
						echo $this->Form->input('username');
						echo $this->Form->input('password');
						//echo $this->Form->input('role');
						echo $this->Form->input('role', array(
			        	    'options' => array('admin' => 'admin', 'client' => 'client')
			        	));
						echo $this->Form->input('name');
						echo $this->Form->input('surname');
						echo $this->Form->input('email');
						echo $this->Form->input('telefono');
					?>
				</fieldset>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>