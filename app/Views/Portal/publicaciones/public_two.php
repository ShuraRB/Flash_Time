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
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'suprema.jpg');?>">
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
										<a href="news_post.html">Inauguración de la Suprema Corte de Justicia.</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">Subido por: Genaro</a></span>
										<!-- <span>|</span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p> En 1887, bajo la presidencia del Máximo Tribunal del insigne jurista Ignacio L. Vallarta, se reiteró la necesidad de apoyar la labor jurisdiccional mediante una biblioteca, 
									con lo que, a partir de entonces se inició el desarrollo de la colección bibliohemerográfica.
									Con la inauguración del edificio sede de la Suprema Corte de Justicia de la Nación en 1941, 
									se mantuvo la idea de la importancia de contar con un espacio apropiado para instalar una biblioteca
									que garantizara el resguardo y desarrollo de sus colecciones, acervo que años más tarde se distinguió
									con el nombre de la señora Ministra María Cristina Salmorán de Tamayo que, si bien en un inicio estaba dedicada
									a prestar sus servicios exclusivamente a los señores Ministros y al personal de sus ponencias, paulatinamente
									abrió sus puertas al público en general.</p>
							</div>
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Corte.jpg');?>">
							</div>
							<div class="news_post_quote">
								<p class="news_post_quote_text"> Mural de Benito Juarez expuesto en la alameda de Oaxaca central.</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">Con la reforma constitucional de 1994, que reconfiguró al Máximo Tribunal del país,
							 a partir de 1995, la Biblioteca Central quedó incorporada al Centro de Documentación y Análisis de la Suprema Corte de Justicia de la Nación, 
							 según lo dispuesto en el artículo 11, fracción XIX, de la Ley Orgánica del Poder Judicial de la Federación.
							 Los servicios de la Biblioteca Central en conjunción con la demanda de información bibliohemerográfica por los usuarios, dieron paso a la integración de un sistema nacional 
							 de bibliotecas especializadas en Derecho y asignaturas afines </p>

                                    <h3>Video Explicativo:</h3>
									<iframe width="640" height="360" src="https://www.youtube.com/embed/tsQMOR2y7fA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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