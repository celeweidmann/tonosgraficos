<link href="/css/formulario.css" type="text/css" rel="stylesheet">
<div class="row">
	<div class="col-md-8 col-md-offset-4">
		<div class="row bloque-texto">
			<div class="users form col-md-6 col-md-offset-1">
				<?php echo $this->Session->flash('auth'); ?>
				<?php echo $this->Form->create('User'); ?>
	    		<fieldset>
	        		<!--<legend><?php echo __('Please enter your username and password'); ?></legend>-->
	        		<legend><?php echo __('Ingrese usuario y contraseña'); ?></legend>
	        		<?php echo $this->Form->input('username', array('class' => 'form-control	'));
	        			echo $this->Form->input('password',  array('class' => 'form-control'));
	    			?>
	    		</fieldset>
				<?php echo $this->Form->end(__('Login')); ?>
			</div>
		</div>
	</div>
</div>
<!-- VIDEO DE FONDO -->
<video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="0" poster="/img/fondo-blanco.png"/>
	<source src="/img/tintas9.ogv" type="video/ogg" />
  	<source src="/img/tonos_2.mp4" type="video/mp4" />
  	<object id="flashcontent" type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" width="100%" height="100%">
    	<param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
      	<param name="allowFullScreen" value="true" />
      	<param name="scale" value="exactFit" />
      	<param name="wmode" value="transparent" />
      	<param name="loop" value="true" />
      	<param name="play" value="true" />
      	<param name="flashvars" value='config={"clip":{"url":"http://tonos.workspace.com/img/tintas2.flv","autoPlay":true,"autoBuffering":true,"menu":false}}' />
   	</object>
</video/>