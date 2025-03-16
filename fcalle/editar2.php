<?php
	include "../../include/conectar.php";
	include "funciones.php";

		$idV = $_POST["id"];
		$T1=$_POST["T1"];
		$T2=$_POST["T2"];
		$T3=$_POST["T3"];
		$T4=$_POST["T4"];
						

		
			$sql="UPDATE `fcalle` SET 
			`nombre` = '$T1',
			`perfilEgresado` = '$T2',
			`modalidad` = '$T3',
			`duracion` = '$T4' 
			WHERE `fcalle`.`idCarrera`=".$idV.";";

					
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