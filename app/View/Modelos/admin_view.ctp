<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Acciones'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Modelos'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Modelo'), array('action' => 'add')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Modelo'), array('action' => 'edit', $modelo['Modelo']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Modelo'), array('action' => 'delete', $modelo['Modelo']['id']), null, __('Are you sure you want to delete # %s?', $modelo['Modelo']['id'])); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="modelos view">
			<legend><h3><?php echo __('Modelo'); ?></h3></legend>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($modelo['Modelo']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($modelo['Modelo']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Marca Id'); ?></dt>
				<dd>
					<!--<?php echo h($modelo['Modelo']['marca_id']); ?>-->
					<?php echo h($modelo['Marca']['name']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>
</div>