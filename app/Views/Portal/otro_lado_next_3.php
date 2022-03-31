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
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'colonia4.jpg');?>" alt="">
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
										<a href="news_post.html"> 13 Colonias</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Por: Ana Rugerio</a></span>
								
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>Conocer los procesos de independencia de los países de América y 
									el inicio de las revoluciones burguesas es fundamental para 
									estudiar los temas de la Historia Universal  ...</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?=route_to ('otro_lado_6');?>">Leer más</a>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'moctezuma1.jpg');?>" alt="">
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
										<a href="news_post.html"> ¿QUIÉN MATÓ A MOCTEZUMA?</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Por: Ana Rugerio</a></span>
										
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>Moctezuma le hablaron con gran acatamiento y cesaron de tirar proyectiles, 
									lo que implica el respeto que se le tenía; el otro, cuando acto seguido se 
									le comunica a Moctezuma que había sido depuesto del cargo de tlatoani y se 
									nombra como señor de México a su hermano Cuitláhuac. ...</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?=route_to ('otro_lado_7');?>">Leer más</a>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'oceano.jpg');?>" alt="">
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
										<a href="news_post.html">Océano Ártico</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Por: Ana Rugerio</a></span>
										
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>El océano Ártico se encuentra en el norte del planeta, 
									no tiene masa continental ...</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?=route_to ('otro_lado_5');?>">Leer más</a>
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