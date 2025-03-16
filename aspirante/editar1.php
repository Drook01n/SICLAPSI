<?php
include "../../include/conectar.php";
include("../../include/libreria/jsNumerica.html");
include("validar.php");
include("../../include/scriptCalendario.htm");

	$link=conectarse();
	$id=$_GET["id"];
		$SQL="SELECT * FROM aspirante WHERE idAspirante='".$id."'";
	$result=mysql_query($SQL,$link);
	$registro=mysql_fetch_array($result);
	if($registro)
	{
			

?>

<form method="POST" name="formulario" action="index.php" onsubmit = "return validar(this)" enctype="multipart/form-data">
<table class="tabla" height="298" width="453" >
		<tr>
			<th height="21" colspan="3" align="center">Registro de Beneficiario</th>
		</tr>
		<tr>
		  <td height="21">C&eacute;dula de identidad:</td>
		  <td ><div align="center">Nombres</div></td>
          <td ><div align="center">Apellidos</div></td>
	</tr>
		<tr>
	      <td width="137" height="29"><input name="T1" type="text" id="T1"  value="<?php echo $registro["0"];?>" size="20" />
		  <input name="idV" type="hidden"   value="<?php echo $registro["0"];?>"</td>	
	      <td ><input name="T2" type="text" id="T2" value="<?php echo $registro["1"];?>"  size="25" /></td>	
		  <td width="150" ><input name="T3" type="text" id="T3" value="<?php echo $registro["2"];?>"  size="25" /></td>
		</tr>
		<tr>
		  <td height="21"><div align="center">Sexo</div></td>
		  <td ><div align="center">Estado Civil </div></td>
          <td ><div align="center">Fecha de Nacimiento </div></td>
	</tr>
		<tr>
		  <td height="31"><label>
		    <div align="center">
		      <select name="T4" id="T4">
	     	  	  <option value="<?php echo $registro["3"];?>" selected="selected"><?php echo $registro["3"];?></option>
		        <option value="MASCULINO">MASCULINO</option>
		        <option value="FEMENINO">FEMENINO</option>
	          </select>
	        </div>
		  </label></td>
		  <td ><div align="center">
		    <select name="T5" id="T5">
			<option value="<?php echo $registro["4"];?>" selected="selected"><?php echo $registro["4"];?></option>
		      <option value="SOLTERO(A)">SOLTERO(A)</option>
		      <option value="CASADO(A)">CASADO(A)</option>
		      <option value="DIVORCIADO(A)">DIVORCIADO(A)</option>
		      <option value="VIUDO(A)">VIUDO(A)</option>
		      <option value="UNION LIBRE">UNION LIBRE</option>
	        </select>
	      </div></td>
          <td >
		  <div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
		  <div align="center">
		    <input name="T6" type="text" id="T6" size="15" value="<?php echo $registro["5"];?>" />
	      <a href="javascript:show_calendar('formulario.T6');" 
					onmouseover="window.status='Elige fecha'; 
					overlib('Pulsa para seleccionar la fecha.'); return true;" 
					onmouseout="window.status=''; nd(); return true;"> <img src="../../imagen/calendarioMin.gif" alt="q" width="16" height="16" border="0" /></a></div></td>
	</tr>
		<tr>
		  <td height="21"><div align="center">Nacionalidad</div></td>
		  <td ><div align="center">Estado</div></td>
          <td ><div align="center">Ciudad/Poblaci&oacute;n</div></td>
	</tr>
		<tr>
		  <td height="24"><div align="center">
		    <select name="T7" id="T7" >
			<option value="<?php echo $registro["6"];?>"><?php echo $registro["6"];?></option>
		      <option value="VENEZOLANA">VENEZOLANA</option>
		      <option value="EXTRANJERA">EXTRANJERA</option>
	        </select>
	      </div></td>
		  <td ><div align="center">
		    <select name="T8" id="T8">
		        <option value="<?php echo $registro["7"];?>" selected="selected"><?php echo $registro["7"];?></option>
		      <option>Anzoátegui</option>
  <option>Apure</option>
  <option>Aragua</option>
  <option>Barinas</option>
  <option>Bolivar</option>
  <option>Carabobo</option>
  <option>Cojedes</option>
  <option>Delta Amacuro</option>
  <option>Distrito Capital</option>
  <option>Falcón</option>
  <option>Guarico</option>
  <option>Lara</option>
  <option>Mérida</option>
  <option>Miranda</option>
  <option>Monagas</option>
  <option>Nueva Esparta</option>
  <option>Portuguesa</option>
  <option>Sucre</option>
  <option>Táchira</option>
  <option>Trujillo</option>
  <option>Yaracuy</option>
  <option>Zulia</option>
  <option>Vargas</option>
	        </select>
	      </div></td>
          <td ><input name="T9" type="text" id="T9" value="<?php echo $registro["8"];?>" size="25"/></td>
	</tr>
		<tr>
		  <td height="21"><div align="center">Direcci&oacute;n Residencia </div></td>
		  <td ><div align="center">Codigo Carnet de la Patria</div></td>
          <td ><div align="center">Telefono celular </div></td>
	</tr>
		<tr>
		  <td height="47"><textarea name="T10" cols="20" rows="3" id="T10" ><?php echo $registro["9"];?></textarea></td>
		  <td ><input name="T11" type="text" id="T11" size="20" value="<?php echo $registro["10"];?>" /></td>
          <td ><input name="T12" type="text" id="T12" size="20" value="<?php echo $registro["11"];?>"  /></td>
	</tr>

		<tr>
		   <td colspan="3" align="center"> <input type="submit" value="Actualizar" name="operacion"></td>	
		</tr>
</table>
</form>
	<?php
	}	
	
	?>
      		