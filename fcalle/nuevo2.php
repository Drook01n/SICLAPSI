<?php 
  	include "../../include/conectar.php";
	include "funciones.php";	
		

	$t1=$_REQUEST["T1"];
	$t2=$_REQUEST["T2"];
	$t3=$_REQUEST["T3"];
	$t4=$_REQUEST["T4"];
	
			

	$sql="INSERT INTO `fcalle` (`idCarrera` ,`nombre` ,`perfilEgresado` ,`modalidad`, `duracion`)VALUES ('', '$t1', '$t2', '$t3', '$t4');";
	$link=conectarse();	
	$idConsulta=mysql_query($sql,$link);
		if (!$idConsulta){?>
			<SCRIPT LANGUAGE="Javascript" TYPE="text/javascript">
		   	alert("No se pudo agregar los datos, porque ya estan registrado en el sistema");
		  	window.location.href="index.php";
			</SCRIPT>
		<?php
		}
		else
		{
		$op="Registro nueva ".$modulo;
		bitacora(date("Y-m-d"),date("h:i:s"),$op,$_SESSION["usuario"]);
		?>
			<SCRIPT LANGUAGE="Javascript" TYPE="text/javascript">
		   	alert("Los datos fueron guardados con éxito");
		  	window.location.href="index.php";
			</SCRIPT>
		<?php
		}
?>


