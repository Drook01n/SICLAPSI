<?php
include "../../include/conectar.php";
include("../../include/libreria/jsNumerica.html");
include("validar.php");
include("../../include/scriptCalendario.htm");
	$link=conectarse();
	$id=$_GET["id"];
	$SQL="SELECT preisncripcion.*, aspirante.nombres, aspirante.apellidos, periodoacademico.idPeriodoAcademico, carrera.nombre, carrera.idCarrera, tipoasignacion.nombre as tipo  FROM preisncripcion
			INNER JOIN matriculaofertada ON preisncripcion.idMatriculaOfertada = matriculaofertada.idMatriculaOfertada
			INNER JOIN aspirante ON preisncripcion.idAspirante = aspirante.idAspirante
			INNER JOIN tipoasignacion on preisncripcion.idTipoAsignacion=tipoasignacion.idTipoAsignacion
			INNER JOIN periodoacademico ON matriculaofertada.idPeriodoAcademico = periodoacademico.idPeriodoAcademico
			INNER JOIN carrera ON matriculaofertada.idCarrera = carrera.idCarrera
			WHERE idPreinscripcion =".$id;
	$result=mysql_query($SQL,$link);
	$registro=mysql_fetch_array($result);
	if($registro)
	{
			

?>

<form method="POST" name="formulario" action="index.php" onsubmit = "return validar(this)" enctype="multipart/form-data">
<input name="id" type="hidden"  value="<?PHP echo $id;?>"/>
      	<table  class="tabla" height="112" width="560"  cellpadding="0">
      			<tr>
      			  <th colspan="2" align="center">Actualizar Datos </th>
		  </tr>
      			<tr>
      			  <td width="158" bordercolor="#666666"> Periodo </td>
		          <td width="394" ><input name="T1" type="text" id="T1" value="<?PHP echo $registro["idPeriodoAcademico"];?>" size="20" readonly="readonly" /></td>
		  </tr>
		<tr>
		  <td bordercolor="#666666">Nombre del Beneficiario </td>
		   <td ><select name="T2" id="T2" disabled="disabled">
               <option selected="selected" value="<?PHP echo $registro["idAspirante"];?>"><?PHP echo $registro["nombres"]." ".$registro["apellidos"];?></option>
               <?php
		  $link=conectarse();
	      $result= ejecutarQuery("SELECT * FROM aspirante order by nombres, apellidos");
		  while($fila=mysql_fetch_array($result))
		  {
		  ?>
               <option value="<?PHP echo $fila[0];?>"><?PHP echo $fila[1].", ".$fila[2];?></option>
               <?php
		  }
		  ?>
           </select></td>
		</tr>
		<tr>
		  <td bordercolor="#666666">Jefa o Jefe de Calle:</td>
		  <td ><select name="T3" id="T3">
              <option selected="selected" value="<?PHP echo $registro["idMatriculaOfertada"];?>"><?PHP echo $registro["nombre"];?></option>
              <?php
		  $link=conectarse();
	      $result= ejecutarQuery("SELECT matriculaofertada.idMatriculaOfertada, carrera.nombre FROM carrera inner join matriculaofertada on carrera.idCarrera =matriculaofertada.idCarrera where matriculaofertada.idPeriodoAcademico='".lapso()."'");
		  while($fila=mysql_fetch_array($result))
		  {
		  ?>
              <option value="<?PHP echo $fila[0];?>"><?PHP echo $fila[1];?></option>
              <?php
		  }
		  ?>
          </select></td>
		</tr>
		<tr>
		  <td bordercolor="#666666">Tipo de Asignaci&oacute;n: </td>
		  <td ><select name="T4" id="T4">
              <option selected="selected" value="<?PHP echo $registro["idTipoAsignacion"];?>"><?PHP echo $registro["tipo"];?></option>
              <?php
		  $link=conectarse();
	      $result= ejecutarQuery("SELECT * FROM tipoasignacion");
		  while($fila=mysql_fetch_array($result))
		  {
		  ?>
              <option value="<?PHP echo $fila[0];?>"><?PHP echo $fila[1];?></option>
              <?php
		  }
		  ?>
          </select></td>
		</tr>
		<tr>
		  <td bordercolor="#666666">Carga Familar</td>
		  <td ><input name="T5" type="text" id="T5" value="<?PHP echo $registro["promedio"];?>" size="10"></td>
		</tr>
		<tr>
		  <td bordercolor="#666666">Fecha de Asignacion</td>
		  <td >			  <div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
		      <input name="T6" type="text" id="T6" size="15" readonly="readonly" value="<?PHP echo $registro["fechaInscripcion"];?>" />
            <a href="javascript:show_calendar('formulario.T6');" 
					onmouseover="window.status='Elige fecha'; 
					overlib('Pulsa para seleccionar la fecha.'); return true;" 
					onmouseout="window.status=''; nd(); return true;"> <img src="../../imagen/calendarioMin.gif" alt="q" width="16" height="16" border="0" /></a></td>
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
      		