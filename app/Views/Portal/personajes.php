<?= $this->extend("Plantillas/Portal_base") ?>

<!-- CSS-->
<?= $this->section("css")?>
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'teachers_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'teachers_responsive.css');?>">
<?= $this->endSection();?>   

<!-- CONTENIDO-->
<?= $this->section("contenido")?>

	<!-- Home -->
	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'personajes.jpg');?>)"></div>
		</div>
		<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
			<div class="hero_slide_content text-center">
				<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Personajes <span>Historicos</span></h1>
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
							<div class="card_plus trans_200 text-center"><a href="<?= route_to('hidalgo');?>">Haz click aquí para Leer</a></div>
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
							<div class="card_plus trans_200 text-center"><a href="<?= route_to('morelos');?>">Haz click aquí para Leer</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'morelos.jpg');?>" alt="">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="<?= route_to('morelos');?>">José María Morelos</a></div>
							<div class="card-text">1765-1815</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="<?= route_to('law');?>">Haz click aquí para Leer</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'olivier.jpg');?>" alt="">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="<a href="<?= route_to('law');?>">Olivier Law</a></div>
							<div class="card-text">1900-1937</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="<?= route_to('hidalgo');?>">Haz click aquí para Leer</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'benito2.jpg');?>" alt="">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="<?= route_to('benito');?>">Benito Juárez</a></div>
							<div class="card-text">1806-1872</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="<?= route_to('morelos');?>">Haz click aquí para Leer</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'madero.jpg');?>" alt="">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="<?= route_to('madero');?>">Francisco I. Madero</a></div>
							<div class="card-text">1873-1913</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="<?= route_to('law');?>">Haz click aquí para Leer</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'huerta.jpg');?>" alt="">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="<a href="<?= route_to('huerta');?>">Victoriano Huerta</a></div>
							<div class="card-text">1854-1916</div>
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