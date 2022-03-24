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
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'la_plaga_1.jpg');?>">
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
										<a href="news_post.html">La plaga de Justiniano</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">Por: Ana Rugerio</a></span>
										<!-- <span>|</span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p> Esta plaga nace entre el año 541 a 546 D.C y 
									en ese entonces el emperador Bizantino Justiniano
									 se enfermo de esta plaga y fallecio.
 </p>
							</div>
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'la_plaga_2.jpg');?>">
							</div>
							<div class="news_post_quote">
								<p class="news_post_quote_text"><span>L</span>os sucesivos brotes de epidemia 
								crearon un clima de inestabilidad social que culminó con una serie de revoluciones</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">Fue por eso que le pusieron este nombre. 
							Esta plaga se propago en lo que ese tiempo era el imperio Romano e imperio bizantino, matando 
							en aproximación a 25 a 50 millones de personas que era una cuarta parte de la población del 
							mediterráneo, que fue un 40% de la población de Constantinopla y permitió las invasiones de 
							muchas tribus al imperio bizantino y comenzó con la decadencia del mismo. Se distribuyo por 
							las ratas que llevaban la enfermedad y contagiaban a la humanidad y de aquí se origina la peste negra. </p>

							<iframe width="864" height="486" src="https://www.youtube.com/embed/AfLIwweHGFA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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