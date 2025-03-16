<?php
session_start();

if(isset($_SESSION["autenticado"]))
{
if($_SESSION["autenticado"]== "SI")
	{
	header ("Location: modulos/inicio/index.php");
	}
else
	{
	header ("Location: modulos/login/");
	}
}
else
{
//	include "modulos/login/index.php";
	header ("Location: modulos/login/index.php");
}
?>