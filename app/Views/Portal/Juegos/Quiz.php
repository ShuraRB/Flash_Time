<?= $this->extend("Plantillas/Portal_base") ?>

<!-- CSS-->
<?= $this->section("css")?>
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'contact_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'contact_responsive.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'main_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'responsive.css');?>">
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
						<img class="card-img-top" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'1.png');?>" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="<?= route_to('Q1');?>">Grado</a></div>
							<!-- <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div> -->
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'2.png');?>" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="<?= route_to('Q2');?>">Grado</a></div>
							<!-- <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div> -->
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'3.png');?>" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="<?= route_to('Q3');?>">Grado</a></div>
							<!-- <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<br></br>
		<br></br>

 		<!-- Footer -->

<?= $this->endSection('contenido');?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection('js');?> 