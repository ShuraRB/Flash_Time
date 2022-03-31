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
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'hidalgo2.png');?>">
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
										<a href="news_post.html">Miguel Hidalgo</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">Por: José Alejandro Huerta Cote</a></span>
										<!-- <span>|</span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p> Miguel Hidalgo y Costilla fue un insurgente y sacerdote mexicano. Nació el 8 de mayo de 1753 en la hacienda de San Diego de Corralejo, Pénjamo, Guanajuato. Cursó estudios en el Colegio de San Nicolás, Valladolid (actual Morelia), del que llegó a ser rector.<br><br>

En 1778, fue ordenado sacerdote y en 1803 se hizo cargo de la parroquia de Dolores, Guanajuato. Se preocupó por mejorar las condiciones de sus feligreses, casi todos indígenas, enseñándoles a cultivar viñedos, la cría de abejas y a dirigir pequeñas industrias de loza y ladrillos.<br><br>

						</div>
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'valladolid.jpg');?>">
							</div>
							<div class="news_post_quote">
								<p class="news_post_quote_text"><span>E</span>n 1809 se unió a una sociedad secreta formada en Valladolid, cuyo fin era reunir un congreso para gobernar la Nueva España en nombre del rey Fernando VII, preso de Napoleón y, en su caso, obtener la independencia del país.</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">Descubiertos los conjurados, la insurrección se trasladó a Querétaro donde se reunió con Ignacio Allende. El 16 de septiembre de 1810, llevando como estandarte a la virgen de Guadalupe, lanzó el llamado grito de Dolores que inició la gesta independentista y, acompañado de Allende, consiguió reunir un ejército formado por más de cuarenta mil personas. Tomaron Guanajuato y Guadalajara, sin embargo, decidieron no ocupar la ciudad de México. <br><br>

El 11 de enero de 1811, Hidalgo fue derrotado cerca de Guadalajara por las fuerzas realistas. Escapó hacia el norte, pero fue capturado y condenado a muerte. Su cabeza, junto a la de Allende y a la de otros insurgentes, se exhibió como escarmiento en la alhóndiga de Granaditas de Guanajuato.<br><br>

Tras el establecimiento de la República Mexicana, en 1824, se le reconoció como primer insurgente y Padre de la Patria. En su honor, un estado de la República y la ciudad de Dolores, llevan su nombre. El 16 de septiembre, día en que proclamó su rebelión, se celebra el Día de la Independencia en México.<br><br></p>

<iframe width="560" height="315" src="https://www.youtube.com/embed/5tdfekednHs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>									
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