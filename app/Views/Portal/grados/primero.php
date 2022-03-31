<?= $this->extend("Plantillas/Portal_base") ?>

<!-- CSS-->
<?= $this->section("css")?>
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'news_post_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'news_post_responsive.css');?>">
<?= $this->endSection();?>   

<!-- CONTENIDO-->
<?= $this->section("contenido")?>

	<!-- Imagen grande de arriba -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'5.jpg');?>)"></div>
		</div>
		<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
			<div class="hero_slide_content text-center">
				<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><span>Temario Primero de Secundaria</span> ...</h1>
			</div>
		</div>
	</div>

	<!-- El otro lado de la historia -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- Nueva columna de publicación -->

				<div class="col-lg-8">

					<div class="news_post_container">
						<!-- Nueva publicación -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'phil.jpg');?>">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">Revolución Industrial</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">subido por: Genaro</a></span>
										<!-- <span>|</span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p> La Revolución Industrial tuvo su origen en Inglaterra, donde se daban unas condiciones políticas, 
                socioeconómicas y geográficas adecuadas. Pero, ¿cuándo fue la Revolución Industrial? Tuvo su origen 
                aproximadamente hacia el año 1760 y concluyó en la década de 1840. La máquina de vapor fue la base sobre
                 la que se asentó todo el desarrollo que vino propiciado como consecuencia de la Revolución Industrial. 
                 Este invento fue posible gracias a algunos elementos, como la existencia de combustibles como el carbón o el hierro.
                Junto a estos elementos, otros factores hicieron posible que la Revolución Industrial surgiese,
                 se desarrollase en Inglaterra y diera pie a importantes cambios que generaron un gran impacto en la sociedad.</p>
							</div>
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'maquina.jpg');?>">
							</div>
							<div class="news_post_quote">
								<p class="news_post_quote_text">Máquina de arado textil, dejando de lado el trabajo de mano de obra.</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">Por una parte, la Revolución burguesa del siglo XVII
                             había triunfado, dándose con ello la abolición del sistema feudal. El sistema se basaba en una monarquía
                              que había desechado el absolutismo que se daba en otros países europeos.
                            Como consecuencia, Inglaterra vivió una época de estabilidad, sin sobresaltos
                             revolucionarios y con unas mayores libertades civiles. </p>

                             <iframe width="640" height="360" src="https://www.youtube.com/embed/AgMWGOTUSco" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<!-- Fin de la publicación -->
                            <br>
                            <br>
						</div>
					</div>
				</div>
                


               

				<!-- inicio de la columna -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Archives -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Temario</h3>
								<img class="icon_menu_mm" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'temario.png');?>" alt="un_dia">
							</div>
							<ul class="sidebar_list">
								<li class="sidebar_list_item"><a href="<?= route_to('primero');?>">Primero de secundaria</a></li>
								<li class="sidebar_list_item"><a href="<?= route_to('segundo');?>">Segundo de secundaria</a></li>
								<li class="sidebar_list_item"><a href="<?= route_to('tercero');?>">Tercero de secundaria</a></li>
								
							</ul>
						</div>

						<!-- Latest Posts -->

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Ultimas publicaciones</h3>
							</div>
							
							<div class="latest_posts">
								  
								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'defensa.jpg');?>" alt="https://unsplash.com/@dsmacinnes">
									</div>
									<div class="latest_post_title"><a href="news_post.html">Heroica defensa del puerto de Veracruz</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">Subido por Genaro</a></span>
										
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Queretaro.jpg');?>" alt="https://unsplash.com/@erothermel">
									</div>
									<div class="latest_post_title"><a href="news_post.html">Toma de Querétaro</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">Subido por Genaro</a></span>
										
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Pemex.jpg');?>" alt="https://unsplash.com/@element5digital">
									</div>
									<div class="latest_post_title"><a href="news_post.html">Fundación de Petróleos Mexicanos PEMEX</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">Subido por Genaro</a></span>
										
									</div>
								</div>
								
							</div>
								
						</div>

					</div>
				</div>
				<!-- final de la columna -->
                
                 <!-- Nueva columna de publicación -->

				<div class="col-lg-8">

<div class="news_post_container">
    <!-- Nueva publicación -->
    <div class="news_post">
        <div class="news_post_image">
            <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'poder.jpg');?>">
        </div>
        <div class="news_post_top d-flex flex-column flex-sm-row">
            
            <div class="news_post_title_container">
                <div class="news_post_title">
                    <a href="news_post.html">Movimientos Intelectuales</a>
                </div>
                <div class="news_post_meta">
                    <span class="news_post_author">subido por: Genaro</a></span>
                    <!-- <span>|</span> -->
                </div>
            </div>
        </div>
        <div class="news_post_text">
            <p> La Ilustración será un movimiento intelectual, racionalista y anticlerical que busca el desarrollo de la humanidad a través del uso de la RAZÓN, en contra de la influencia de la Iglesia.

Su nombre viene de illustrare que significa dar luz; ellos pretendían dar la LUZ de la RAZÓN.

Su antecedente directo es el Renacimiento de los siglos XV y XVI, movimiento en el cual el hombre comenzó a buscar explicaciones racioles acerca del mundo. Desde el Renacimiento hombres como Leonardo Da Vinci o Galileo Galilei postulan el uso de la observación y la experimentación para alcanzar explicaciones.

El movimiento ilustrado busca romper con la visión dogmática de la Iglesia, imperante desde la Edad Media, y en cambio llama al hombre a hacer el esfuerzo de utilizar la RAZÓN y con ella dudar, criticar y reflexionar sobre su mundo.

La RAZÓN consideran los ilustrados es la característica que distingue al hombre. La RAZÓN es la llave para abrir las puertas del destino, alcanzar avances y progreso.</p>
        </div>
        <div class="news_post_image">
            <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'pensador.jpg');?>">
        </div>
        <div class="news_post_quote">
            <p class="news_post_quote_text">El grupo de los ilustrados estuvo compuesto por burgueses que en sus OBRAS expresaban su oposición al Antiguo Régimen</p>
        </div>

        <p class="news_post_text" style="margin-top: 59px;">La obra más importante de la Ilustración será la Enciclopedia, pues su objetivo era concentrar y difundir todo el conocimiento alcanzado por el hombre hasta su época. ¿Por qué?  los ilustrados buscan extender el conocimiento y con ello lograr romper las limitaciones del Estado Absolutista.

La ilustración es un movimiento que llama a la revolución, promueven la exigencia de los derechos por parte de la población, promueven la lucha contra el absolutismo y proponen que en caso de que el monarca no respete a la sociedad se le destruya. </p>

<iframe width="640" height="360" src="https://www.youtube.com/embed/7BRXo9IyYxo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!-- Fin de la publicación -->
    </div>
</div>
</div>

			</div>
		</div>
	</div>

<?= $this->endSection();?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection();?> 