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
		<th width="48" align="center" height="34">
		<b>C&oacute;digo</b>		</th>
		<th width="155" align="center" height="34">
		<b>Nombre y Apellido</b>		</th>
		<th width="174" align="center" ><b>
			Status Lavoral</b></th>
		<th width="174" align="center" ><b>Regimen Lavoral</b></th>
		<th width="174" align="center" ><b>
			Duraci&oacute;n</b></th>
		<th width="70" align="center" height="34">
		<b>Operaci&oacute;n</b>		</th>
		</tr>
	<?php
	include("../../include/conectar.php");
	$link=conectarse();
	$result= ejecutarQuery("SELECT * FROM fcalle");
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
		<td width="48"  align="center"  height="21"><?php echo $fila["0"];?></td>
		<td width="155" align="justify" height="21" ><?php echo $fila["1"];?></td>
		<td width="174" height="21" align="justify" ><?php echo $fila["2"];?></td>
		<td width="174" align="justify" ><?php echo $fila["3"];?></td>
		<td width="174" height="21" align="justify" ><?php echo $fila["4"];?></td>
		<td width="70" align="center" height="21" >
		<a href="index.php?operacion=c&id=<?php echo $fila["0"]?>">
		<img border="0" src="../../imagen/consultarMini.gif" alt="Consultar" title="Consultar"></a>
		<a href="index.php?operacion=a&id=<?php echo $fila["0"]?>">
		<img border="0" src="../../imagen/editarMini.gif" alt="Editar" title="Editar"></a>					
		<a>				
		<img border="0" src="../../imagen/eliminarMini.gif"  onClick="validar(<?php echo $fila["0"]?>)" alt="Eliminar" title="Eliminar"></a>		</td>
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
	