<?= $this->extend("Plantillas/Portal_base") ?>

<!-- CSS-->
<?= $this->section("css")?>
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'main_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'responsive.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'about_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'about_responsive.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'text_styles.css');?>">

<?= $this->endSection('css');?>

<!-- CONTENIDO-->
<?= $this->section("contenido")?>
<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'contact_background.jpg');?>)"></div>
		</div>
		<div class="home_content">
			<h1>Sobre Nosotros</h1>
		</div>
</div>
<div class="container">
			<br>
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Sobre el equipo de trabajo</h1>
					</div>
				</div>
			</div>
			<br><br>
							<p class="about-us">El equipo originalmente se formo, gracias a un proyecto en 
								la materia de "Diseño de interfaces", donde tuvimos que diseñar y desarrollar 
								un software educativo, en el cual se pudiera encontrar información sobre la 
								materia de historia.
								<br><br>
								Proyecto en el que nos encontramos actualmente. Y el espacio en el que te 
								encuentras actualmente es para presentar a los integrantes del equipo.
							</p>

		</div>
	</div>

	<!-- Teachers -->
	<div class="teachers page_section">
		<div class="container">
			<div class="row">
				
				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'alex.jpg');?>" alt="">
						</div>
						<div class="card-body text-center">
							<div class="about-us-person">José Alejandro Huerta Cote</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'patty.jpg');?>" alt="">
						</div>
						<div class="card-body text-center">
							<div class="about-us-person">Ana Patricia Netzahuatl Rugerio</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'gena.jpg');?>" alt="">
						</div>
						<div class="card-body text-center">
							<div class="about-us-person">Genaro Ariel Pedraza Alcaraz </div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">

				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'irving.jpg');?>" alt="">
						</div>
						<div class="card-body text-center">
							<div class="about-us-person">Irving Garcia Degales</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">

				</div>

			</div>
		</div>
	</div>
<?= $this->endSection('contenido');?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection('js');?> 