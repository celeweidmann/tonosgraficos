<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Acciones'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Nuevo Producto'), array('action' => 'add')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="productos index">
			<legend><h3><?php echo __('Productos'); ?></h3></legend>
			<table class="table table-striped" cellpadding="0" cellspacing="0">
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('precio'); ?></th>
					<th><?php echo $this->Paginator->sort('cartucho_id'); ?></th>
					<th><?php echo $this->Paginator->sort('tinta_id'); ?></th>
					<th><?php echo $this->Paginator->sort('recipiente_id'); ?></th>
					<th><?php echo $this->Paginator->sort('created'); ?></th>
					<th><?php echo $this->Paginator->sort('modified'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
				</tr>
				<?php foreach ($productos as $producto): ?>
				<tr>
					<td><?php echo h($producto['Producto']['id']); ?>&nbsp;</td>
					<td><?php echo h($producto['Producto']['precio']); ?>&nbsp;</td>
					<td><?php echo h($producto['Producto']['cartucho_id']); ?>&nbsp;</td>
					<td><?php echo h($producto['Producto']['tinta_id']); ?>&nbsp;</td>
					<td><?php echo h($producto['Producto']['recipiente_id']); ?>&nbsp;</td>
					<td><?php echo h($producto['Producto']['created']); ?>&nbsp;</td>
					<td><?php echo h($producto['Producto']['modified']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $producto['Producto']['id'])); ?>
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $producto['Producto']['id'])); ?>
						<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $producto['Producto']['id']), null, __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			<p>
			<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?>	</p>
			<div class="paging">
			<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
			</div>
		</div>
	</div>
</div>