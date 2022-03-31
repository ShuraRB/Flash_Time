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
				<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><span>Temario Segundo de Secundaria</span> ...</h1>
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
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'tolteca.jpg');?>">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">Civilizaciones Mesoamericanas.</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">subido por: Genaro</a></span>
										<!-- <span>|</span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p> Las civilizaciones mesoamericanas son culturas precolombinas que habitaron la región central de América 
                                    (en los actuales países de Costa Rica, Nicaragua, Honduras, El Salvador, Guatemala, Belice y centro-sur
                                     de México), entre el 1.500 a.C. y el 1.521 d.C. El nombre Mesoamérica proviene del griego y significa “medio” o 
                                     “intermedio” y hace referencia a las tierras de Centroamérica.
                                    Los principales pueblos que habitaron esas tierras fueron: los olmecas, chichimecas, totonaca, tlaxcalteca,
                                     zapotecas, teotihuacanos, mayas, mixtecas, totonacos, toltecas, huastecas, purépechas y aztecas. Algunos de
                                      ellos se convirtieron en grandes civilizaciones que dejaron evidencias de un valioso legado.</p>
							</div>
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'civil.jpg');?>">
							</div>
							<div class="news_post_quote">
								<p class="news_post_quote_text">La mayoria de las civilizaciones mesoamericanas, compartian su estructura economica y clasismo social.</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">Las principales civilizaciones mesoamericanas fueron:

Los olmecas. Fueron la primera gran civilización de la región, entre el 1500 a. C. y el 300 d. C. Se destacaron por las edificaciones, las colosales cabezas talladas en piedra, el calendario y las bases de la escritura.
Los zapotecas. Fueron una de las primeras poblaciones de Mesoamérica establecidas en el sur del actual país de México, una región de extensos valles que resultaba muy adecuada para la agricultura.
Los mayas. Desarrollaron grandes conocimientos de matemática, astrología y escritura. Estuvieron gobernados por un grupo social de sacerdotes bajo una estructura social piramidal y estricta.
Los teotihuacanos. Desarrollaron sofisticadas técnicas en el arte. La cerámica incluía pinturas geométricas e imágenes de dioses, también plasmados sobre grandes edificaciones para decorarlas.
Los mixtecas. Alcanzaron su máximo esplendor entre el 950 d. C. y el 1521 d. C. con una gran cantidad de ciudades-estado bajo su dominio. Se destacaron por estar entre los mejores artesanos de Mesoamérica.
Los aztecas o mexicas. Desarrollaron grandes palacios, templos y mercados. Lograron expandir su territorio bajo el dominio de una monarquía autoritaria que albergó a una población de casi siete millones de habitantes.
Los toltecas. Alcanzaron su apogeo entre el 900 d. C. y el 1200 d. C. Realizaban intercambios comerciales en los que la semilla del cacao era utilizada como “medio de pago”. Desarrollaron grandes habilidades para la guerra. </p>

                            <iframe width="640" height="360" src="https://www.youtube.com/embed/wHK8Klr_yaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<!-- Fin de la publicación -->
                            <br>
                            <br>
						</div>
					</div>
				</div>
                


               

				<!-- inicio de la columna -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Archives -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Temario</h3>
								<img class="icon_menu_mm" src="<?= base_url(RECURSOS_PORTAL_IMAGES.'temario.png');?>" alt="un_dia">
							</div>
							<ul class="sidebar_list">
								<li class="sidebar_list_item"><a href="<?= route_to('primero');?>">Primero de secundaria</a></li>
								<li class="sidebar_list_item"><a href="<?= route_to('segundo');?>">Segundo de secundaria</a></li>
								<li class="sidebar_list_item"><a href="<?= route_to('tercero');?>">Tercero de secundaria</a></li>
								
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
                
                 <!-- Nueva columna de publicación -->

				<div class="col-lg-8">

<div class="news_post_container">
    <!-- Nueva publicación -->
    <div class="news_post">
        <div class="news_post_image">
            <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'milpa.jpg');?>">
        </div>
        <div class="news_post_top d-flex flex-column flex-sm-row">
            
            <div class="news_post_title_container">
                <div class="news_post_title">
                    <a href="news_post.html">Actividades economicas y culturales de las civilizaciones mesoamericanas.</a>
                </div>
                <div class="news_post_meta">
                    <span class="news_post_author">subido por: Genaro</a></span>
                    <!-- <span>|</span> -->
                </div>
            </div>
        </div>
        <div class="news_post_text">
            <p> Esencialmente la economía mesoamericana se basó en la agricultura del maíz, el frijol, la calabaza y el chile, pero de todos estos cultivos, el maíz fue el producto agrícola por excelencia, dado a su posibilidad de cosecharlo entre dos y tres veces al año, aparte que era aprovechado en su totalidad, así, con los granos se hacía masa, sopa y bebidas. Las hojas se usaban para envolver la comida o como adornos, e igualmente, con el tallo y los cabellitos, se realizaba té para las infecciones gástricas.
Otra de las actividades productivas de los mesoamericanos fueron la caza de animales silvestres o aves, la pesca y la recolección de frutos o plantas,tales como el maguey con el que se preparaba aguamiel, y el nopal que se usaba en las comidas.</p>
        </div>
        <div class="news_post_image">
            <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'comercio.jpg');?>">
        </div>
        <div class="news_post_quote">
            <p class="news_post_quote_text">Los olmecas obtenían espejos de ilmenita de los valles de Oaxaca y jade de Honduras. Posteriormente, los teotihuacanos llegaron a intercambiar productos más allá de las fronteras mesoamericanas, usando el cacao, las mantas y el oro, como especies de monedas para las transacciones comerciales.</p>
        </div>

        <p class="news_post_text" style="margin-top: 59px;">Adicionalmente, algunas civilizaciones de la cultura mesoamericana se destacaron por su producción artesanal como los zapotecas, los toltecas y los mixtecos, en cambio, los olmecas y los teotihuacanos se distinguieron por la explotación del caucho y la obsidiana, respectivamente.</p>

<iframe width="670" height="360" src="https://www.youtube.com/embed/MZA_eVXPtOs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!-- Fin de la publicación -->
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