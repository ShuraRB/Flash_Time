<?= $this->extend("Plantillas/Portal_base") ?>

<!-- CSS-->
<?= $this->section("css")?>
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'contact_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS.'contact_responsive.css');?>">
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

	<br>
	<br>
	<iframe id="playframe" src="https://www.digipuzzle.net/digipuzzle/wordsearch/puzzles/kids_greeks_es.htm?language=spanish" frameborder="0" scrolling="no" width="100%" height="576"></iframe>
		&nbsp;
	<iframe id="playframe" src="https://www.digipuzzle.net/digipuzzle/wordsearch/puzzles/kids_romans_es.htm?language=spanish" frameborder="0" scrolling="no" width="100%" height="576"></iframe>
	<br></br>
	<br>
	
	
		<!-- Footer -->

<?= $this->endSection('contenido');?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection('js');?> 