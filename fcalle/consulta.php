<?php
	include "../../include/conectar.php";
	$link=conectarse();
	$id=$_GET["id"];
	$SQL="SELECT * FROM fcalle WHERE idCarrera=".$id;
	$result=mysql_query($SQL,$link);
	$registro=mysql_fetch_array($result);
	if($registro)
	{
	$op="Consulta datos de ".$modulo;
	bitacora(date("Y-m-d"),date("h:i:s"),$op,$_SESSION["usuario"]);
?>
 <table class="tabla" width="448" height="112" border="1" cellpadding="0" cellspacing="0" bordercolor="#666666" id="table1">
		<tr>
		<th height="19" colspan="2"> <p align="center">Datos del Jefe(a) de Calle</p></th>
		</tr>
		<tr>
		   <td width="118"><b>Código:</b></td>	
		   <td width="324"><?php echo $registro["0"];?></td>	
		</tr>
		<tr>
		   <td width="118">Nombres y Apellidos </td>	
		   <td width="324"><?php echo $registro["1"];?></td>	
		</tr>
		<tr>
		  <td>Status laboral</td>
		  <td><?php echo $registro["2"];?></td>
   </tr>
		<tr>
		  <td>Regimen Laboral</td>
		  <td><?php echo $registro["3"];?></td>
   </tr>
		<tr>
		  <td>Duracion:</td>
		  <td><?php echo $registro["4"];?></td>
		  </tr>
		
		<tr>
		   <td colspan="2"><p align="center">
		   <a href="index.php">
		  <img border="0" src="../../imagen/salir.png" width="60" height="20"></a></td>	
		</tr>
</table>			
	<?php
	}
	?>