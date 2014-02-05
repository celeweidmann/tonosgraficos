<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<!--<h3><?php echo __('Actions'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Recipientes'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Recipiente'), array('action' => 'add')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Recipiente'), array('action' => 'edit', $recipiente['Recipiente']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Recipiente'), array('action' => 'delete', $recipiente['Recipiente']['id']), null, __('Are you sure you want to delete # %s?', $recipiente['Recipiente']['id'])); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="recipientes view">
			<legend><h3><?php echo __('Recipiente'); ?></h3></legend>
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