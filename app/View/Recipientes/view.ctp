<div class="row">
	<div class="col-md-2 col-md-offset-1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Recipiente'), array('action' => 'edit', $recipiente['Recipiente']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Recipiente'), array('action' => 'delete', $recipiente['Recipiente']['id']), null, __('Are you sure you want to delete # %s?', $recipiente['Recipiente']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Recipientes'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Recipiente'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-8">
		<div class="recipientes view">
			<h2><?php echo __('Recipiente'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($recipiente['Recipiente']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Cantidad'); ?></dt>
				<dd>
					<?php echo h($recipiente['Recipiente']['name']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>
</div>