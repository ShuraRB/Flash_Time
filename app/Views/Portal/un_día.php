<?= $this->extend("Plantillas/Portal_base") ?>

<!-- CSS-->
<?= $this->section("css")?>
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'news_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'news_responsive.css');?>">
<?= $this->endSection();?>   

<!-- CONTENIDO-->
<?= $this->section("contenido")?>

	<!-- Home -->
	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'news_background.jpg');?>"></div>
		</div>
		<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
			<div class="hero_slide_content text-center">
				<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Un día como <span>hoy</span> ...</h1>
			</div>
		</div>
	</div>

	<!-- News -->
	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Column -->

				<div class="col-lg-8">

					<div class="news_posts">
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Benito.jpg');?>" alt="https://unsplash.com/@dsmacinnes">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>21</div>
										<div>Marzo</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="<?= route_to('public_one');?>">Natalicio de Benito Juárez.</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Subido por Genaro</a></span>
										
										
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>Un dia como hoy se conmemora el nacimiento de Benito Juárez, nació un día 21 de marzo de 1806 en San Pablo Guelatao, Oaxaca, y sus humildes orígenes no fueron un impedimento para que se formara como abogado y se convirtiera en presidente del gobierno del país.</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?= route_to('public_one');?>">Leer más</a>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Corte.jpg');?>" alt="https://unsplash.com/@dsmacinnes">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>25</div>
										<div>Marzo</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="<?= route_to('public_two');?>">Inauguración de la Suprema Corte de Justicia.</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Subido por Genaro</a></span>
										
										
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>Un dia como hoy se conmemora la ignauguración de la Suprema Corte de Justicia de la Nación (SCJN) institucion de las más antiguas e importantes del estado mexicano, que ha sido una pieza clave de los distintos regímenes en el país, funcionando a veces como un contrapeso efectivo a los demás poderes.</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?= route_to('public_two');?>">Leer más</a>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Plan.jpg');?>" alt="https://unsplash.com/@dsmacinnes">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>26</div>
										<div>Marzo</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="<?= route_to('public_three');?>">Promulgación del Plan de Guadalupe.</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Subido por Genaro</a></span>
										

									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>Un dia como hoy se conmemora la promulgación del plan de guadalupe conformó por siete artículos o puntos. En ellos se menciona el desconocimiento de Huerta como primer mandatario; el desconocimiento del Poder Legislativo y Judicial, así como de los gobiernos de los estados alineados con la administración huertista.</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?= route_to('public_three');?>">Leer más</a>
							</div>
						</div>
					</div>

					<!-- Page Nav -->

					<div class="news_page_nav">
						<ul>
							<li class="active text-center trans_200"><a href="<?= route_to('un_día');?>">01</a></li>
							<li class="text-center trans_200"><a href="<?= route_to('un_día_next');?>">02</a></li>
							
						</ul>
					</div>

				</div>

				<!-- Sidebar Column -->

				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Archives -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Articulos Completos</h3>
							</div>
							<ul class="sidebar_list">
								<li class="sidebar_list_item"><a href="<?= route_to('public_one');?>">Natalicio Benito Juárez</a></li>
								<li class="sidebar_list_item"><a href="<?= route_to('public_two');?>">Inauguración de la Suprema Corte de Justicia</a></li>
								<li class="sidebar_list_item"><a href="<?= route_to('public_three');?>">Promulgación del plan de guadalupe</a></li>
								<li class="sidebar_list_item"><a href="<?= route_to('public_four');?>">Heroica defensa del puerto de Veracruz</a></li>
								<li class="sidebar_list_item"><a href="<?= route_to('public_five');?>">Toma de Querétaro</a></li>
								<li class="sidebar_list_item"><a href="<?= route_to('public_six');?>">Fundación de Petróleos Mexicanos PEMEX</a></li>
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

						<!-- Tags -->

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Tags</h3>
							</div>
							<div class="tags d-flex flex-row flex-wrap">
								<div class="tag"><a href="#">Course</a></div>
								<div class="tag"><a href="#">Design</a></div>
								<div class="tag"><a href="#">FAQ</a></div>
								<div class="tag"><a href="#">Teachers</a></div>
								<div class="tag"><a href="#">School</a></div>
								<div class="tag"><a href="#">Graduate</a></div>
							</div>
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