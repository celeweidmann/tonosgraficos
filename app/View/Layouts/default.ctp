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
	<?php echo $this->Html->charset(); ?>
	<title>
		Tonos Gráficos
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('layout');
		
	//	echo $this->Html->css('cake.generic');
		
		# Scripts
		echo $this -> Html -> script(array('jquery', 'dropdown', 'bootstrap.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div id="container">
		<!--<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>-->
		<nav class="navbar navbar-default" role="navigation">
	    	<ul class="nav navbar-nav ">
<!--			<li class="dropdown">
    				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
      					Impresora <span class="caret"></span>
    				</a>
    				<ul class="dropdown-menu">
      					<li><?php echo $this->Html->link('Marca', array('controller'=>'marcas', 'action'=>'index'))?></li>
		   				<li><?php echo $this->Html->link('Modelo', array('controller'=>'modelos', 'action'=>'index'))?></li>
    				</ul>
				</li> 
				<li class="dropdown">
    				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
      					Cartucho <span class="caret"></span>
    				</a>
    				<ul class="dropdown-menu">
		   				<li><?php echo $this->Html->link('Cartucho', array('controller'=>'cartuchos', 'action'=>'index'))?></li>
      					<li><?php echo $this->Html->link('Tinta', array('controller'=>'tintas', 'action'=>'index'))?></li>
		   				<li><?php echo $this->Html->link('Recipiente', array('controller'=>'recipientes', 'action'=>'index'))?></li>
    				</ul>
				</li>
				<li class="dropdown">
    				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
      					Pedido <span class="caret"></span>
    				</a>
    				<ul class="dropdown-menu">
      					<li><?php echo $this->Html->link('Pedido', array('controller'=>'pedidos', 'action'=>'index'))?></li>
		   				<li><?php echo $this->Html->link('Item', array('controller'=>'items', 'action'=>'index'))?></li>
		   				<li><?php echo $this->Html->link('Producto', array('controller'=>'productos', 'action'=>'index'))?></li>
		   				<li><?php echo $this->Html->link('Transporte', array('controller'=>'transportes', 'action'=>'index'))?></li>
		   				<li><?php echo $this->Html->link('Estado', array('controller'=>'estados', 'action'=>'index'))?></li>
    				</ul>
				</li>

				<li>
					<?php echo $this->Html->link('Usuario', array('controller'=>'users', 'action'=>'index'));?>
				</li>
-->
	  			
    	   	</ul>
    	   	<ul class="nav navbar-nav navbar-right">
    	   		<li><a href="/users/login"><i class="fa fa-user"></i> Login</a> </li>
				<li><?php echo $this->Html->link('Ingles', array('#'));?></li>
				<li><?php echo $this->Html->link('Español', array('#'));?></li>     	   		
    	   	</ul>
		</nav>
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						
					<img src="../img/tonosGraficos.png" class="img-responsive">
					</div>
				</div>
			</div>
  			<div class="col-md-4">
  				<div class="row">
  					<br>
  					<div class="col-md-4">
						<a href="/productos/index"><img src="../img/producto.png" class="img-responsive"></a>  					
					</div>
  					<div class="col-md-4">
						<a href="#"><img src="../img/soporte.png" class="img-responsive"></a>
  					</div>
  					<div class="col-md-4">
						<a href="#"><img src="../img/contacto.png" class="img-responsive"></a>
  					</div>
  				</div>
  			</div>
		</div>

		<div id="content" class="container">
<!--			<div class="col-md-2">
				
				
			</div>
			<div class="col-md-10">-->
				
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			<!--</div>-->
		</div>
		<div class="footer" id="footer">
			<div class="text-center">
				Esperanza - Santa Fe - Argentina
			</div>
			<!--
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>-->
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
	
</body>
</html>
