<div class="cartuchos view">
<h2><?php echo __('Cartucho'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cartucho['Cartucho']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cartucho['Cartucho']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo Id'); ?></dt>
		<dd>
			<?php echo h($cartucho['Cartucho']['modelo_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cartucho'), array('action' => 'edit', $cartucho['Cartucho']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cartucho'), array('action' => 'delete', $cartucho['Cartucho']['id']), null, __('Are you sure you want to delete # %s?', $cartucho['Cartucho']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cartuchos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cartucho'), array('action' => 'add')); ?> </li>
	</ul>
</div>
