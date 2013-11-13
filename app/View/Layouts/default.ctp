<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>

<head>
	<?php echo $this -> Html -> charset(); ?>
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>	Tonos Gráficos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('layout');

		# Scripts
		echo $this -> Html -> script(array('jquery', 'dropdown', 'bootstrap.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.min.css" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!--[if lte IE 8]>
	<style>
		.row [class*="span"] { min-height: 20px; }
	</style>
	<![endif]-->
</head>
<body>
	<div class="col-md-12">
		<nav class="navbar navbar-default" role="navigation">
    	   	<ul class="nav navbar-nav navbar-right">
    	   		<li><a class="menu-login" href="/users/login">[ ingresar ]</a> </li>
			<!--	<li><?php echo $this->Html->link('Ingles', array('#'));?></li>
				<li><?php echo $this->Html->link('Español', array('#'));?></li>-->     	   		
    	   	</ul>
		</nav>
		<div id="barra-superior-transparente">
			<div class="row">
			<div class="col-md-6">
				<div class="row" id="barra-superior">
					<div class="col-md-6" >			
						<a href="/"><img src="../img/TonosGraficos_r.png" class="img logo" style="width: 580px; margin-bottom: -50px" ></a>
					</div>
				</div>
			</div>
  			<div class="col-md-6 menu-acciones">
  				<div class="row">
  					<div class="col-md-2 text-center">
						<a href="/pages/inicio" class="menu-azul"><i class="fa fa-home "></i><br>INICIO</a>  					
					</div>
  					<div class="col-md-2 text-center">
						<a href="/pages/producto" class="menu-azul"><i class="fa fa-tint "></i><br>PRODUCTOS</a>  					
					</div>
  					<div class="col-md-3 text-center">
  						<a href="/pages/soporte_tecnico" class="menu-azul"><i class="fa fa-gears"></i><br>SOPORTE TÉCNICO</a>
  					</div>
  					<div class="col-md-3 text-center">
  						<a href="/pages/gracias" class="menu-azul"><i class="fa fa-users"></i><br>AGRADECIMIENTOS</a>
  					</div>
  					<div class="col-md-2 text-center">
  						<a href="/pages/contacto" class="menu-azul"><i class="fa fa-envelope"></i><br>CONTACTO</a>
  					</div>
  				</div>
  			</div>
  			</div>
		</div>
<!--
		<video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="50"/>
  			<source src="/img/tintas4.ogv" type="video/ogg" />
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
-->
		<div id="content" class="container caja-transparente" style="z-index:200px; max-width:none">
				
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

		</div>
	</div>
	<div id="footer" class="col-md-12">
		<div class="container">	
			<div class="text-center">
				Esperanza - Santa Fe - Argentina
			</div>
		</div>
	</div>
		
	<?php echo $this->element('sql_dump'); ?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<!-- scripts_for_layout -->
	<?php echo $scripts_for_layout; ?>
	<!-- Js writeBuffer -->
	<?php
	if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')) echo $this->Js->writeBuffer();
	// Writes cached scripts
	?>
	
	<!-- jplayer-->
	<?php
		echo $this -> Html -> script('vendor/jplayer/jquery.jplayer.min');
	?>
	<script type="text/javascript" src="/js/vendor/html5shiv.js"></script>
	<script type="text/javascript" src="/js/vendor/respond.min.js"></script>

	<!-- -->
</body>
</html>