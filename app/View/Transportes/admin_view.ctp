
<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Transportes'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Transporte'), array('action' => 'add')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Transporte'), array('action' => 'edit', $transporte['Transporte']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Transporte'), array('action' => 'delete', $transporte['Transporte']['id']), null, __('Are you sure you want to delete # %s?', $transporte['Transporte']['id'])); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="transportes view">
		<legend><h3><?php echo __('Transporte'); ?></h3></legend>
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
	</div>
</div>