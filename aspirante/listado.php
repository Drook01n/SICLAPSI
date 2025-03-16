<script Language="JavaScript">
function validar(id)
{
if(confirm('Esta seguro que desea eliminar el registro: '+id))
	window.location.href="index.php?operacion=e&id="+id;
}
</script><style type="text/css">
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
	<td colspan="4" height="21">
	<a href="index.php?operacion=n">
    <p align="right"><img src="../../imagen/nuevo.png" width="60" height="20"></a>
	</td>
	</tr>
	<tr>
		<td valign="top">
		<table class="tabla">
		<tr>
		<th width="47" height="40" align="center">
		<b>C&eacute;dula</b>		</th>
		<th height="40" align="center">
		<b>Nombre </b></th>
		<th width="76" align="center" >Estado de Nac </th>
		<th width="46" align="center" >Ciudad de Nac </th>
		<th width="89" height="40" align="center">
		<b>Operaci&oacute;n</b>		</th>
		</tr>
		
	<?php
	include("../../include/conectar.php");
	$link=conectarse();
	$result= ejecutarQuery("SELECT * FROM aspirante;");
	$i=1;
	while($fila=mysql_fetch_array($result))
		{
		if( ($i++)%2==0)
		$color="#E9E9E9";
		else
		$color="#cccccc";
		
	?>
	<p class="textTabla">
	<tr>
		<td width="47"  align="center"  height="21"><?php echo $fila["0"];?></td>
		<td height="21" align="justify" ><?php echo $fila["1"];?>, <?php echo $fila["2"];?></td>
		<td align="center" ><?php echo $fila["7"];?></td>
		<td height="21" align="center" ><?php echo $fila["8"];?></td>
		<td width="89" align="center" height="21" >
		<a href="index.php?operacion=c&id=<?php echo $fila["0"]?>">
		<img border="0" src="../../imagen/consultarMini.gif"  alt="Consultar" title="Consultar"></a>
		<a href="index.php?operacion=a&id=<?php echo $fila["0"]?>">
		<img border="0" src="../../imagen/editarMini.gif" alt="Editar" title="Editar"></a>					
		<a>				
		<img border="0" src="../../imagen/eliminarMini.gif" alt="Eliminar" title="Eliminar" onClick="validar(<?php echo $fila["0"]?>)"></a>		</td>
			</tr>
		</p>
		<?php
			}
			Desconectar($link);
		?>
				</table>
		</td>
	</tr>

		<tr>
			<td colspan="4">
			<p align="center">				
			</td>
		</tr>
</table>
</td>
</tr>
</table>
	