<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Acciones'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Listar Marcas'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Nueva Marca'), array('action' => 'add')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Editar Marca'), array('action' => 'edit', $marca['Marca']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Borrar Marca'), array('action' => 'delete', $marca['Marca']['id']), null, __('Are you sure you want to delete # %s?', $marca['Marca']['id'])); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="marcas view">
			<legend><h3><?php echo __('Marca'); ?></h3></legend>
			<dl >
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

