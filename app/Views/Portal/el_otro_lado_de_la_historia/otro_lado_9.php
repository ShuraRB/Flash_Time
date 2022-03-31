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
				<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><span>La otra cara de la historia</span> ...</h1>
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
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'nomadas2.jpeg');?>">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>31</div>
										<div>MAR</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">De nómadas a sedentarios</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">Por: Ana Rugerio</a></span>
										<!-- <span>|</span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>La teoría más conocida sobre los primeros humanos que llegaron a América 
									señala que vinieron desde Asia, cuando gran parte del agua de los océanos 
									estaba congelada en enormes glaciares; sin embargo, de-jaba al descubierto 
									algunos pasos de tierra, como el que se formó en el estrecho de Bering que 
									separa Asia de Norteamérica. Durante milenios, los habitantes de América se 
									agruparon en bandas de cazadores y reco-lectores que llevaban una vida nómada, 
									es decir, caminaban de un lugar a otro en busca de alimentos. Se refugiaban en 
									cuevas, comían frutos, semillas y cazaban megafauna americana: mamuts, caballos, 
									antílopes y bisontes, hoy extintos.
							</div>
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'nomadas3.jpg');?>">
							</div>
							<div class="news_post_quote">
								<p class="news_post_quote_text"><span>“E</span>n la actualidad, 82% de las familias mexicanas 
								incluye tortillas en su dieta diaria. Sin embargo, a diferencia de lo que ocurría en el México 
								prehispánico, hoy, nuestro país no produce la totalidad del maíz que consume su población; al año, 
								México importa de Estados Unidos cerca de 10 millones de toneladas de dicho grano.”.</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">Alrededor del año 5000 a.n.e., los pobladores que 
							se fueron asen-tando poco a poco comenzaron a cultivar plantas como chile, frijol, aguacate y calabaza, 
							ya que aprendieron a elegir las mejores semillas y las protegían de la maleza. De especial importancia 
							fue la domestica-ción del maíz, entre el 5000 y el 2500 a.n.e., porque signiﬁcó el paso de la vida nómada 
							a la sedentaria. Los antiguos mexicanos se volvieron agricultores y formaron aldeas más o menos ﬁjas. Con 
							el tiempo, estos asentamientos mostraron una mayor diferenciación social: había quie-nes practicaban la 
							agricultura, mientras otros cumplían funciones de defensa o religiosas. Al crecer, las aldeas dieron origen 
							a las ciudades.	 </p>

							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'nomadas4.jpg');?>">
							</div>

							
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