<?= $this->extend("Plantillas/Portal_base") ?>

<!-- CSS-->
<?= $this->section("css")?>
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'contact_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'contact_responsive.css');?>">
<?= $this->endSection('css');?>   

<!-- CONTENIDO-->
<?= $this->section("contenido")?>

<!-- Home -->

<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'contact_background.jpg');?>)"></div>
		</div>
		<div class="home_content">
			<h1>Juegos</h1>
		</div>
	</div>

	<!-- Juegos -->
	<div class="contact">
		<!-- Aqui va el codigo del juego -->

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'crucigrama.png');?>" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="<?= route_to('Crucigrama');?>">Crucigramas</a></div>
							<!-- <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div> -->
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'encuesta.png');?>" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="<?= route_to('Quiz');?>">Quiz Educativos</a></div>
							<!-- <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div> -->
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'sopa.png');?>" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="<?= route_to('Sopa');?>">Sopa de letras</a></div>
							<!-- <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!-- Footer -->

<?= $this->endSection('contenido');?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection('js');?> 