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
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'news_1.jpg');?>" alt="">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>26</div>
										<div>MAR</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">La peste negra</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Por: Ana Rugerio</a></span>
								
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>En 1346 en la zona del Cauca salió la peste negra, esta salió por la peste bubónica, 
									ya que hacia que las extremidades del cuerpo se gangrenarán...
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?=route_to ('otro_lado_1');?>">Leer mas</a>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'news_2.jpg');?>" alt="">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>27</div>
										<div>MAR</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">Guerra de los pasteles</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Por: Ana Rugerio</a></span>

									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>El 16 de abril de 1838, la población francesa que vivían en México estaban 
									molestos por los tratos injustos...</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?=route_to ('otro_lado_2');?>">Leer más</a>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'news_3.jpg');?>" alt="">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>28</div>
										<div>MAR</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">La plaga de Justiniano</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Por: Ana Rugerio</a></span>
										j
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>Esta plaga nace entre el año 541 a 546 D.C y en ese entonces el emperador 
									Bizantino Justiniano se enfermo de esta plaga...</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?=route_to ('otro_lado_3');?>">Leer más</a>
							</div>
						</div>
						</div>

						<!-- News Post -->
							<div class="news_post">
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'juegos_olimpicos2.jpg');?>" alt="">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>29</div>
										<div>MAR</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">Juegos Olímpicos</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Por: Ana Rugerio</a></span>
										
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>Los juegos olímpicos en 1968, era la primera vez que se 
									transmitían en satélite, México...</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?=route_to ('otro_lado_4');?>">Leer más</a>
							</div>
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
					</div>




					<!-- Page Nav -->

					<!-- <div class="news_page_nav">
						<ul>
							<li class="active text-center trans_200"><a href="#">01</a></li>
							<li class="text-center trans_200"><a href="#">02</a></li>
							<li class="text-center trans_200"><a href="#">03</a></li>
						</ul>
					</div> -->

				</div>
			</div>
		</div>
	</div>

<?= $this->endSection();?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection();?> 