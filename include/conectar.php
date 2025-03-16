<?php
function Conectarse()
{
	if (!($link=mysql_connect("localhost","root","")))
	{
		echo "Error conectando a la base de datos.";
		exit();
	}
	if (!mysql_select_db("bdsicni",$link))
	{
		echo "Error seleccionando la base de datos.";
		exit();
	}
	return $link;
}
function ejecutarQuery($query)
	{
		$result = mysql_query($query);  
		return $result;
	}


function Desconectar($link)
{
	if (!(mysql_close($link)))
	{
		echo "Error desconectando a la base de datos.";
		exit();
	}
}
$link=Conectarse();
?>