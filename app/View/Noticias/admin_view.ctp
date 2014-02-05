<div class="row">
	<div class="col-md-2 col-lg-2">
		<div class="actions">
			<!--<h3><?php //echo __('Actions'); ?></h3>-->
			<br><br>
			<ul class="list-unstyled">
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('List Noticias'), array('action' => 'index')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('New Noticia'), array('action' => 'add')); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Html->link(__('Edit Noticia'), array('action' => 'edit', $noticia['Noticia']['id'])); ?> </li>
				<li class="btn btn-default btn-block"><?php echo $this->Form->postLink(__('Delete Noticia'), array('action' => 'delete', $noticia['Noticia']['id']), null, __('Are you sure you want to delete # %s?', $noticia['Noticia']['id'])); ?> </li>
			</ul>
		</div>
	</div>
	<div class="col-md-10 col-lg-10">
		<div class="noticias view">
			<legend><h3><?php echo __('Noticia'); ?></h3></legend>
			<dl>
				<dt class="vertical"><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($noticia['Noticia']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Title'); ?></dt>
				<dd>
					<?php echo h($noticia['Noticia']['title']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Description'); ?></dt>
				<dd>
					<?php echo h($noticia['Noticia']['description']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Imagen'); ?></dt>
				<dd>
					<?php echo h($noticia['Noticia']['archivo']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>
</div>

