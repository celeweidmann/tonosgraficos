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
		echo $this -> Html -> script(array('jquery', 'dropdown', 'vendor/carousel.js','bootstrap.min'));

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
		<nav class="navbar navbar-default navbar-peque" role="navigation">
    	   	<ul class="nav navbar-nav nav-pills navbar-right menu-icono">
    	   		<li class="visible-sm visible-xs">
    	   			<a href="/inicio" class="menu-azul-peque"><i class="fa fa-home "></i></a>
    	   		</li>
    	   		<li class="visible-sm visible-xs">
    	   			<a href="/pages/producto" class="menu-azul-peque"><i class="fa fa-tint "></i></a> 
    	   		</li>
    	   		<li class="visible-sm visible-xs">
    	   			<a href="/pages/soporte_tecnico" class="menu-azul-peque"><i class="fa fa-gears"></i></a>
    	   		</li>
    	   		<li class="visible-sm visible-xs">
    	   			<a href="/pages/gracias" class="menu-azul-peque"><i class="fa fa-users"></i></a>
    	   		</li>
    	   		<li class="visible-sm visible-xs">
    	   			<a href="/contactos/index" class="menu-azul-peque"><i class="fa fa-envelope"></i></a>
    	   		</li>
    	   		<li><a class="menu-login menu-azul-peque" href="/users/login">[ ingresar ]</a> </li>
			<!--	<li><?php echo $this->Html->link('Ingles', array('#'));?></li>
				<li><?php echo $this->Html->link('Español', array('#'));?></li>-->     	   		
    	   	</ul>
		</nav>
		<div id="barra-superior-transparente">
			<div class="row">
			<div class="col-lg-6 col-md-5">
				<!--<div class="row" id="barra-superior">-->
				<div class="row">
					<div class="col-md-12 visible-md visible-lg" >			
						<a href="/"><img src="/img/tonos_graficos_recortado.png" class="img logo img-responsive" style="width: 580px; margin-bottom: -50px" ></a>
					</div>
					<div class="col-md-12 visible-sm visible-xs" >			
						<a href="/"><img src="../img/tonos_graficos_recortado.png" class="img logo img-responsive" style="width: 350px; margin-bottom: 0px" ></a>
					</div>
				</div>
			</div>
  			<div class="col-lg-6 col-md-7 menu-acciones visible-lg">
  				<div class="row">
  					<div class="col-md-2 text-center">
						<a href="/inicio" class="menu-azul"><i class="fa fa-home "></i><br>INICIO</a>  					
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
  						<a href="/contactos/index" class="menu-azul"><i class="fa fa-envelope"></i><br>CONTACTO</a>
  					</div>
  				</div>
  			</div>
  			<div class="col-md-6 menu-acciones-md visible-md">
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
  						<a href="/contactos/index" class="menu-azul"><i class="fa fa-envelope"></i><br>CONTACTO</a>
  					</div>
  				</div>
  			</div>
  			</div>
		</div>
		<div id="content" class="container caja-transparente" style="z-index:200px; max-width:none">
				
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

		</div>
	</div>
	<div id="footer" class="col-md-12">
		<div class="container">	
			<div class="text-center">
				Esperanza | Santa Fe | Argentina
			</div>
			<img src="/>
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