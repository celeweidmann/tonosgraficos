<div class="row">
	<div class="col-md-2 col-md-offset-1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Marca'), array('action' => 'edit', $marca['Marca']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Marca'), array('action' => 'delete', $marca['Marca']['id']), null, __('Are you sure you want to delete # %s?', $marca['Marca']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Marcas'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Marca'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-8">
		<div class="marcas view">
			<h2><?php echo __('Marca'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($marca['Marca']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($marca['Marca']['name']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>
</div>

