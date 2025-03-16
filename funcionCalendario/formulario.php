<html>
<head>
</head>

<BODY style="font-family: Verdana">
<p align="center"><b>Selección de fecha en calendarios emergentes</b></p>

<?php include("scriptCalendario.htm");?>


<BODY style="font-family: Verdana">
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
<form name="formulario" method="post" action="popupcalsample.html">
	<p>Fecha de inicio: <input type="text" name="T1" size="20">  
	<a href="javascript:show_calendar('formulario.T1');" onMouseOver="window.status='gggg fecha'; overlib('Hola Pulsa para elegir fecha del mes actual en el calendario emergente.'); return true;" onMouseOut="window.status=''; nd(); return true;">
    <img src="show-calendar.gif" width=24 height=22 border=0></a>
	</p>
	<p><input type="submit" value="Enviar" name="B1"><input type="reset"
	value="Borrar" name="B2"></p>
</form>
