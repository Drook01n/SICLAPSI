<?php
include "../../include/conectar.php";
include("../../include/libreria/jsNumerica.html");
include("validar.php");

	$link=conectarse();
	$id=$_SESSION["login"];
	$SQL="SELECT * FROM usuario WHERE login='".$id."'";
	$result=mysql_query($SQL,$link);
	$registro=mysql_fetch_array($result);
	if($registro)
	{
			

?>

<form method="POST" name="formulario" action="index.php" onsubmit = "return validar(this)" enctype="multipart/form-data">
      	<table  class="tabla" height="112" width="510"  cellpadding="0">
      			<tr>
      			  <th colspan="2" align="center">Actualizar Datos de Contrase&ntilde;a </th>
		  </tr>
      			<tr>
      			  <td width="179"> Contrase&ntilde;a Actual:</td>
      			  <td width="323">
		   			<input type="hidden" name="idV" size="20" value="<?php echo $registro["0"];?>">
		   			
		   			<input name="T1" type="password" id="T1" size="15" /></td>	
		</tr>
		<tr>
		  <td>Nueva Contrase&ntilde;a:</td>
		  <td ><input name="T6" type="password" id="T6" size="15" />
		    (Maximo 15 caracteres)</td>
		</tr>
		<tr>
		  <td>Confirme contrase&ntilde;a: </td>
		  <td ><label>
            <input name="T7" type="password" id="T7" size="15" />
		    (Maximo 15 caracteres)</label></td>
		</tr>
		<tr>
		   <td colspan="2">


				<p align="center">
				<input type="submit" value="Actualizar" name="operacion">
				</p>
		   <p align="center">		   </td>	
		</tr>
		</table>			
</form>
	<?php
	}	
	
	?>
      		