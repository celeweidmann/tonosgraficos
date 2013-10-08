<div class="transportes view">
<h2><?php echo __('Transporte'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($transporte['Transporte']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($transporte['Transporte']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($transporte['Transporte']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($transporte['Transporte']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($transporte['Transporte']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transporte'), array('action' => 'edit', $transporte['Transporte']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transporte'), array('action' => 'delete', $transporte['Transporte']['id']), null, __('Are you sure you want to delete # %s?', $transporte['Transporte']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transportes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transporte'), array('action' => 'add')); ?> </li>
	</ul>
</div>
