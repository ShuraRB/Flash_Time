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
			<div class="home_background prlx" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'personajes.jpg');?>)"></div>
		</div>
		<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
			<div class="hero_slide_content text-center">
				<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><span>Personajes historicos</span> </h1>
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
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'oliver1.jpg');?>">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>25</div>
										<div>mar</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">Oliver Law</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">Por: José Alejandro Huerta Cote</a></span>
										<!-- <span>|</span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p> Law había nacido en Texas el 9 de julio de 1900. Tras el crack de 1929 profundizó su militancia en el Partido Comunista de Estados Unidos y su activismo por la justicia social. Participó en protestas contra la invasión de Etiopía por el ejército de Mussolini.<br><br>

En 1936 se embarcó en Nueva York con rumbo a España, dispuesto a luchar contra el fascismo en suelo español como miembro del Batallón Lincoln, compuesto por unos 2.500 voluntarios norteamericanos.<br><br>

						</div>
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'oliver2.jpg');?>">
							</div>

							<p class="news_post_text" style="margin-top: 59px;">Tras su gesta en la Batalla del Jarama y su ascenso a comandante, se convirtió en el primer oficial afrodescendiente en dirigir a un grupo de soldados blancos norteamericanos.<br><br></p>

							<div class="news_post_quote">
								<p class="news_post_quote_text"><span>E</span>l 7 de julio de 1937 murió de un disparo en el conocido como Cerro del Mosquito, participando en la Batalla de Brunete.</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">El actor estadounidense Paul Robeson trató de llevar su vida al cine, pero la época de «caza de brujas» que se vivía en los Estados Unidos después de la Segunda Guerra Mundial le hizo abandonar el proyecto<br><br></p>

							<iframe width="560" height="315" src="https://www.youtube.com/embed/DJ9PlBhqKIk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
								<h3>Articulos Completos</h3>
							</div>
							<ul class="sidebar_list">
								<li class="sidebar_list_item"><a href="#">Natalicio Benito Juárez</a></li>
								<li class="sidebar_list_item"><a href="#">Inauguración de la Suprema Corte de Justicia</a></li>
								<li class="sidebar_list_item"><a href="#">Promulgación del plan de guadalupe</a></li>
								<li class="sidebar_list_item"><a href="#">Heroica defensa del puerto de Veracruz</a></li>
								<li class="sidebar_list_item"><a href="#">Toma de Querétaro</a></li>
								<li class="sidebar_list_item"><a href="#">Fundación de Petróleos Mexicanos PEMEX</a></li>
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


			</div>
		</div>
	</div>

<?= $this->endSection();?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection();?> 