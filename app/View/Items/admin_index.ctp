<div class="items index">
	<h3 class="text-center"><?php echo __('Items'); ?></h3>
	<table class="table table-striped" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('costo'); ?></th>
			<th><?php echo $this->Paginator->sort('color'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('id_cartucho'); ?></th>
			<th><?php echo $this->Paginator->sort('id_modelo'); ?></th>
			<th><?php echo $this->Paginator->sort('id_marca'); ?></th>
			<th><?php echo $this->Paginator->sort('id_pedido'); ?></th>
			<th><?php echo $this->Paginator->sort('id_producto'); ?></th>-->
			<th><?php echo $this->Paginator->sort('cartucho'); ?></th>
			<th><?php echo $this->Paginator->sort('modelo'); ?></th>
			<th><?php echo $this->Paginator->sort('marca'); ?></th>
			<th><?php echo $this->Paginator->sort('id_pedido'); ?></th>
			<th><?php echo $this->Paginator->sort('id_producto'); ?>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($items as $item): ?>
	<tr>
		<td><?php echo h($item['Item']['id']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['costo']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['color']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['cantidad']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['created']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['modified']); ?>&nbsp;</td>
		<!--<td><?php echo h($item['Item']['id_cartucho']); ?>&nbsp;</td>-->
		<td><?php echo h($item['Cartucho']['name']); ?>&nbsp;</td>
		<!--<td><?php echo h($item['Item']['id_modelo']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['id_marca']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['id_pedido']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['id_producto']); ?>&nbsp;</td>-->
		<td><?php echo h($item['Modelo']['name']); ?>&nbsp;</td>
		<td><?php echo h($item['Marca']['name']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['id_pedido']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['id_producto']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $item['Item']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $item['Item']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?>
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
<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?></li>
	</ul>
</div>-->
