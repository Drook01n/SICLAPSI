<?php
include "../../include/conectar.php";
include("../../include/libreria/jsNumerica.html");
include("validar.php");

	$link=conectarse();
	$id=$_GET["id"];
	$SQL="SELECT * FROM fcalle WHERE idCarrera='".$id."'";
	$result=mysql_query($SQL,$link);
	$registro=mysql_fetch_array($result);
	if($registro)
	{
			

?>

<form method="POST" name="formulario" action="index.php" onsubmit = "return validar(this)" enctype="multipart/form-data">
      	<table  class="tabla" height="112" width="400"  cellpadding="0">
      			<tr>
      			  <th colspan="2" align="center">Actualizar Datos </th>
		  </tr>
      			<tr>
		   <td width="535">Código:</td>	
		   <td width="392">
		   		
		   			<input name="id" type="text" id="id" value="<?php echo $registro['0'];?>" readonly size="20" /></td>	
		</tr>
		<tr>
		   <td width="535">F. de calle</td>	
		   <td width="392">
		             <input name="T1" type="text" id="T1" value="<?php echo $registro["1"];?>" size="40"></td>	
		</tr>
		<tr>
		  <td>Status lavoral</td>
		  <td><select name="T2" id="T2">
            <option selected="selected" value="<?php echo $registro["2"];?>"><?php echo $registro["2"];?></option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
          </select></td>
		  </tr>
		<tr>
		  <td>Regimen Lavoral</td>
		  <td><select name="T3" id="T3">
            <option selected="selected" value="<?php echo $registro["3"];?>"><?php echo $registro["3"];?></option>
            <option value="PERMANENTE">Permanente</option>
            <option value="ANUAL">Anual</option>
          </select></td>
		  </tr>
		<tr>
		  <td>Duracion:</td>
		  <td><input name="T4" type="text" id="T4" value="<?php echo $registro["4"];?>" size="10" /></td>
		  </tr>
		<tr>
		   <td width="535" colspan="2">


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
      		