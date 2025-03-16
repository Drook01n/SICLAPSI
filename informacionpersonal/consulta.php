<?php
	include "../../include/conectar.php";
	$link=conectarse();
	$id=$_SESSION["login"];
	$SQL="SELECT * FROM usuario WHERE login='".$id."'";
	$result=mysql_query($SQL,$link);
	$registro=mysql_fetch_array($result);
	if($registro)
	{
	$op="Consulta datos de ".$modulo;
	bitacora(date("Y-m-d"),date("h:i:s"),$op,$_SESSION["usuario"]);
?>
 <table class="tabla" width="454" height="112" border="1" cellpadding="0" cellspacing="0" bordercolor="#666666" id="table1">
		<tr>
		<th height="19" colspan="2"> <p align="center">Datos de la Cuenta de Usuario </p></th>
		</tr>
		<tr>
		  <td width="189"> Nombre de Usuario:</td>
		   <td width="259"><?php echo $registro["0"];?></td>	
		</tr>
		<tr>
		  <td>C&eacute;dula de Identidad :</td>
		   <td width="259"><?php echo $registro["2"];?></td>	
		</tr>
		<tr>
		  <td>Nombres y Apellidos  :</td>
		  <td><?php echo $registro["3"];?></td>
   </tr>
		<tr>
		  <td>Tipo de Cuenta: </td>
		  <td><?php echo $registro["4"];?></td>
   </tr>
		<tr>
		  <td>Estado de la Cuenta:</td>
		  <td><?php echo $registro["5"];?></td>
   </tr>
		
		<tr>
		   <td colspan="2"><p align="center">
		   <a href="../../index.php">
		  <img border="0" src="../../imagen/salir.png" width="60" height="20"></a></td>	
		</tr>
</table>			
	<?php
	}
	?>