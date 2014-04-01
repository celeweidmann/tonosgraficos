<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Cartuchos'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Cartucho'), array('action' => 'add')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Cartucho'), array('action' => 'edit', $cartucho['Cartucho']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Cartucho'), array('action' => 'delete', $cartucho['Cartucho']['id']), null, __('Are you sure you want to delete # %s?', $cartucho['Cartucho']['id'])); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="cartuchos view">
		<legend><h3><?php echo __('Cartucho'); ?></h3></legend>
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
					<!--<?php echo h($cartucho['Cartucho']['modelo_id']); ?>-->
					<?php echo h($cartucho['Modelo']['name']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>		
	</div>
</div>