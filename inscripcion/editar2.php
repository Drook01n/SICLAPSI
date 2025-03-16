<?php
	include "../../include/conectar.php";
	include "funciones.php";

		$idV = $_POST["id"];
		$t1=$_REQUEST["T1"];
		//$t2=$_REQUEST["T2"];
		$t3=$_REQUEST["T3"];
		$t4=$_REQUEST["T4"];
		$t5=$_REQUEST["T5"];
		$t6=$_REQUEST["T6"];		
		$sql="UPDATE `preisncripcion` SET 
		`fechaInscripcion` = '$t6',
		`idMatriculaOfertada` = '$t3',
		`promedio` = '$t5',
		`idTipoAsignacion` = '$t4' 
		WHERE `preisncripcion`.`idPreinscripcion` ='".$idV."';";
			

					
			$link=conectarse();
			$idConsulta=mysql_query($sql,$link);					
			if ($idConsulta)
						{
						$op="Actualizo datos de ".$modulo;
						bitacora(date("Y-m-d"),date("h:i:s"),$op,$_SESSION["usuario"]);
						?>
						<SCRIPT LANGUAGE="Javascript" TYPE="text/javascript">
					   	alert("Los cambios de los datos fueron guardados con éxito");
					  	window.location.href="index.php";
						</SCRIPT>
						<?php
						}
	
?>