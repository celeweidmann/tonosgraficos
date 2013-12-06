<!-- VIDEO DE FONDO -->
<video id="video_background" preload="auto" autoplay="autoplay" loop="loop">
	<source src="/img/videos/tintas8_nuevo.ogv" type="video/ogg" />
  	<source src="/img/videos/tonos_2.mp4" type="video/mp4" />
</video>
<div class="row">
	<div class="col-md-8 col-md-offset-4">
<!--		<div class="row bloque-texto">
			<h3>Compras, consultas y envíos</h3>
 			<table class="table table-bordered">
				<tr>
    				<td>ventas@tonosgraficos.com</td>
    				<td>Compras, consultas de stock, Consultas en general</td>
    			</tr>
    			<tr>
    				<td>logistica@tonosgraficos.com</td>
    				<td>Información de su envío, o valor aproximado del mismo a diferentes partes del país</td>
    			</tr>
    			<tr>
    				<td>consultatecnica@tonosgraficos.com</td>
    				<td>Consulta técnica especializada, Compatibilidad de Productos con equipos de impresión </td>
    			</tr>
			</table>

 			<h3>Gerencia y Administración</h3>
			<table class="table table-bordered">
				<tr>
    				<td>gerencia@tonosgraficos.com</td>
    				<td>Para comunicarse con la Gerencia de Tonos Gráficos</td>
    			</tr>
    			<tr>
    				<td>administracion@tonosgraficos.com</td>
    				<td>Consultas sobre Facturación, Envío de Pagos, Nuevo Cliente</td>
    			</tr>
			</table>
		</div>-->
		<div class="row bloque-texto">
			<div class="col-md-6">
			 <?php
                echo $this->Form->create('Contacto',array('url' => '/pages/contacto'));
            ?>
             <form class="form-vertical" role="form">
			<?php
                 echo '<div class="form-group">'.$this->Form->input( 'nombre', array('value'=>'', 'type'=>'text', 'class' => 'form-control',
                                            'placeholder' => 'Aqui su nombre',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                           )).'</div>';
               
                 echo '<div class="form-group">'.$this->Form->input( 'email', array('value'=>'', 'type'=>'email', 'class'=>'required form-control',
                                            'placeholder' => 'Aqui su dirección de correo',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')) )).'</div>';
            
                 echo '<div class="form-group">'.$this->Form->input('consulta', array(
                 							'class' => 'form-control',
                                            'options' => array('Compras','Envíos','Consulta Técnica','Gerencia','Administración'),
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                        )).'</div>';
            
                 echo '<div class="form-group">'.$this->Form->input( 'mensaje', array(
                 							'class' => 'form-control',
                                            'value'=>'', 'type'=>'textarea', 'rows'=>'6',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                            )).'</div>';
                ?>

				<button type="submit" class="btn btn-default">Enviar
					<?php echo $this->Form->end(); ?>
				</button>
			</form>
			</div>
			<div class="col-md-6">
				<h3>Compras, consultas y envíos</h3>
 				<address>
  					<strong>ventas@tonosgraficos.com</strong><br>
 					Compras, consultas de stock, consultas en general.
				</address>
				<address>
					<strong>logistica@tonosgraficos.com</strong><br>
					Información de su envío, valor aproximado del mismo a diferentes partes del país.
  				</address>
  				<address>
  					<strong>consultatecnica@tonosgraficos.com</strong><br>
  					Consulta técnica especializada, Compatibilidad de Productos con equipos de impresión.
  				</address>
  				
  				<h3>Gerencia y Administración</h3>
				<address>
					<strong>gerencia@tonosgraficos.com</strong><br>
					Para comunicarse con la Gerencia de Tonos Gráficos.
				</address>
				<address>
					<strong>administracion@tonosgraficos.com</strong><br>
					Consultas sobre Facturación, Envío de Pagos, Nuevo Cliente.
				</address>
			</div>
		</div>
	</div>
</div>