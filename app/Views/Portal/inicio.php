<?= $this->extend("Plantillas/Portal_base") ?>

<!-- CSS-->
<?= $this->section("css")?>
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'main_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'responsive.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'text_styles.css');?>">
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
					<a href="<?= route_to('Juegos');?>">
					<div class="hero_slide_background" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'juego.jpg');?>)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><span>Juegos</span></h1>
						</div>
					</div>
					</a>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<a href="<?= route_to('personajes');?>">
					<div class="hero_slide_background" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'personajes.jpg');?>)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><span>Personajes Historicos</span></h1>
						</div>
					</div>
					</a>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
				<a href="<?= route_to('personajes');?>">
					<div class="hero_slide_background" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'historia_background.jpg');?>)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><span>Un d??a como hoy...</span></h1>
						</div>
					</div>
				</div>
				</a>
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
							<p class="about_text">Si te has preguntado qu?? se aprende en la asignatura de historia,
								as?? como su importancia, te invitamos leer los articulos de nuestra p??gina.
								La historia puede ser mucho m??s f??cil de aprender y estudiar si somos conscientes
								de la relevancia de esta asignatura en nuestras vidas.
							
								En nuestra p??gina encontraras articulos, videos, juegos, que llamaran tu atenci??n 
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
						<a href="<?= route_to('inicio');?>">
							<h1><img class="icon_inicio" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'reloj.png');?>" alt="">
								Un d??a como hoy
							</h1>
						</a>
						<p class="text_inicio">Articulos recientes. Haz clic en el titulo de la nota para 
							leer m??s sobre el hecho historico de tu interes.
							</p>
						
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
									<div class="event_name"><a class="trans_200" href="<?= route_to('public_one');?>">Natalicio de Benito Ju??rez.</a></div>
									<div class="event_location">Por: Genaro Ariel</div>
									<p>Un dia como hoy se conmemora el nacimiento de Benito Ju??rez, naci?? un d??a 21 de marzo de 1806 en San Pablo Guelatao, Oaxaca, y sus humildes or??genes no fueron un impedimento para que se formara como abogado y se convirtiera en presidente del gobierno del pa??s.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img href="<?= route_to('public_one');?>" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'benito.jpg');?>" alt="">
								</div>
							</div>

						</div>	
					</div>
				</div></a>

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
									<div class="event_name"><a class="trans_200" href="<?= route_to('public_two');?>">Inauguraci??n de la Suprema Corte de Justicia.</a></div>
									<div class="event_location">Por: Genaro Ariel</div>
									<p>Un dia como hoy se conmemora la ignauguraci??n de la Suprema Corte de Justicia de la Naci??n (SCJN) institucion de las m??s antiguas e importantes del estado mexicano, que ha sido una pieza clave de los distintos reg??menes en el pa??s, funcionando a veces como un contrapeso efectivo a los dem??s poderes.</p>
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
									<div class="event_name"><a class="trans_200" href="<?= route_to('public_three');?>">Promulgaci??n del Plan de Guadalupe.</a></div>
									<div class="event_location">Por: Genaro Ariel</div>
									<p>Un dia como hoy se conmemora la promulgaci??n del plan de guadalupe conform?? por siete art??culos o puntos. En ellos se menciona el desconocimiento de Huerta como primer mandatario; el desconocimiento del Poder Legislativo y Judicial, as?? como de los gobiernos de los estados alineados con la administraci??n huertista.</p>
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
						<a href="<?= route_to('inicio');?>">
							<h1><img class="icon_inicio" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'escudo.png');?>" alt="">
								Personajes historicos.
							</h1>
						</a>
						<p class="text_inicio">Para saber mas sobre el personaje historico de tu interes, haz click 
							sobre la imagen o sobre el nombre.
							</p>
						
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
							<div class="card_plus trans_200 text-center"><a href="<?= route_to('hidalgo');?>">Haz click aqu?? para Leer</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'hidalgo.jpg');?>" alt="">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="<?= route_to('hidalgo');?>">Miguel Hidalgo</a></div>
							<div class="card-text">1753-1811</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="<?= route_to('morelos');?>">Haz click aqu?? para Leer</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'morelos.jpg');?>" alt="">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="<?= route_to('morelos');?>">Jos?? Mar??a Morelos</a></div>
							<div class="card-text">1765-1815</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="<?= route_to('law');?>">Haz click aqu?? para Leer</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'olivier.jpg');?>" alt="">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="<a href="<?= route_to('law');?>">Olivier Law</a></div>
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