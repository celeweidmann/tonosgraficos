<div class="row">
	<div class="col-md-2">
		<div class="actions">
			<h3><?php echo __('Acciones'); ?></h3>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Nueva Noticia'), array('action' => 'add')); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="noticias index">
			<h3><?php echo __('Noticias'); ?></h3>
			<table class="table table-striped" cellpadding="0" cellspacing="0">
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('title'); ?></th>
					<th><?php echo $this->Paginator->sort('description'); ?></th>
					<th><?php echo $this->Paginator->sort('archivo'); ?></th>
					<th><?php echo $this->Paginator->sort('publicado'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
				</tr>
				<?php foreach ($noticias as $noticia): ?>
				<tr>
					<td><?php echo h($noticia['Noticia']['id']); ?>&nbsp;</td>
					<td><?php echo h($noticia['Noticia']['title']); ?>&nbsp;</td>
					<td><?php echo h($noticia['Noticia']['description']); ?>&nbsp;</td>
					<td><?php echo h($noticia['Noticia']['archivo']); ?>&nbsp;</td>
					<!--<td><?php echo h($noticia['Noticia']['publicado']); ?>&nbsp;</td>-->
					<td><?php echo $noticia['Noticia']['publicado'] ? 'si' : 'no';?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $noticia['Noticia']['id'])); ?>
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $noticia['Noticia']['id'])); ?>
						<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $noticia['Noticia']['id']), null, __('Are you sure you want to delete # %s?', $noticia['Noticia']['id'])); ?>
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