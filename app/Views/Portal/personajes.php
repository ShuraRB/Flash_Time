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
			<div class="home_background prlx" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'teachers_background.jpg');?>)"></div>
		</div>
		<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
			<div class="hero_slide_content text-center">
				<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Personajes <span>Historicos</span></h1>
			</div>
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
							<div class="card_plus trans_200 text-center"><a href="<?= route_to('post');?>">+</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'teacher_1.jpg');?>" alt="https://unsplash.com/@michaeldam">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="<?= route_to('post');?>">Maria Smith</a></div>
							<div class="card-text">Graphic Designer</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'teacher_2.jpg');?>" alt="https://unsplash.com/@jcpeacock">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Christian Blue</a></div>
							<div class="card-text">Graphic Designer</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'teacher_3.jpg');?>" alt="https://unsplash.com/photos/n8jeOSxCRfQ">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">James Brown</a></div>
							<div class="card-text">Graphic Designer</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'teacher_4.jpg');?>" alt="https://unsplash.com/@seteales">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Julie Denver</a></div>
							<div class="card-text">Graphic Designer</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'teacher_5.jpg');?>" alt="https://unsplash.com/@jaredsluyter">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Julie Denver</a></div>
							<div class="card-text">Graphic Designer</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'teacher_6.jpg');?>" alt="https://unsplash.com/@mehdizadeh">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Julie Denver</a></div>
							<div class="card-text">Graphic Designer</div>
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