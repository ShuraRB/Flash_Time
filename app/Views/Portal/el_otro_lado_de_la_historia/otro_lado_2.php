<?= $this->extend("Plantillas/Portal_base") ?>

<!-- CSS-->
<?= $this->section("css")?>
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'news_post_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'news_post_responsive.css');?>">
<?= $this->endSection();?>   

<!-- CONTENIDO-->
<?= $this->section("contenido")?>

	<!-- Imagen grande de arriba -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES.'5.jpg');?>)"></div>
		</div>
		<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
			<div class="hero_slide_content text-center">
				<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><span>La otra cara de la historia</span> ...</h1>
			</div>
		</div>
	</div>

	<!-- El otro lado de la historia -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- Nueva columna de publicación -->

				<div class="col-lg-8">

					<div class="news_post_container">
						<!-- Nueva publicación -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'guerra_1.jpg');?>">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>24</div>
										<div>MAR</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">La Guerra de los Pasteles</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">Por: Ana Rugerio</a></span>
										<!-- <span>|</span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p> El 16 de abril de 1838, la población francesa que vivían en México 
									estaban molestos por los tratos injustos. 
 </p>
							</div>
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'guerra_2.png');?>">
							</div>
							<div class="news_post_quote">
								<p class="news_post_quote_text"><span>E</span>l 30 de noviembre de 1838, México declaró la guerra al rey de Francia 
								y nombró jefe de las operaciones en Veracruz al general Antonio López de Santa Anna</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">Ya que Francia tenia bastantes quejas de sus compatriotas en especiales de 
							sus comerciantes, en especial una de las quejas fue que parte de los soldados mexicanos entraron a una pastelería y se comieron 
							todos sus pasteles y destruyeron su pastelería, así que Francia pedía su dinero que le pidió durante la guerra de México y Estados 
							Unidos, así que Francia le pedía un pago de 600 mil pesos en daños, así que Francia bombardeo el puerto de Veracruz e hizo un bloqueo 
							comercial. </p>

							<iframe width="323" height="574" src="https://www.youtube.com/embed/vr0uR4gNWBs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<!-- Fin de la publicación -->
						</div>
					</div>
				</div>


				<!-- inicio de la columna -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Archives -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Articulos Completos</h3>
							</div>
							<ul class="sidebar_list">
								<li class="sidebar_list_item"><a href="#">Natalicio Benito Juárez</a></li>
								<li class="sidebar_list_item"><a href="#">Inauguración de la Suprema Corte de Justicia</a></li>
								<li class="sidebar_list_item"><a href="#">Promulgación del plan de guadalupe</a></li>
								<li class="sidebar_list_item"><a href="#">Heroica defensa del puerto de Veracruz</a></li>
								<li class="sidebar_list_item"><a href="#">Toma de Querétaro</a></li>
								<li class="sidebar_list_item"><a href="#">Fundación de Petróleos Mexicanos PEMEX</a></li>
							</ul>
						</div>

						<!-- Latest Posts -->

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Ultimas publicaciones</h3>
							</div>
							
							<div class="latest_posts">
								  
								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'defensa.jpg');?>" alt="https://unsplash.com/@dsmacinnes">
									</div>
									<div class="latest_post_title"><a href="news_post.html">Heroica defensa del puerto de Veracruz</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">Subido por Genaro</a></span>
										
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Queretaro.jpg');?>" alt="https://unsplash.com/@erothermel">
									</div>
									<div class="latest_post_title"><a href="news_post.html">Toma de Querétaro</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">Subido por Genaro</a></span>
										
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Pemex.jpg');?>" alt="https://unsplash.com/@element5digital">
									</div>
									<div class="latest_post_title"><a href="news_post.html">Fundación de Petróleos Mexicanos PEMEX</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">Subido por Genaro</a></span>
										
									</div>
								</div>
								
							</div>
								
						</div>

					</div>
				</div>
				<!-- final de la columna -->


			</div>
		</div>
	</div>

<?= $this->endSection();?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection();?> 