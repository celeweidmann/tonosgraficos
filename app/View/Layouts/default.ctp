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
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Tonos Gráficos
	</title>
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('cake.generic');
		
		# Scripts
		echo $this -> Html -> script(array('jquery', 'dropdown'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<!--<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>-->
		<nav class="navbar navbar-inverse" role="navigation">
	    	<ul class="nav navbar-nav ">
	    		<li class="dropdown">
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
		   				<li><?php echo $this->Html->link('producto', array('controller'=>'productos', 'action'=>'index'))?></li>
		   				<li><?php echo $this->Html->link('Transporte', array('controller'=>'transportes', 'action'=>'index'))?></li>
		   				<li><?php echo $this->Html->link('Estado', array('controller'=>'estados', 'action'=>'index'))?></li>
    				</ul>
				</li>
				<li>
					<?php echo $this->Html->link('Usuario', array('controller'=>'users', 'action'=>'index'));?>
				</li>
		   	</ul>
		</nav>	

		<div id="content">
<!--			<div class="col-md-2">
				
				
			</div>
			<div class="col-md-10">-->
				
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			<!--</div>-->
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
