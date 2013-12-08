<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-2 col-lg-2">
		<div class="actions">
			<h3><?php //echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Noticias'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-10 col-lg-10">
		<div class="marcas form">
			<?php echo $this->Form->create('Noticia', array('enctype' => 'multipart/form-data')); ?>
			<fieldset>
				<legend><?php echo __('Add Noticia'); ?></legend>
				<?php
					echo $this->Form->input('title');
					echo $this->Form->input('description');
					echo $this->Form->input('link');
					echo $this->Form->input('archivo', array('type'=>'file'));
					echo $this->Form->input('publicado');
				?>
			</fieldset>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>
