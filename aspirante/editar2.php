<?php
	include "../../include/conectar.php";
	include "funciones.php";

		$idV = $_POST["idV"];
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
					

		
			$sql="UPDATE `aspirante` SET 
`idAspirante` = '$t1',
`nombres` = '$t2',
`apellidos` = '$t3',
`sexo` = '$t4',
`estadoCivil` = '$t5',
`fechaNacimiento` = '$t6',
`nacionalidad` = '$t7',
`estado` = '$t8',
`ciudad` = '$t9',
`direccion` = '$t10',
`telfResidencia` = '$t11',
`telfCelular` = '$t12' WHERE `aspirante`.`idAspirante` ='".$idV."';";
			

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