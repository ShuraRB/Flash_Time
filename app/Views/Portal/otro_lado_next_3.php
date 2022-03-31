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
			<div class="home_background prlx" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'otra_cara3.jpg');?>"></div>
		</div>
		<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
			<div class="hero_slide_content text-center">
				<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><span>La otra cara de la historia</span> ...</h1>
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
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'movimiento1.jpeg');?>" alt="">
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
										<a href="news_post.html"> Movimientos indígenas</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Por: Ana Rugerio</a></span>
								
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>A partir de los últimos años del siglo XX, algunos pueblos indígenas de 
									México comenzaron a fortalecer su presencia política en la socie-dad mexicana....</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?=route_to ('otro_lado_8');?>">Leer más</a>
							</div>
						</div>

						
						<!-- News Post 9 -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'nomadas.jpeg');?>" alt="">
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
										<a href="news_post.html"> De nómadas a sedentarios</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Por: Ana Rugerio</a></span>
										
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>a teoría más conocida sobre los primeros humanos que llegaron a América 
									señala que vinieron desde Asia, cuando gran parte del agua de los océanos 
									estaba congelada en enormes glaciares; sin embargo ...</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?=route_to ('otro_lado_9');?>">Leer más</a>
							</div>
						</div>

						<!-- News Post10 -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'mesoamerica.jpg');?>" alt="">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>30</div>
										<div>MAR</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">Las ciudades mesoamericanas</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Por: Ana Rugerio</a></span>
										
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>Los primeros grandes centros ceremoniales mesoa-mericanos fueron 
									construidos en el golfo de México, donde se desarrolló la culturaolmeca ...</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?=route_to ('otro_lado_10');?>">Leer más</a>
							</div>
						</div>
					</div>

					<!-- Page Nav -->

					<div class="news_page_nav">
						<ul>
							<li class="text-center trans_200"><a href="<?= route_to('otro_lado');?>">01</a></li>
							<li class="text-center trans_200"><a href="<?= route_to('otro_lado_next');?>">02</a></li>
							<li class="active text-center trans_200"><a href="<?= route_to('otro_lado_next_3');?>">03</a></li>
						</ul>
					</div>

				</div>

				<!-- Sidebar Column -->

				<div class="col-lg-4">
					<div class="sidebar">

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
			</div>
		</div>
	</div>

<?= $this->endSection();?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection();?> 