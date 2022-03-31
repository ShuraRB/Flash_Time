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
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'moctezuma1.jpg');?>">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>31</div>
										<div>MAR</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">Quien mato a Moctezuma</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">Por: Ana Rugerio</a></span>
										<!-- <span>|</span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>  la muerte de Moctezuma II, quien gobernó los destinos de Tenochtitlan 
									entre 1502 y 1520 d.C., deceso que ocurrió en este último año a raíz del 
									asedio de los mexicas a los españoles guarecidos en el palacio de Axayácatl. 
									Dos versiones conocemos del fatal acontecimiento: por un lado, la de cronistas 
									españoles como Hernán Cortés y Bernal Díaz del Castillo, quienes achacan la muerte
									 de Moctezuma a los indígenas, y por el otro, la de cronistas de estirpe indígena 
									 como Fernando Alvarado Tezozómoc y Francisco de San Antón Chimalpahin, que, por 
									 el contrario, dicen que fue muerto por los españoles.
 </p>
							</div>
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'moctezuma2.jpg');?>">
							</div>
							<div class="news_post_quote">
								<p class="news_post_quote_text"><span>“Y</span>o tengo creído que no aprovecharé cosa ninguna 
								para que cese la guerra, porque ya tienen alzado otro señor y se han propuesto no dejaros salir 
								de aquí con vida; y así creo que todos vosotros habéis de morir”.</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">Montezuma se puso a un pretil de una azotea con 
										muchos de nuestros soldados que le guardaban, y les comenzó a hablar con palabras muy amorosas 
										que dejasen la guerra y que iríamos de México. Muchos principales y capitanes mexicanos bien le 
										conocieron, y luego mandaron que callasen sus gentes y no tirasen varas, piedras ni flechas. 
										Cuatro de ellos se llegaron en parte que Montezuma les podía hablar, y ellos a él, y llorando 
										le dijeron: “¡Oh, señor y nuestro gran señor, y cómo nos pesa de todo vuestro mal y daño y de 
										vuestros hijos y parientes! Hacémoos saber que ya hemos levantado a un pariente vuestro por señor”. 
										Allí le nombró, que se decía Cuitláhuac, señor de Iztapalapa.									 </p>

							<iframe width="640" height="360" src="https://www.youtube.com/embed/MKY69EKvTrc?list=RDCMUCVvYB5q5UJ4KZwlYdVW35zA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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