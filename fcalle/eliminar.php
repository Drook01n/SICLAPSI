<?php
	include "../../include/conectar.php";
	$id=$_GET["id"];
	$link=conectarse();
//************************************************
$sql="DELETE FROM fcalle WHERE idCarrera = '".$id."';";
$idConsulta=mysql_query($sql,$link);
//***********************************************
if (!$idConsulta)
{?>
<SCRIPT LANGUAGE="Javascript" TYPE="text/javascript">
   	alert("No se pudo eliminar el registro");
	window.location.href = "index.php";
</SCRIPT>
<?php
}
else
{
$op="Elimina datos de ".$modulo;
	bitacora(date("Y-m-d"),date("h:i:s"),$op,$_SESSION["usuario"]);
?>
<SCRIPT LANGUAGE="Javascript" TYPE="text/javascript">
   	alert("Los datos del registro fueron eliminados con exito");
	window.location.href = "index.php";
</SCRIPT>
<?php
}
?>
