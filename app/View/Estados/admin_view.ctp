<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Estado'), array('action' => 'add')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Estado'), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Estado'), array('action' => 'delete', $estado['Estado']['id']), null, __('Are you sure you want to delete # %s?', $estado['Estado']['id'])); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="estados view">
			<legend><h3><?php echo __('Estado'); ?></h3></legend>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($estado['Estado']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Estado'); ?></dt>
				<dd>
					<?php echo h($estado['Estado']['name']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>
</div>