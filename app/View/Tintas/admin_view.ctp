<div class="row">
	<div class="col-md-2 col-md-offset-1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Tinta'), array('action' => 'edit', $tinta['Tinta']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Tinta'), array('action' => 'delete', $tinta['Tinta']['id']), null, __('Are you sure you want to delete # %s?', $tinta['Tinta']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Tintas'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Tinta'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-8">
		<div class="tintas view">
			<h2><?php echo __('Tinta'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($tinta['Tinta']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($tinta['Tinta']['name']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>		
	</div>
</div>