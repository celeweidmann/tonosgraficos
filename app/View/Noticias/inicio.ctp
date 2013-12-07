<!-- VIDEO DE FONDO -->
<video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="0" poster="/img/fondo-blanco.png">
	<source src="/img/videos/tintas6_3_nuevo.ogv" type="video/ogg" />
  	<source src="/img/videos/tonos_2.mp4" type="video/mp4" />
</video>
<div class="row">
	<div class="col-md-8 col-md-offset-4">
		<div class="row carousel-contenedor">
			<div id="carousel-tg" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
			  	<ol class="carousel-indicators">
			    	
			  		<?php 
			  			$i = 0;
			  			foreach($noticias as $noticia) {
			  				if($i==0){
			  					echo '<li data-target="#carousel-tg" data-slide-to="0" class="active"></li>';
								$i++;
			  				} else {
			  					echo '<li data-target="#carousel-tg" data-slide-to="'.$i.'"></li>';
			  				}
						}
			  		?>
			  	</ol>

  				<!-- Wrapper for slides -->
  				<div class="carousel-inner">
			    	<!--
			    	<div class="item active">
			    		<div class="row">
			    			<div class="col-md-6 col-sm-6">
					      		<img src="/img/noticias/plisowyj1.jpg" class="carousel-noticia img-thumbnail img-responsive pull-right" alt="...">
				    		</div>
				    		<div class="col-md-6 col-sm-6 carousel-texto">
				    			<h2>CAROUSEL Noticias</h2>
				    			<p>Este es el texto de la noticia</p>
				    			 <i class="fa fa-link"></i>
				    		</div>
			    		</div>
			    	</div>
			    	-->
			    	<?php 
			  			$i = 0;
			  			foreach($noticias as $noticia) {
			  				if($i==0){
			  					echo '<div class="item active">';
								$i++;
			  				} else {
			  					echo '<div class="item">';
			  				}
							echo '<div class="row">';
							echo '<div class="col-md-6 col-sm-6">';
							echo '<img src="/img/noticias/'.$noticia['Noticia']['archivo'].'" class="carousel-noticia img-thumbnail img-responsive pull-right" alt="..."/>';
							echo '</div>';
							echo '<div class="col-md-6 col-sm-6 carousel-texto">';
							echo '<h2>'.$noticia['Noticia']['title'].'</h2>';
							//echo '<p>'.$noticia['Noticia']['description'].'</p>';
							echo '<a href="'.$noticia['Noticia']['link'].'" target="_blank"><i class="fa fa-link"></i></a>';
							echo '</div></div></div>';
							
						}
			  		?>
			    	
  				</div>

  				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-tg" data-slide="prev">
					<i class="fa-carousel fa fa-chevron-left"></i>
				</a>
				<a class="right carousel-control" href="#carousel-tg" data-slide="next">
					<i class="fa-carousel fa fa-chevron-right"></i>
				</a>
			</div>
		</div>
		<div class="row bloque-texto">
			<h3>Incubadora de Proyectos</h3>
			<p>
				Tonos Gráficos es una compañia de tintas inkjet para impresoras de hogar y oficina de Argentina. 
				Localizada en la ciudad de Esperanza y con oficinas comerciales en la ciudad de Santa Fe.
				Nace a partir de la idea de brindar soluciones tecnológicas a productos con alto valor agregado. 
				Sus objetivos son diseñar, desarrollar y fabricar productos de calidad que satisfagan los 
				requerimientos de nuestros clientes.

				Para lograrlos, se dispone de equipamientos para medición de propiedades fisicoquímicas de las 
				tintas, infraestructura de laboratorio químico, recursos humanos formados en la Facultad de 
				Ingeniería Química de la Universidad Nacional del Litoral de Santa Fe y apoyo científico-tecnológico 
				de institutos de investigación.
			</p>

			<h3 class="titulo">Proyectos medioambientales</h3>
			<p>
				En Tonos Gráficos consideramos que el cuidado del medio ambiente es una responsabilidad de las 
				empresas, por ello nuestros residuos son procesados según lo dispuesto por la ley N° 24.051.
			</p>

			<h3 class="titulo">Calidad	</h3>
			<p>
				Las normas de calidad son tan importantes como el compromiso que se tenga con ellas, por ello 
				el deber con nuestros clientes y proveedores va mas allá de los papeles y las certificaciones, 
				consideramos a la calidad como un conjunto de acciones y buenas prácticas con indicadores reales 
				que favorecen la relaciones comerciales a largo plazo. Dentro de las acciones y buenas prácticas 
				comerciales consideramos a la información técnica como una herramienta fundamental.
			</p>
		</div>
	</div>
</div>