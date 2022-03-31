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
var nump=20
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
	"</td><td align='center'>"+solucion+"</td><td align='center'><font color='#FF0000'>Incorreta</font></td></tr>")
	}
}
nota=10/nump*acertos;
if(Math.floor(nota)!=Math.ceil(nota)){cadea=""+nota;for(var i=0;i<=cadea.length;i++){
if(cadea.charAt(i)=="."){nota=cadea.substring(0,i+3);break;}}}
fiestrar.document.write("<tr><td colspan='4' align='center' style='font-weight:bold'>Aciertos: "+acertos+" de "+nump+"</td></tr>")
fiestrar.document.write("<tr><td colspan='4' align='center' style='font-weight:bold'>Nota: "+nota+"</td></tr>")
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
<table><tbody><tr><td><font size="4" color="000000" style="font-weight:bold">1. </font></td><td  width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Que es una guerra civil?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp1"></td><td><font color="000000">Conflicto en que intervienen varias civilizaciones</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp1"></td><td><font color="000000">Conflicto interno de un país</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp1"></td><td><font color="000000">Guerra que se dio durante la civilización Olmeca</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp1"></td><td><font color="000000">Enfrentamiento bélico entre 2 países</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">2. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Que es una revolución?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp2"></td><td><font color="000000">Conflicto entre varios países </td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp2"></td><td><font color="000000">Conflicto armado a nivel Mundial </td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp2"></td><td><font color="000000">Es un cambio Social</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp2"></td><td><font color="000000">Es un problema diplomático entre un país y sus colonias</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">3. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Que guerra civil comenzó en el 2011?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp3"></td><td><font color="000000">La guerra civil de Venezuela</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp3"></td><td><font color="000000">La guerra civil en Argentina</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp3"></td><td><font color="000000">La guerra civil de la dictadura cubana</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp3"></td><td><font color="000000">La guerra Civil de siria
</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">4. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Quien es el presidente de Siria Actualmente?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp4"></td><td><font color="000000">Lucí al Atassi</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp4"></td><td><font color="000000">Hafez al Asad</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp4"></td><td><font color="000000">Abdel Halim Jadam
</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp4"></td><td><font color="000000">Bashar al Asad</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">5. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Que es un refugiado?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp5"></td><td><font color="000000">Persona que se ve obligado a salir de su país de residencia debido a que es inhabitable </td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp5"></td><td><font color="000000">Personas que llegan a un país para conocer los conflictos y estudiarlos
</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp5"></td><td><font color="000000">Personas que atacan por sorpresa</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp5"></td><td><font color="000000">Persona que se refugia en su país por miedo
</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">6. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Cuáles son las Organizaciones terroristas de SIRIA?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp6"></td><td><font color="000000">Chiita y Suníes </td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp6"></td><td><font color="000000">Al Qaeda e ISIS</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp6"></td><td><font color="000000">El talibán</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp6"></td><td><font color="000000">La FARC</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">7. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Que es la ilustración?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp7"></td><td><font color="000000">Movimiento que realiza para ilustrar imágenes en el marketing</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp7"></td><td><font color="000000">Es el nombre correcto cuando nos referimos a dibujos o ilustraciones</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp7"></td><td><font color="000000">Movimiento intelectual que surge en Europa el siglo XVIII</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp7"></td><td><font color="000000">Movimiento cultural del siglo XIX que surge en Asia</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">8. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Que es la enciclopedia?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp8"></td><td><font color="000000">Libro que habla sobre las guerras que ocurrieron durante el feudalismo de la Edad Media</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp8"></td><td><font color="000000">Es La obra realizada por Denis Diderot y Jean le Rond d Alembert durante el siglo XVIII</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp8"></td><td><font color="000000">Es un libro con información relativa a la revolución industrial</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp8"></td><td><font color="000000">Es un conjunto de 25 tomos en orden alfabético realizada durante el siglo XV</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">9. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿En el Antiguo Régimen quien era el dirigente político?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp9"></td><td><font color="000000">El súbdito</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp9"></td><td><font color="000000">El señor feudal</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp9"></td><td><font color="000000">Federico II el grande</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp9"></td><td><font color="000000">El Rey o Monarca </td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">10. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿A quien se le llamaba burgueses?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp10"></td><td><font color="000000">Grupo social de prestamistas ,Comerciantes artesanos y profesionistas </td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp10"></td><td><font color="000000">Grupo de personas que apoyaban ala iglesia</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp10"></td><td><font color="000000">Grupo Social Que apoyaba tanto al clero como actividades políticas e intelectuales</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp10"></td><td><font color="000000">Grupo de ciudadanos que participaban en la toma de decisiones políticas del siglo XVII
</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">11. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">A que se refiere Historia con mayúscula</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp11"></td><td><font color="000000">Es el devenir histórico</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp11"></td><td><font color="000000">Es la ciencia social que estudia el pasado del hombre</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp11"></td><td><font color="000000">Estudia la fisiología e historia de todos los seres vivos y su pasado</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp11"></td><td><font color="000000">Es la ciencia que se encarga de de realizar diferentes estudios fisiológicos</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">12. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Es considerado el padre de la Historia</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp12"></td><td><font color="000000">Herodoto de Halicarnaso</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp12"></td><td><font color="000000">Euripides de Leon</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp12"></td><td><font color="000000">Teófilo de Montenegro</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp12"></td><td><font color="000000">Rousseau</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">13. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Forma de gobierno absolutista influenciada por las ideas de la ilustración</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp13"></td><td><font color="000000">Absolutismo ilustrado</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp13"></td><td><font color="000000">Despotismo medieval</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp13"></td><td><font color="000000">Despotismo ilustrado</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp13"></td><td><font color="000000">Monarquías absolutas liberales</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">14. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Fecha de independencia de las 13 colonias de Norteamérica</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp14"></td><td><font color="000000">4 de julio de 1776</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp14"></td><td><font color="000000">14 de julio de 1789</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp14"></td><td><font color="000000">2 de julio de 1876</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp14"></td><td><font color="000000">4 de enero de 1776</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">15. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Nombre del monarca inglés que aumentó los impuestos a las colonias inglesa</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp15"></td><td><font color="000000">Guillermo II</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp15"></td><td><font color="000000">Luis II</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp15"></td><td><font color="000000">Jorge III</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp15"></td><td><font color="000000">Jorge IV</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">16. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Nombre del padre del liberalismo económico</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp16"></td><td><font color="000000">Montesquieu</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp16"></td><td><font color="000000">Adam Smith</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp16"></td><td><font color="000000">John Locke</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp16"></td><td><font color="000000">Rousseau</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">17. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Que fenómeno influyó en las causas de la independencia de las 13 colonias</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp17"></td><td><font color="000000">La peste negra</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp17"></td><td><font color="000000">La guerra de Siria</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp17"></td><td><font color="000000">La ilustración </td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp17"></td><td><font color="000000">La Revolución industrial</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">18. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Que región de las 13 colonias apoyaba y requería el trabajo con esclavos traídos de África</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp18"></td><td><font color="000000">La parte Norte de las 13 colonias</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp18"></td><td><font color="000000">La parte central de las 13 colonias</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp18"></td><td><font color="000000">La parte sur de las 13 colonias</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp18"></td><td><font color="000000">Todos los colonos que vivían dentro de lo que fueron de las 13 colonias de Norteamérica</td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">19. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">¿Que materiales utilizaban en la primera revolución industrial?</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp19"></td><td><font color="000000">Carbón y vapor</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp19"></td><td><font color="000000">Electricidad y petroleo</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp19"></td><td><font color="000000">Petróleo y gas</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp19"></td><td><font color="000000">Vapor y gas </td></tr></tbody></table>
<table><tbody><tr><td><font size="4" color="#000000" style="font-weight:bold">20. </font></td><td width="100%" bgcolor="#F2FFF2" style="font-weight:bold; color:black">Menciona cuál era el único material capaz de derrotar a superman el hombre de acero</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">a) </td><td><input type="radio" name="resp20"></td><td><font color="000000">Acerina</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">b) </td><td><input type="radio" name="resp20"></td><td><font color="000000">Helio</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">c) </td><td><input type="radio" name="resp20"></td><td><font color="000000">Criptonita</td></tr></tbody></table>
<table><tbody><tr><td width="25">&nbsp;</td><td><font color="000000">d) </td><td><input type="radio" name="resp20"></td><td><font color="000000">Dinamita</td></tr></tbody></table>
</td></tr>
<tr><td height="50" align="center"><input type="hidden" value="bcddabcbdabacacbccac" name="tras">
<input style="font-weight:bold" type="button" value="Puntuación" name="resultados" onclick="corrixe()">
<input style="font-weight:bold" type="reset" value="Limpiar" name="limpar"></td></tr>
</tbody></table></form>
</center>

</body></html>
		&nbsp;
		<!-- Footer -->

<?= $this->endSection('contenido');?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection('js');?> 