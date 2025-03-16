<?php
include("validar.php");
	if(!isset($_REQUEST["T1"]) || !isset($_REQUEST["T2"]))
	{
	$t1=date("Y-m-d");
	$t2=date("Y-m-d");
	}
	else
	{
	$t1=$_REQUEST["T1"];
	$t2=$_REQUEST["T2"];
	}
	$sql="SELECT * FROM bitacora where usuario='".$_SESSION["usuario"]."' and fecha>='".$t1."' and fecha<='".$t2."'";
	
?>
<style type="text/css">
<!--
body {
	margin-top: 0px;
	margin-left: 0px;
}
-->
</style>
<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0">
<tr>
<td width="100%" valign="top" align="left">
<table width="500"  height="325" >
	<tr>
		<form name="formulario" method="get" action="index.php" onsubmit = "return validar(this)">
	<td width="169" >
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
	<div align="center">
	  <input name="T1" type="text" id="T1" size="15" readonly="readonly" value="<?php echo $t1;?>" />
	  <a href="javascript:show_calendar('formulario.T1');" 
					onmouseover="window.status='Elige fecha'; 
					overlib('Pulsa para seleccionar la fecha.'); return true;" 
					onmouseout="window.status=''; nd(); return true;"> <img src="../../imagen/calendarioMin.gif" alt="q" width="16" height="16" border="0" /></a>	  </div></td>
	<td width="153" ><div align="center">
	  <input name="T2" type="text" id="T2" size="15" readonly="readonly" value="<?php echo $t2;?>"/>
	  <a href="javascript:show_calendar('formulario.T2');" 
					onmouseover="window.status='Elige fecha'; 
					overlib('Pulsa para seleccionar la fecha.'); return true;" 
					onmouseout="window.status=''; nd(); return true;"> <img src="../../imagen/calendarioMin.gif" alt="q" width="16" height="16" border="0" /></a>
	  </div></td>
	<td width="162" height="21">      <p align="center"><a href="index.php?operacion=n">
	<input type="submit" name="consultar" value="Consultar" />
	</a>      	</td>
		</form>
	</tr>
	<tr>
		<td valign="top" colspan="3">
		<table class="tabla">
		<tr>
		<th width="62" align="center" height="34">
		<b>N&ordm; Registro </b>		</th>
		<th width="40" align="center" height="34">
		<b>Fecha</b></th>
		<th width="82" align="center" ><b>
			Hora en Servidor </b></th>
		<th width="232" align="center" ><b>Operaci&oacute;n Realizada </b></th>
		<th width="52" height="34" align="center" ><b>
			Usuario</b></th>
		</tr>
	<?php
	include("../../include/conectar.php");
	$link=conectarse();
	$result= ejecutarQuery($sql);
	$i=1;
	while($fila=mysql_fetch_array($result))
		{
		
	?>
	<p class="textTabla">
	<tr>
		<td width="62"  align="center"  height="21"><?php echo $fila["0"];?></td>
		<td width="40" align="justify" height="21" ><?php echo $fila["1"];?></td>
		<td width="82" height="21" align="justify" ><?php echo $fila["2"];?></td>
		<td width="232" align="justify" ><?php echo $fila["3"];?></td>
		<td height="21" align="justify" ><?php echo $fila["4"];?></td>
		</tr>
		</p>
		<?php
			}
			Desconectar($link);
		?>
		  </table>		</td>
	</tr>

		<tr>
			<td colspan="4">
			<p align="center">			</td>
		</tr>
</table>
</td>
</tr>
</table>
	