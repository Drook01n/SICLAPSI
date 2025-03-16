<?php include("../../include/libreria/jsNumerica.html");
include("../../include/scriptCalendario.htm");
include("validar.php")?>

<form name="formulario" method="GET" action="index.php" onsubmit = "return validar(this)" enctype="multipart/form-data">
<table class="tabla" height="237" width="518" >
		<tr>
			<th colspan="2" align="center">Registro de Nuevo Jefes de Calle</th>
		</tr>
		<tr>
		   <td width="189" height="47">
		             Nombres y Apellidos</td>	
		   <td width="317" >
          <input name="T1" type="text" id="T1" size="40"></td>	
		</tr>
		<tr>
		 <td width="189" height="47">
		             Status Laboral </td>	
		   <td width="317" >
		   	<input name="T1" type="text" id="T1" size="40"></td>
    	</tr>
			<tr>
			  <td height="21">Regimen de duracion</td>
			  <td ><select name="T3" id="T3">
			    <option value="Permanete">Permanete</option>
			    <option value="Anual">Anual</option>
			    </select>
			  </td>
    </tr>
			<tr>
		  <td height="25">Duraci&oacute;n:</td>
		  <td ><label>
		    <input name="T4" type="text" id="T4" size="5" />
		  </label></td>
			</tr>

		<tr>
		   <td colspan="2"><p align="center">
		   <input type="submit" value="Guardar" name="operacion" >
	       <input type="reset" value="Restablecer" name="B2" ></td>	
		</tr>
</table>			
</form>
