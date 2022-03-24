<!DOCTYPE html>
<html lang="en">
<head>
<title>Flash Time</title>
<link rel="icon" href="<?= base_url(RECURSOS_PORTAL_IMAGES.'libro.svg');?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'bootstrap4/bootstrap.min.css');?>">
<link href="<?= base_url(RECURSOS_PORTAL_PLUGINS.'fontawesome-free-5.0.1/css/fontawesome-all.css');?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_PLUGINS.'OwlCarousel2-2.2.1/owl.carousel.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_PLUGINS.'OwlCarousel2-2.2.1/owl.theme.default.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_PLUGINS.'OwlCarousel2-2.2.1/animate.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'icon_responsive.css');?>">
<!-- ============================================================== -->
    <!-- This page css -->
    <!-- ============================================================== -->
    <?= $this->renderSection("css") ?>

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo"">
					<a href="<?= route_to('inicio');?>">
					<img class="icon_logo" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'libro.svg');?>" alt="">
					<span>FlashTime</span></a>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item">
							<a href="<?= route_to('inicio');?>">
							<img class="icon_menu" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'casa.png');?>" alt="inicio">
							<div>Inicio</div></a>
						</li>
						<li class="main_nav_item">
							<a href="<?= route_to('Juegos');?>">
							<img class="icon_menu" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'joystick.png');?>" alt="juego">
							<div>Juegos</div></a>
						</li>
						<li class="main_nav_item">
							<a href="<?= route_to('personajes');?>">
							<center><img class="icon_menu" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'escudo.png');?>" alt="personajes"></center>
							<div>Personajes <br>historicos</div></a>
						</li>
						<li class="main_nav_item">
							<a href="<?= route_to('otro_lado');?>">
							<center><img class="icon_menu" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'2caras.png');?>" alt="otro_lado"></center>
							<div>La otra cara <br>de la historia</div></a>
						</li>
						<li class="main_nav_item">
							<a href="<?= route_to('un_día');?>">
							<center><img class="icon_menu" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'reloj.png');?>" alt="un_dia"></center>
							<div>Un día como hoy</div></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">

		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm">
						<a href="<?= route_to('inicio');?>">
						<img class="icon_menu_mm" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'casa.png');?>" alt="inicio">
						Inicio</a>
					</li>
					<li class="menu_item menu_mm">
						<a href="<?php route_to('juego');?>">
						<img class="icon_menu_mm" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'joystick.png');?>" alt="juego">
						Juego</a>
					</li>
					<li class="menu_item menu_mm">
						<a href="<?= route_to('personajes');?>">
						<img class="icon_menu_mm" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'escudo.png');?>" alt="personajes">
						Personajes Historicos</a>
					</li>
					<li class="menu_item menu_mm">
						<a href="<?= route_to('otro_lado');?>">
						<img class="icon_menu_mm" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'2caras.png');?>" alt="otro_lado">
						El otro lado de la historia</a>
					</li>
					<li class="menu_item menu_mm">
						<a href="<?= route_to('un_día');?>">
						<img class="icon_menu_mm" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'reloj.png');?>" alt="un_dia">
						Un día como hoy</a>
					</li>
<<<<<<< HEAD
=======
					<li class="menu_item menu_mm"><a href="<?= route_to('Juegos');?>">Juegos</a></li>
					<li class="menu_item menu_mm"><a href="<?= route_to('personajes');?>">Personajes Historicos</a></li>
					<li class="menu_item menu_mm"><a href="<?= route_to('otro_lado');?>">El otro lado de la historia</a></li>
					<li class="menu_item menu_mm"><a href="<?= route_to('un_día');?>">Un día como hoy</a></li>
>>>>>>> feaaac186c80911ff12287f8f61564cf5c8c6530
			
				</ul>
			</div>

		</div>

	</div>

    <!-- *********************************************** -->
    <!-- ************* CONTENIDO PRINCIPAL ************* -->
    <?= $this->renderSection("contenido") ?>
    <!-- *********************************************** -->
    <!-- *********************************************** -->

	<!-- Footer -->

	<footer class="footer">
		<div class="container">

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
<<<<<<< HEAD
								<a href="<?= route_to('inicio');?>">
								<img class="icon_logo" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'libro.svg');?>" alt="">
								<span>Flash Time</span></a>
=======
								<img class="icon_logo" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'libro-b.png');?>" alt="">
								<span>Flash Time</span>
>>>>>>> feaaac186c80911ff12287f8f61564cf5c8c6530
							</div>
						</div>

						<p class="footer_about_text">
							En nuestra página encontraras articulos, videos, juegos, que llamaran tu atención 
							y te ayudaran a aprender historia. Te haran olvidar los tiempo en lo que pensabas
							que aprender historia era aburrido.</p>

					</div>

					<!-- Footer Column -->
					<div class="col-lg-3 footer_col"></div>

					<!-- Footer Column -->
					<div class="col-lg-3 footer_col"></div>


					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
<<<<<<< HEAD
								<li class="footer_list_item">
									<a href="<?= route_to('inicio');?>">
									<img class="icon_menu_footer" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'casa.png');?>" alt="inicio">
									Inicio</a>
								</li>
								<li class="footer_list_item">
									<a href="<?php route_to('juego');?>">
									<img class="icon_menu_footer" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'joystick.png');?>" alt="juego">
									Juego</a>
								</li>
								<li class="footer_list_item">
									<a href="<?= route_to('personajes');?>">
									<img class="icon_menu_footer" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'escudo.png');?>" alt="personajes">
									Personajes Historicos</a>
								</li>
								<li class="footer_list_item">
										<a href="<?= route_to('otro_lado');?>">
										<img class="icon_menu_footer" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'2caras.png');?>" alt="otro_lado">
										El otro lado de la historia</a>
								</li>
								<li class="footer_list_item">
									<a href="<?= route_to('un_día');?>">
									<img class="icon_menu_footer" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'reloj.png');?>" alt="un_dia">
									Un día como hoy</a>
								</li>
=======
								<li class="footer_list_item"><a href="<?= route_to('inicio');?>">Inicio</a></li>
								<li class="footer_list_item"><a href="<?= route_to('Juegos');?>">Juegos</a></li>
								<li class="footer_list_item"><a href="<?= route_to('personajes');?>">Personajes Historicos</a></li>
								<li class="footer_list_item"><a href="<?= route_to('otro_lado');?>">El otro lado de la historia</a></li>
								<li class="footer_list_item"><a href="<?= route_to('un_día');?>">Un día como hoy</a></li>
>>>>>>> feaaac186c80911ff12287f8f61564cf5c8c6530
							</ul>
						</div>
					</div>


				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Proyecto elaborado por | José Alejandro Huerta Cote | Ana Patricia Netzahuatl Rugerio | Genaro Ariel Pedraza Alcaraz | Irving Garcia Degales <i class="fa fa-heart" aria-hidden="true"></i> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
			</div>

		</div>
	</footer>

</div>

<script src="<?= base_url(RECURSOS_PORTAL_JS.'jquery-3.2.1.min.js');?>"></script>
<script src="<?= base_url(RECURSOS_PORTAL_CSS.'bootstrap4/popper.js');?>"></script>
<script src="<?= base_url(RECURSOS_PORTAL_CSS.'bootstrap4/bootstrap.min.js');?>"></script>
<script src="<?= base_url(RECURSOS_PORTAL_PLUGINS.'greensock/TweenMax.min.js');?>"></script>
<script src="<?= base_url(RECURSOS_PORTAL_PLUGINS.'greensock/TimelineMax.min.js');?>"></script>
<script src="<?= base_url(RECURSOS_PORTAL_PLUGINS.'scrollmagic/ScrollMagic.min.js');?>"></script>
<script src="<?= base_url(RECURSOS_PORTAL_PLUGINS.'greensock/animation.gsap.min.js');?>"></script>
<script src="<?= base_url(RECURSOS_PORTAL_PLUGINS.'greensock/ScrollToPlugin.min.js');?>"></script>
<script src="<?= base_url(RECURSOS_PORTAL_PLUGINS.'OwlCarousel2-2.2.1/owl.carousel.js');?>"></script>
<script src="<?= base_url(RECURSOS_PORTAL_PLUGINS.'scrollTo/jquery.scrollTo.min.js');?>"></script>
<script src="<?= base_url(RECURSOS_PORTAL_PLUGINS.'easing/easing.js');?>"></script>
<script src="<?= base_url(RECURSOS_PORTAL_JS.'custom.js');?>"></script>

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <?= $this->renderSection("js") ?>

</body>
</html>