<?php
	function bitacora($t1, $t2, $t3, $t4)
	{
	$sql="INSERT INTO `bitacora` (`idBitacora` ,`fecha` ,`hora` ,`operacion` ,`usuario`)VALUES (NULL, '$t1', '$t2', '$t3', '$t4');";
	$link=conectarse();	
	$idConsulta=mysql_query($sql,$link);
	}
	function lapso()
	{
		$sql="SELECT * FROM periodoacademico WHERE estado='ACTIVO'";
		$link=conectarse();	
		$result=mysql_query($sql,$link);
		$registro=mysql_fetch_array($result);
		if($registro)
			return($registro[0]);
		else
			return(0);
	}
		function inscrito($id)
	{
		$sql="SELECT * FROM preisncripcion WHERE idAspirante='".$id."'";
		$link=conectarse();	
		$result=mysql_query($sql,$link);
		$registro=mysql_fetch_array($result);
		if($registro)
			return($registro[0]);
		else
			return(0);
	}
?>