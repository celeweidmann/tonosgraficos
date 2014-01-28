<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<h3><?php echo __('Acciones'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Nuevo Transporte'), array('action' => 'add')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="transportes index">
			<h3><?php echo __('Transportes'); ?></h3>
			<table class="table table-striped" cellpadding="0" cellspacing="0">
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th><?php echo $this->Paginator->sort('address'); ?></th>
					<th><?php echo $this->Paginator->sort('telefono'); ?></th>
					<th><?php echo $this->Paginator->sort('email'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
				</tr>
				<?php foreach ($transportes as $transporte): ?>
				<tr>
					<td><?php echo h($transporte['Transporte']['id']); ?>&nbsp;</td>
					<td><?php echo h($transporte['Transporte']['name']); ?>&nbsp;</td>
					<td><?php echo h($transporte['Transporte']['address']); ?>&nbsp;</td>
					<td><?php echo h($transporte['Transporte']['telefono']); ?>&nbsp;</td>
					<td><?php echo h($transporte['Transporte']['email']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $transporte['Transporte']['id'])); ?>
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $transporte['Transporte']['id'])); ?>
						<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $transporte['Transporte']['id']), null, __('Are you sure you want to delete # %s?', $transporte['Transporte']['id'])); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			<p>
				<?php
					echo $this->Paginator->counter(array(
						'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>	
			</p>
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