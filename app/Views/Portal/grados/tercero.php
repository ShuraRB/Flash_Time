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
				<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><span>Temario Tercero de Secundaria</span> ...</h1>
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
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'levantamiento.jpg');?>">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">Revolución Mexicana Primera Etapa.</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">subido por: Genaro</a></span>
										<!-- <span>|</span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p> Porfiriato
La Revolución Mexicana se dio a causa del Porfiriato, periodo que refiere a la dictadura de Porfirio Díaz impuesta desde 1876.

La fracción opositora estaba a cargo de Francisco I. Madero, quien formó el Partido Anti-Reeleccionista para presentarse como candidato en 1910, comandando posteriormente la revuelta del Plan de San Luis Potosí.

Este movimiento fue promovido principalmente por los campesinos, quienes buscaban reivindicaciones laborales y sociales. El gobierno de Porfirio Díaz se caracterizó por estabilizar la economía del país, pero a cambio de desfavorecer a las clases más bajas.

Madero fue encarcelado y perdió ante Díaz en el proceso electoral, por lo que tuvo que exiliarse y escapar a Estados Unidos.</p>
							</div>
							<div class="news_post_image">
								<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'madera.jpg');?>">
							</div>
							<div class="news_post_quote">
								<p class="news_post_quote_text">Madero ordenó el desarme de las diversas fracciones e impulsó cambios político-sociales como el fin de la reelección y la ampliación del electorado.</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">La Revolución Maderista
Desde los Estados Unidos, Francisco I. Madero comenzó a planificar el movimiento revolucionario; el 20 de noviembre de 1910 comenzaron los levantamientos armados. El préambulo tuvo lugar en Puebla, cuando los Hermanos Serdán fueron descubiertos en sus planes de rebelión.

A la fracción opositora se unieron Francisco Pancho Villa, en los estados del norte, y Emiliano Zapata, encargado de las regiones del sur. A la par, Madero regresó al país e invadió Ciudad Juárez.

El gobierno de Porfirio Díaz se sintió presionado, por lo que removió a todo su gabinete e impulsó una nueva norma para impedir la reelección, decisión que no fue suficiente para los rebeldes, por lo que retomaron el conflicto armado e instalaron un gobierno provisional presidido por Madero.

Porfirio terminó por renunciar el 25 de mayo de 1911 escapando y exiliándose en Francia. En México, se convocaron a nuevas elecciones ante el fracaso del gobierno de Francisco León de la Barra, proceso en el que Madero se llevó la victoria. </p>

                            <iframe width="640" height="360" src="https://www.youtube.com/embed/JRKRoDjAx74" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'tierras.jpg');?>">
        </div>
        <div class="news_post_top d-flex flex-column flex-sm-row">
            
            <div class="news_post_title_container">
                <div class="news_post_title">
                    <a href="news_post.html">Revolución Méxicana Segunda Etapa</a>
                </div>
                <div class="news_post_meta">
                    <span class="news_post_author">subido por: Genaro</a></span>
                    <!-- <span>|</span> -->
                </div>
            </div>
        </div>
        <div class="news_post_text">
            <p> La Revolución Constitucionalista
Victoriano Huerta buscó estabilizar el país, aunque tenía como obstáculo al Congreso, por lo que decidió disolverlo; su gran fracaso fue no obtener el apoyo de Woodrow Wilson, presidente de Estados Unidos, quien le pidió la realización de elecciones libres sin su participación.

Fue en Coahuila donde comenzó a formarse su oposición al mando del gobernador Venustiano Carranza, a quien su congreso le otorgó poderes para organizar una fuerza militar y recuperar la democracia. A este Ejército se le conoció como el Ejército Constitucionalista, que dio inicio a una lucha revolucionaria del mismo nombre.

El país volvió a desestabilizarse. En Veracruz, las tropas de Estados Unidos ocuparon el estado en 1914, mientras el ejército de Villa dominaba el norte y el centro, el de Álvaro Obregón el oeste y el de Pablo González el este.

Huerta terminó por renunciar el 15 de julio de 1914, mientras que el Ejército Constitucionalista ocupó la capital del país y convocó a la Convención de Aguascalientes.</p>
        </div>
        <div class="news_post_image">
            <img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'villa.jpg');?>">
        </div>
        <div class="news_post_quote">
            <p class="news_post_quote_text">La guerra comenzó de nueva cuenta en México, siendo hasta 1916 cuando Carranza logró recuperar la capital y, posteriormente, el control del país</p>
        </div>

        <p class="news_post_text" style="margin-top: 59px;">Para muchos, el final de la Revolución Mexicana se dio con la proclamación de la Constitución; algunos académicos sitúan el término en 1920 y otros 20 años después, debido al tiempo que tomó que las grandes reformas lograran aplicarse.

En México persistían ocho ejércitos rebeldes con los principales líderes cayendo. Primero fue Emiliano Zapata, asesinado por una trampa desde el gobierno de Venustiano Carranza, quien terminó por ser derribado el 21 de mayo de 1920 tras ser emboscado en Puebla.

Con Álvaro Obregón en el poder, Francisco Villa también fue asesinado el 20 de julio de 1923. Las siguientes batallas fueron de orden constitucional e ideológico, como la de Plutarco Elías Calles en su gobierno contra la Iglesia Católica.

Entre otras cosas, se abolió el sistema de hacienda, se reconocieron formalmente los sindicatos y las organizaciones agrícolas, además de que comenzó el desarrollo de la industria petrolera y se pasó a un sistema económico mixto. </p>

        <iframe width="640" height="360" src="https://www.youtube.com/embed/HGmwmpJKbtM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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