<?= $this->extend("Plantillas/Portal_base") ?>

<!-- CSS-->
<?= $this->section("css")?>
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'main_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'responsive.css');?>">
<?= $this->endSection();?>   

<!-- CONTENIDO-->
<?= $this->section("contenido")?>

	<!-- Home -->
	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'contact_background.jpg');?>)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Juega y <span>aprende</span> hoy!</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'personajes.jpg');?>)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Conoce a las personas que <span>cambiaron al mundo</span></h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'historia_background.jpg');?>)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Lee y escucha los <span>eventos mas relevantes</span> !</h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
		</div>

	</div>

	<div class="container">
			<br>
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Te invitamos a aprender historia.</h1>
					</div>
				</div>
			</div>
							<p class="about_text">Si te has preguntado qué se aprende en la asignatura de historia,
								así como su importancia, te invitamos leer los articulos de nuestra página.
								La historia puede ser mucho más fácil de aprender y estudiar si somos conscientes
								de la relevancia de esta asignatura en nuestras vidas.
							
								En nuestra página encontraras articulos, videos, juegos, que llamaran tu atención 
								y te ayudaran a aprender historia. Te haran olvidar los tiempo en lo que pensabas
								que aprender historia era aburrido.
							</p>

		</div>
	</div>

	<!-- Publicaciones recientes -->
	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Un día como hoy</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">21</div>
									<div class="event_month">Marzo</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Natalicio de Benito Juárez.</a></div>
									<div class="event_location">Por: Genaro Ariel</div>
									<p>Un dia como hoy se conmemora el nacimiento de Benito Juárez, nació un día 21 de marzo de 1806 en San Pablo Guelatao, Oaxaca, y sus humildes orígenes no fueron un impedimento para que se formara como abogado y se convirtiera en presidente del gobierno del país.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'benito.jpg');?>" alt="">
								</div>
							</div>

						</div>	
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">25</div>
									<div class="event_month">Marzo</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Inauguración de la Suprema Corte de Justicia.</a></div>
									<div class="event_location">Por: Genaro Ariel</div>
									<p>Un dia como hoy se conmemora la ignauguración de la Suprema Corte de Justicia de la Nación (SCJN) institucion de las más antiguas e importantes del estado mexicano, que ha sido una pieza clave de los distintos regímenes en el país, funcionando a veces como un contrapeso efectivo a los demás poderes.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'corte.jpg');?>" alt="">
								</div>
							</div>

						</div>	
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">26</div>
									<div class="event_month">Marzo</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Promulgación del Plan de Guadalupe.</a></div>
									<div class="event_location">Por: Genaro Ariel</div>
									<p>Un dia como hoy se conmemora la promulgación del plan de guadalupe conformó por siete artículos o puntos. En ellos se menciona el desconocimiento de Huerta como primer mandatario; el desconocimiento del Poder Legislativo y Judicial, así como de los gobiernos de los estados alineados con la administración huertista.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'plan.jpg');?>" alt="">
								</div>
							</div>

						</div>	
					</div>
				</div>

			</div>
				
		</div>
	</div>





		<!-- Teachers -->
		<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Personajes historicos</h1>
					</div>
				</div>
			</div>
		<div class="teachers page_section">
		<div class="container">
			<div class="row">
				
				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="<?= route_to('post');?>">+</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'hidalgo.jpg');?>" alt="">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="<?= route_to('post');?>">Miguel Hidalgo</a></div>
							<div class="card-text">1753-1811</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'morelos.jpg');?>" alt="https://unsplash.com/@jcpeacock">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">José María Morelos</a></div>
							<div class="card-text">1765-1815</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'olivier.jpg');?>" alt="https://unsplash.com/photos/n8jeOSxCRfQ">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Olivier Law</a></div>
							<div class="card-text">1900-1937</div>
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