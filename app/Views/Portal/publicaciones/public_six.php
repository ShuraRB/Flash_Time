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
				<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Un <span> día </span> como <span>hoy</span> ...</h1>
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
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Pemex.jpg');?>">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>7</div>
										<div>Junio</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">Fundación de Petróleos Mexicanos PEMEX.</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">Subido por: Genaro</a></span>
										<!-- <span>|</span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p> presidente Lázaro Cárdenas del Río el 7 de junio de 1938 con la finalidad de explorar y 
									explotar los recursos energéticos como gas y petróleo en suelo mexicano. Pemex es la mayor empresa de México,
									 incluso con operaciones en el extranjero. Pemex tiene propiedades valoradas en más de 415 billones de dólares. 
									 Es la segunda empresa más grande de América Latina según sus ganancias anuales, solo superada por Petrobras. 
									 La mayoría de las acciones de Pemex no son públicas y se encuentran bajo control del gobierno mexicano. 
									 Pemex emplea más de 130.000 personas entre sus diferentes empresas filiales y actividades económicas.</p>
							</div>
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'refineria.jpg');?>">
							</div>
							<div class="news_post_quote">
								<p class="news_post_quote_text"> PEMEX es la empresa petrolera de los Estados Unidos Mexicanos.</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">Los impuestos sobre las actividades de Pemex representan al menos
							 un tercio de todos los impuestos recolectados por el fisco mexicano. La estatal paga sobre el 60% de sus ganancias en 
							 impuestos y regalías. México exporta petróleo crudo, pero en cambio, sigue necesitando las importaciones de combustibles
							  como la gasolina, que son más costosas. </p>

                                    <h3>Video Explicativo:</h3>
									<iframe width="640" height="360" src="https://www.youtube.com/embed/ed6U0dpX4bw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<!--<iframe width="640" height="360" src="https://www.youtube.com/embed/tsQMOR2y7fA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
							<!-- Fin de la publicación -->
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
									<div class="latest_post_title"><a href="<?= route_to('public_four');?>">Heroica defensa del puerto de Veracruz</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">Subido por Genaro</a></span>
										
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Queretaro.jpg');?>" alt="https://unsplash.com/@erothermel">
									</div>
									<div class="latest_post_title"><a href="<?= route_to('public_five');?>">Toma de Querétaro</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">Subido por Genaro</a></span>
										
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Pemex.jpg');?>" alt="https://unsplash.com/@element5digital">
									</div>
									<div class="latest_post_title"><a href="<?= route_to('public_six');?>">Fundación de Petróleos Mexicanos PEMEX</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">Subido por Genaro</a></span>
										
									</div>
								</div>
								
							</div>
								
						</div>

					</div>
				</div>
				<!-- final de la columna -->


			</div>
		</div>
	</div>

<?= $this->endSection();?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection();?> 