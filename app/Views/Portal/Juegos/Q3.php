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
<html><head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<script language="JavaScript">

var alfab="abcdefghijklmnñopqrstuvxyz"
var nump=18
var nrp=4
function corrixe(){
var acertos=0
var sol=""
fiestrar=open("","novar","width=600,height=700,scrollbars")
fiestrar.document.write("<table border='0' width='100%' cellspacing='0' cellpadding='4' bgcolor='#FFFFF2'><tr><td><p align='center'>")
for(i=1;i<=nump;i++){var senresp=true 
	for(j=1;j<=nrp;j++){
		if(eval("document.test.resp"+i+"["+(j-1)+"].checked")==true){
			sol+=alfab.substring(j-1,j);senresp=false;break
		}
}
if(senresp==true){sol+="-"}
}
var tempo= new Date()
fiestrar.document.write("<br>Hora: "+tempo.getHours()+":"+tempo.getMinutes())
fiestrar.document.write("<br>Fecha: "+tempo.getDate()+"/"+eval(tempo.getMonth()+1)+"/"+tempo.getFullYear())
fiestrar.document.write("<p align='center'><table>")
fiestrar.document.write("<tr><td bgcolor='#ffb606' colspan='4' align='center' style='font-weight:bold'><font size='5'>Resultados</font><p></td></tr>")
	fiestrar.document.write("<tr><td width='33' bgcolor='#43a5f2'>"+
"<p align='center'style='font-weight:bold'>Preguntas</td><td width='35' bgcolor='#21f604' align='center' style='font-weight:bold'>"+
"Solución</td><td width='35' bgcolor='#f24343' align='center' style='font-weight:bold'>Respuestas</td>"+
"<td width='35' bgcolor='#bdbdbd'style='font-weight:bold'><p align='center'>Resultados</td></tr>")
for(i=1;i<=sol.length;i++){
	resposta=document.test.tras.value.substring(i-1,i)
	solucion=sol.substring(i-1,i)	
	if(resposta==solucion){
	acertos+=1
	fiestrar.document.write("<tr><td align='center'>"+i+
	"</td><td align='center'>"+resposta+"</td><td align='center'>"+solucion+
	"</td><td align='center'><font color='#009933'>Correcta</font></td></tr>")
	}
	else{
	fiestrar.document.write("<tr><td align='center'>"+i+"</td><td align='center'>"+resposta+
	"</td><td align='center'>"+solucion+"</td><td align='center'><font color='#FF0000'>Incorrecta</font></td></tr>")
	}
}
nota=10/nump*acertos;
if(Math.floor(nota)!=Math.ceil(nota)){cadea=""+nota;for(var i=0;i<=cadea.length;i++){
if(cadea.charAt(i)=="."){nota=cadea.substring(0,i+3);break;}}}
fiestrar.document.write("<tr><td colspan='4' align='center' style='font-weight:bold'>Aciertos: "+acertos+" de "+nump+"</td></tr>")
fiestrar.document.write("<tr><td colspan='4' align='center' style='font-weight:bold'>Calificación: "+nota+"</td></tr>")
fiestrar.document.write("</td></tr><tr><td colspan='4' align='center'><p><form><input type='button' value='Cerrar' name='pecharf' onClick='window.close()' style='font-weight:bold': #FFCC66'></form></td></tr></table></td></tr></table>")
fiestrar.document.write("</table>")
fiestrar.document.close()
}

</script></head>
<body>
<center>
<form name="test">
<table width="50%"><tbody><tr><td align="center" bgcolor=#ffb606><table>
<tbody><tr>
<td>
<h1 style="color:black;">Cuestionario</h1></td>
</tr></tbody></table></td></tr>
<tr bgcolor=#cccccc><td>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">1. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Cuál fue una causa del inicio de la Revolución?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp1"></td><td><font color="000000">La independencia de nuestro país </td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp1"></td><td><font color="000000">Porfirio Díaz declaró en una entrevista que México estaba listo para el cambio presidencial</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp1"></td><td><font color="000000">Los mexicanos querían otro partido político</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp1"></td><td><font color="000000">Pancho Villa quería ser presidente</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">2. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Cuál era el lema del Partido Nacional Antirreeleccionista?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp2"></td><td><font color="000000">Voto a voto</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp2"></td><td><font color="000000">Tierra y Libertad</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp2"></td><td><font color="000000">Sufragio Efectivo, No reelección.</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp2"></td><td><font color="000000">La tierra es para quien la trabaja.</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">3. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Cómo se llama el plan que promulgó Francisco I. Madero?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp3"></td><td><font color="000000">Plan de Ayala</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp3"></td><td><font color="000000">Plan de Guadalupe</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp3"></td><td><font color="000000">Plan de Ayutla</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp3"></td><td><font color="000000">Plan de San Luis</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">4. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Cuál es el nombre de los tratados que pusieron fin a la presidencia de Díaz?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp4"></td><td><font color="000000">Tratados de Ciudad Juárez</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp4"></td><td><font color="000000">Tratados de Renuncia</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp4"></td><td><font color="000000">Tratados de Guadalupe</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp4"></td><td><font color="000000">Tratados Guadalupe-Hidalgo</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">5. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Quién peleaba por tierra y libertad?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp5"></td><td><font color="000000">Venustiano Carranza</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp5"></td><td><font color="000000">Emiliano Zapata</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp5"></td><td><font color="000000">Pancho Villa</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp5"></td><td><font color="000000">Francisco I Madero</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">6. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Al morir Francisco I. Madero ¿Quién quedó al frente del gobierno?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp6"></td><td><font color="000000">Victoriano Huerta</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp6"></td><td><font color="000000">Félix Díaz</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp6"></td><td><font color="000000">Emiliano Zapata</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp6"></td><td><font color="000000">Francisco Villa</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">7. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Redactó el Plan de Guadalupe con el fin de desconocer el gobierno de Huerta.</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp7"></td><td><font color="000000">Venustiano Carranza</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp7"></td><td><font color="000000">Emiliano Zapata</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp7"></td><td><font color="000000">Álvaro Obregón</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp7"></td><td><font color="000000">Plutarco Elías Calles</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">8. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Fue una de las causas del estallido de la Revolución mexicana</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp8"></td><td><font color="000000">El reparto equitativo de tierras durante el gobierno de Porfirio Díaz</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp8"></td><td><font color="000000">La toma de poder por Álvaro Obregón en 1924</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp8"></td><td><font color="000000">La creación de la primera constitución en México en 1917</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp8"></td><td><font color="000000">La larga dictadura y corrupción de Porfirio Díaz</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">9. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Cuál es la fecha en que se inició la Revolución mexicana?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp9"></td><td><font color="000000">16 de septiembre 1810</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp9"></td><td><font color="000000">20 de noviembre de 1810</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp9"></td><td><font color="000000">20 de noviembre de 1910</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp9"></td><td><font color="000000">16 de noviembre de 1910</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">10. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Quién era presidente de México cuando estalló la Revolución? </td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp10"></td><td><font color="000000">Benito Juárez </td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp10"></td><td><font color="000000">Antonio López de Santa Anna</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp10"></td><td><font color="000000">Porfirio Díaz </td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp10"></td><td><font color="000000">Francisco I Madero</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">11. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Fueron personajes de la Revolución Mexicana?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp11"></td><td><font color="000000">Hidalgo, Morelos</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp11"></td><td><font color="000000">Emiliano Zapata, Francisco I Madero</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp11"></td><td><font color="000000">Pancho Villa,  Vicente Guerrero</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp11"></td><td><font color="000000">Francisco I Madero, Iturbide</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">12. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">La Revolución Mexicana derrotó a Porfirio Díaz, sin embargo la revolución continuó porque...</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp12"></td><td><font color="000000">Los líderes o presidentes que llegaron luego de Porfirio Díaz no lograron beneficiar a los campesinos</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp12"></td><td><font color="000000">El apoyo de Estados Unidos, interfería en las decisiones del país</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp12"></td><td><font color="000000">La división de los revolucionarios nos les permitían ponerse de acuerdo</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp12"></td><td><font color="000000">Les gustaba estar en guerra</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">13. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Qué provocó el plan de San Luis?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp13"></td><td><font color="000000">Que Francisco I Madero gobernaba el país</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp13"></td><td><font color="000000">El sufragio efectivo no reelección</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp13"></td><td><font color="000000">Las elecciones de 1910</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp13"></td><td><font color="000000">El levantamiento de la población en 20 de Noviembre de 1910 y desconocimiento de Porfirio Díaz como presidente</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">14. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Qué es la Revolución Mexicana?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp14"></td><td><font color="000000">Fue un conflicto armado que inició en 1910, como consecuencia del descontento popular hacia la dictadura de Porfirio Díaz.</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp14"></td><td><font color="000000">Fue un movimiento en el cual el cura Miguel Hidalgo y Costilla tocó las campanas de la iglesia del pueblo de Dolores Hidalgo, llamando a la gente a que se uniera a su lucha contra el dominio español.</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp14"></td><td><font color="000000">Ninguna de las anteriores.</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">15. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Como se llamaban aquellos quienes en el gabinete de Díaz, incluyeron ideas progresistas?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp15"></td><td><font color="000000">Los profesores</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp15"></td><td><font color="000000">Los cientificos</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp15"></td><td><font color="000000">Los poderosos </td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">16. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Cual era el principal objetivo del plan de Tuxtepec?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp16"></td><td><font color="000000">Mantener el plan de la noria</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp16"></td><td><font color="000000">Derrocar el Gobierno De Lerdo de Tejada</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp16"></td><td><font color="000000">Derrocar al Gobierno de Juárez</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">17. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Que movimientos en contra del gobierno de Díaz fueron importantes pero reprimidos?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp17"></td><td><font color="000000">Positivismo</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp17"></td><td><font color="000000">Revolución obrera</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp17"></td><td><font color="000000">Rio blanco y Cananea </td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">18. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿En que año Porfirio Díaz sale de la presidencia?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp18"></td><td><font color="000000">1876</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp18"></td><td><font color="000000">1922</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp18"></td><td><font color="000000">1238</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp18"></td><td><font color="000000">1911</td></tr></tbody></table>
</td></tr>
<tr><td height="50" align="center"><input type="hidden" value="bcdabaadccbadabbcd" name="tras">
<input style="font-weight:bold" type="button" value="Puntuación" name="resultados" onclick="corrixe()">
<input style="font-weight:bold" type="reset" value="Limpiar" name="limpar"></td></tr>
</tbody></table></form>
</center>

</body></html>
		
	<!-- Footer -->

<?= $this->endSection('contenido');?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection('js');?> 