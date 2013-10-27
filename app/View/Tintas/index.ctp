<div class="row">
	<div class="col-md-2 col-md-offset-1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Tinta'), array('action' => 'add')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-8">
		<div class="tintas index">
			<h2><?php echo __('Tintas'); ?></h2>
			<table class="table table-striped" cellpadding="0" cellspacing="0">
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($tintas as $tinta): ?>
					<tr>
						<td><?php echo h($tinta['Tinta']['id']); ?>&nbsp;</td>
						<td><?php echo h($tinta['Tinta']['name']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('action' => 'view', $tinta['Tinta']['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tinta['Tinta']['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tinta['Tinta']['id']), null, __('Are you sure you want to delete # %s?', $tinta['Tinta']['id'])); ?>
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