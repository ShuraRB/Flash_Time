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
				<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">La otra <span>cara</span> de la <span>historia</span> ...</h1>
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
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'juegos_olimpicos.png');?>">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>25</div>
										<div>MAR</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">Los Juegos Olímpicos</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">Por: Ana Rugerio</a></span>
										<!-- <span>|</span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p> Era la primera vez que se transmitían en satélite, México. 
									Pero a su vez había muchas manifestaciones de estudiantes 
									contra la represión estudiantil.
 </p>
							</div>
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'juegos_olimpicos3.jpg');?>">
							</div>
							<div class="news_post_quote">
								<p class="news_post_quote_text"><span>"O</span>frecemos y deseamos la amistad 
								con todos los pueblos de la tierra", fue la frase del Presidente de la 
								República Mexicana en 1968, -Gustavo Díaz Ordaz</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">Como cabe mencionar había guerra fría, 
							por lo cual Estados Unidos le dijo al presidente de México Gustavo Díaz Ordaz 
							que era presidente ese año, que se hicieran algunas represiones, pero a su vez el presidente 
							mando a 5 mil soldados, dentro de los cuales realizaron una masacre contra los estudiantes. </p>

							<iframe width="640" height="360" src="https://www.youtube.com/embed/T4OEPcJOy2c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<!-- Fin de la publicación -->
						</div>
					</div>
				</div>

<!-- Coumna derecha -->
<div class="col-lg-4">
<div class="sidebar">

	<!-- Archives -->
	<div class="sidebar_section">
		<div class="sidebar_section_title">
			<h3>Categorias</h3>
		</div>
		<ul class="sidebar_list">
			<li class="sidebar_list_item"><a href="#">Categoria 1</a></li>
			<li class="sidebar_list_item"><a href="#">Categoria 1</a></li>
			<li class="sidebar_list_item"><a href="#">Categoria 1</a></li>
			<li class="sidebar_list_item"><a href="#">Categoria 1</a></li>
			<li class="sidebar_list_item"><a href="#">Categoria 1</a></li>
		</ul>
	</div>

	<!-- Latest Posts -->
	<div class="sidebar_section">
		<div class="sidebar_section_title">
			<h3>Ultimas Publicaciones</h3>
		</div>

		<div class="latest_posts">
			<!-- Latest Post -->
			<div class="latest_post">
				<div class="latest_post_image">
					<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'latest_1.jpg');?>">
				</div>
				<div class="latest_post_title"><a href="news_post.html">Título de la publicación</a></div>
				<div class="latest_post_meta">
					<span class="latest_post_author"><a href="#">Por: Autor</a></span>
				</div>
			</div>

			<!-- Latest Post -->
			<div class="latest_post">
				<div class="latest_post_image">
					<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'latest_2.jpg');?>">
				</div>
				<div class="latest_post_title"><a href="news_post.html">Título de la publicación</a></div>
				<div class="latest_post_meta">
					<span class="latest_post_author"><a href="#">Por: Autor</a></span>
				</div>
			</div>

			<!-- Latest Post -->
			<div class="latest_post">
				<div class="latest_post_image">
					<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'latest_3.jpg');?>">
				</div>
				<div class="latest_post_title"><a href="news_post.html">Título de la publicación</a></div>
				<div class="latest_post_meta">
					<span class="latest_post_author"><a href="#">Por: Autor</a></span>
				</div>
			</div>

		</div>

	</div>
</div>
</div>
<!-- Final de la columna -->


			</div>
		</div>
	</div>

<?= $this->endSection();?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection();?> 