<div class="row">
	<div class="col-md-2 col-md-offset-1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Modelo'), array('action' => 'edit', $modelo['Modelo']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Modelo'), array('action' => 'delete', $modelo['Modelo']['id']), null, __('Are you sure you want to delete # %s?', $modelo['Modelo']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Modelos'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Modelo'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-8">
		<div class="modelos view">
			<h2><?php echo __('Modelo'); ?></h2>
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
					<?php echo h($modelo['Modelo']['marca_id']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>
</div>