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
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Benito.jpg');?>">
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
										<a href="news_post.html">Natalicio de Benito Juárez</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">Subido por: Genaro</a></span>
										<!-- <span>|</span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p> Benito Juárez García nació el 21 de marzo de 1806 en San Pablo Guelatao, Oaxaca. 
                                    Tuvo una niñez precaria y durante años estudió por sí mismo, hasta que llegó a la ciudad de Oaxaca, 
                                    donde ingresó al seminario; ahí concluyó estudios de Latín, Filosofía y Teología, fue un gobernante 
                                    que fundó Escuelas Normales, reconstruyo el Palacio de Gobierno y dejó excedentes en le hacienda estatal, 
                                    sus inicios en la política datan del año 1831, cuando se desempeñó como Regidor del Ayuntamiento de Oaxaca. 
                                    En 1833 fue elegido diputado y, en el año 1847, asumió como gobernador de Oaxaca.
 </p>
							</div>
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Mural.jpg');?>">
							</div>
							<div class="news_post_quote">
								<p class="news_post_quote_text"> Mural de Benito Juarez expuesto en la alameda de Oaxaca central.</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">En 1857 fue electo presidente de la Suprema Corte de Justicia, labor que desempeñó hasta diciembre de ese año, 
                            cuando se hizo cargo de la Presidencia mexicana. Es el primer y único presidente de origen indígena de México: su mandato duró 5 periodos: de 1857 a 1872; también conocido como
                             Benemérito de las Américas por su lucha contra la invasión francesa, Benito Juárez estableció las bases sobre las que se funda el Estado laico y la República federal en México; 
                             De igual forma en el tiempo que fungió como presidente de la Suprema Corte de Justicia de la Nación, defendió la Constitución de 1857. </p>

                                    <h3>Video Explicativo:</h3>
									<iframe width="640" height="360" src="https://www.youtube.com/embed/wlojix5mIeQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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