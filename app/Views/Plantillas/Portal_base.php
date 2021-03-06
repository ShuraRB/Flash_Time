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
<!-- //Css para e boton de subir al inicio de la pagina -->
<link href="<?= base_url(RECURSOS_PORTAL_CSS. 'gotop.css');?>" rel="stylesheet"> 

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
							<a href="<?= route_to('un_d??a');?>">
							<center><img class="icon_menu" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'reloj.png');?>" alt="un_dia"></center>
							<div>Un d??a como hoy</div></a>
						
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<a href="<?= route_to('aboutus');?>">
			<center><img class="icon_menu" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'about-b.png');?>" alt="un_dia"></center>
			<div><span>Sobre Nosotros</span></div></a>
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
						<a href="<?= route_to('Juegos');?>">
						<img class="icon_menu_mm" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'joystick.png');?>" alt="juegos">
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
						<a href="<?= route_to('un_d??a');?>">
						<img class="icon_menu_mm" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'reloj.png');?>" alt="un_dia">
						Un d??a como hoy</a>
					</li>
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
								<a href="<?= route_to('inicio');?>">
								<img class="icon_logo" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'libro-b.png');?>" alt="">
								<span>Flash Time</span></a>
							</div>
						</div>

						<p class="footer_about_text">
							En nuestra p??gina encontraras articulos, videos, juegos, que llamaran tu atenci??n 
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
								<li class="footer_list_item">
									<a href="<?= route_to('inicio');?>">
									<img class="icon_menu_footer" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'casa-b.png');?>" alt="inicio">
									Inicio</a>
								</li>
								<li class="footer_list_item">

									<a href="<?= route_to('Juegos');?>">
									<img class="icon_menu_footer" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'joystick-b.png');?>" alt="juegos">
									Juego</a>
								</li>
								<li class="footer_list_item">
									<a href="<?= route_to('personajes');?>">
									<img class="icon_menu_footer" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'escudo-b.png');?>" alt="personajes">
									Personajes Historicos</a>
								</li>
								<li class="footer_list_item">
										<a href="<?= route_to('otro_lado');?>">
										<img class="icon_menu_footer" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'2caras-b.png');?>" alt="otro_lado">
										La otra cara de la historia</a>
								</li>
								<li class="footer_list_item">
									<a href="<?= route_to('un_d??a');?>">
									<img class="icon_menu_footer" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'reloj-b.png');?>" alt="un_dia">
									Un d??a como hoy</a>
								</li>
								<li class="footer_list_item">
									<a href="<?= route_to('aboutus');?>">
									<img class="icon_menu_footer" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'about-b.png');?>" alt="about_us">
									Sobre Nosotros</a>
								</li>
							</ul>
						</div>
					</div>


				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Proyecto elaborado por | Jos?? Alejandro Huerta Cote | Ana Patricia Netzahuatl Rugerio | Genaro Ariel Pedraza Alcaraz | Irving Garcia Degales <i class="fa fa-heart" aria-hidden="true"></i> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
			</div>

		</div>
	</footer>

</div>
<!-- Boton que lleva al inicio de la pagina -->
<div class="go-top-container">
	<div class="go-top-button">
		<img class="flecha_arriba" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'arriba.png');?>" alt="">
	</div>
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
<!-- Boton para ir arriba de la pagina --> 
<script type="text/javascript" src="<?= base_url(RECURSOS_PORTAL_JS. 'gotop.js');?>"></script>


    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <?= $this->renderSection("js") ?>

</body>
</html>