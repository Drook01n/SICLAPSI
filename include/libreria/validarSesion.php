<?php
session_start();
if($_SESSION["autenticado"]!= "SI")
	{
	header ("Location: ../../modulos/login/index.php");
	exit;
}
?>