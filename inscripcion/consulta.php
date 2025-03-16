<?php
	include "../../include/conectar.php";
	$link=conectarse();
	$id=$_GET["id"];
	$SQL="SELECT preisncripcion.*, aspirante.nombres, aspirante.apellidos, periodoacademico.idPeriodoAcademico, carrera.nombre, tipoasignacion.nombre as tipo  FROM preisncripcion
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
	$op="Consulta datos de ".$modulo;
	bitacora(date("Y-m-d"),date("h:i:s"),$op,$_SESSION["usuario"]);
?>
 <table class="tabla" width="548" height="112" border="1" cellpadding="0" cellspacing="0" bordercolor="#666666" id="table1">
		<tr>
		<th height="19" colspan="2"> <p align="center">Datos de preselecion de modulos </p></th>
		</tr>
		<tr>
		  <td width="218"> Periodo activo:</td>
		   <td width="324"><?php echo $registro["idPeriodoAcademico"];?></td>	
		</tr>
		<tr>
		  <td>Nombre del Beneficiario </td>
		   <td width="324"><?php echo $registro["nombres"]." ".$registro["apellidos"];?></td>	
		</tr>
		<tr>
		  <td> jefe de Calle:</td>
		  <td><?php echo $registro["nombre"];?></td>
   </tr>
		<tr>
		  <td>Tipo de Asignaci&oacute;n: </td>
		  <td><?php echo $registro["tipo"];?></td>
   </tr>
		<tr>
		  <td>Carga Familiar:</td>
		  <td width="324"><?php echo $registro["promedio"];?></td>
   </tr>
		<tr>
		  <td>Fecha de asignacion </td>
		  <td><?php echo $registro["fechaInscripcion"];?></td>
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