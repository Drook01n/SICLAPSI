<?php 
  	include "../../include/conectar.php";
	include "funciones.php";	
		

	$t1=$_REQUEST["T1"];
	$t2=$_REQUEST["T2"];
	$t3=$_REQUEST["T3"];
	$t4=$_REQUEST["T4"];
	$t5=$_REQUEST["T5"];
	$t6=$_REQUEST["T6"];
	$t7=$_REQUEST["T7"];
	$t8=$_REQUEST["T8"];
	$t9=$_REQUEST["T9"];
	$t10=$_REQUEST["T10"];
	$t11=$_REQUEST["T11"];
	$t12=$_REQUEST["T12"];
	$sql="INSERT INTO `bdsicni`.`aspirante` (`idAspirante` ,`nombres` ,`apellidos` ,`sexo` ,`estadoCivil` ,`fechaNacimiento` ,`nacionalidad` ,`estado` ,`ciudad` ,`direccion` ,`telfResidencia` ,`telfCelular`)
VALUES ('$t1', '$t2', '$t3', '$t4', '$t5', '$t6', '$t7', '$t8', '$t9', '$t10', '$t11', '$t12');";
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


