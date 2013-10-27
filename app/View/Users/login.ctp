<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="users form">
			<?php echo $this->Session->flash('auth'); ?>
			<?php echo $this->Form->create('User'); ?>
    		<fieldset>
        		<legend><?php echo __('Please enter your username and password'); ?></legend>
        		<?php echo $this->Form->input('username');
        			echo $this->Form->input('password');
    			?>
    		</fieldset>
			<?php echo $this->Form->end(__('Login')); ?>
		</div>
	</div>
</div>