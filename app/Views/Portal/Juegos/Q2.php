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

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<script language="JavaScript">

var alfab="abcdefghijklmnñopqrstuvxyz"
var nump=16
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
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">1. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Son los 3 horizontes culturales de Mesoamérica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp1"></td><td><font color="000000">Clásico, Posclásico y Preclásico</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp1"></td><td><font color="000000">Lítico, Protoneolítico y Prehistoria</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp1"></td><td><font color="000000">Preclásico, Caucásico y Posclásico</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp1"></td><td><font color="000000">Preclásico, Epiclásico y Postviejo</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">2. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">La invención de la agricultura se dio durante este periodo.</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp2"></td><td><font color="000000">Epiclásico</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp2"></td><td><font color="000000">Clásico</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp2"></td><td><font color="000000">Preclásico</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp2"></td><td><font color="000000">Posclásico</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">3. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Significa “a la mitad de América” y abarca el centro y sur de México y parte de Centroamérica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp3"></td><td><font color="000000">Medioamérica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp3"></td><td><font color="000000">Mesoamérica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp3"></td><td><font color="000000">Oasisamérica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp3"></td><td><font color="000000">Aridoamérica</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">4. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Se caracterizó por albergar grupos nómadas y seminómadas dedicados a la caza y recolección de frutos y semillas</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp4"></td><td><font color="000000">Mesoamérica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp4"></td><td><font color="000000">Oasisamérica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp4"></td><td><font color="000000">Norteamérica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp4"></td><td><font color="000000">Aridoamérica</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">5. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Las culturas maya, azteca, olmeca, tolteca, zapoteca, mixteca, teotihuacana... entre otras se localizaban en la zona geográfica denominada.</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp5"></td><td><font color="000000">Sudamérica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp5"></td><td><font color="000000">Aridoamérica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp5"></td><td><font color="000000">Oasisamérica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp5"></td><td><font color="000000">Mesoamérica</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">6. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">El principal alimento de las culturas prehispánicas fue.</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp6"></td><td><font color="000000">Chile</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp6"></td><td><font color="000000">Maíz</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp6"></td><td><font color="000000">Amaranto</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp6"></td><td><font color="000000">Chocolate</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">7. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Cuáles son las tres aéreas culturas del México antiguo?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp7"></td><td><font color="000000">Mesoamérica, Aridoamérica y Oasisamérica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp7"></td><td><font color="000000">Mesoamérica, Oasisamérica y México</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp7"></td><td><font color="000000">Mesoamérica, América y Oasisamérica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp7"></td><td><font color="000000">Mesoamérica, América y México</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">8. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Las culturas de Mesoamérica eran</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp8"></td><td><font color="000000">No eran religiosas</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp8"></td><td><font color="000000">Monoteístas</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp8"></td><td><font color="000000">Politeístas</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp8"></td><td><font color="000000">Ninguna de las anteriores</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">9. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Principal actividad económica de Mesoamerica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp9"></td><td><font color="000000">Agricultura</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp9"></td><td><font color="000000">Agricultura de temporal</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp9"></td><td><font color="000000">Cazadores-recolectores</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp9"></td><td><font color="000000">Ninguna de las anteriores</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">10. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Principal actividad económica de Aridoamerica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp10"></td><td><font color="000000">Agricultura</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp10"></td><td><font color="000000">Agricultura de temporal</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp10"></td><td><font color="000000">Cazadores-recolectores</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp10"></td><td><font color="000000">Ninguna de las anteriores</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">11. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Indígena</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp11"></td><td><font color="000000">Existen fuera de su tierra</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp11"></td><td><font color="000000">Persona nativa, originaria de una región.</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp11"></td><td><font color="000000">Cumplen un ritual para una ceremonia</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp11"></td><td><font color="000000">Ninguna de las anteriores</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">12. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Conjunto de personas que viven en una comunidad o aldea, tienen sus propias costumbres y tradiciones.</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp12"></td><td><font color="000000">Población Indígena</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp12"></td><td><font color="000000">País indígena</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp12"></td><td><font color="000000">Aldea Indígena</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp12"></td><td><font color="000000">Ninguna de las anteriores</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">13. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Qué dificultades ha traído en México la diversidad étnica, religiosa y lingüística? </td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp13"></td><td><font color="000000">Unión y fraternidad</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp13"></td><td><font color="000000">Trato justo y equitativo para todos</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp13"></td><td><font color="000000">Desigualdad, racismo y exclusión</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp13"></td><td><font color="000000">Ninguna de las anteriores</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">14. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Estoda distinción, exclusión o restricción que obstaculice, restrinja o anule el ejercicio y goce de los derechos humanos y libertades de una persona o un colectivo social. </td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp14"></td><td><font color="000000">Marginación</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp14"></td><td><font color="000000">Explotación</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp14"></td><td><font color="000000">Pobreza</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp14"></td><td><font color="000000">Discriminación</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">15. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Es la lengua indígena con más hablantes en México.</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp15"></td><td><font color="000000">Purépecha</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp15"></td><td><font color="000000">Maya</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp15"></td><td><font color="000000">Náhuatl</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp15"></td><td><font color="000000">Tsotsil</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">16. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Gracias a los grupos indígenas México es un país.</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp16"></td><td><font color="000000">Grande</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp16"></td><td><font color="000000">Homegéneo</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp16"></td><td><font color="000000">Pobre</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp16"></td><td><font color="000000">Multicultural</td></tr></tbody></table>
</td></tr>
<tr><td height="50" align="center"><input type="hidden" value="acbddbacacbacdcd" name="tras">
<input type="button" value="Puntuación" name="resultados" onclick="corrixe()" style="background-color: #FFCC66">
<input type="reset" value="Limpiar" name="limpar" style="background-color: #FFCC66"></td></tr>
</tbody></table></form>

</body></html>

		<!-- Footer -->

<?= $this->endSection('contenido');?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection('js');?> 