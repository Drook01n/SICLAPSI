<?php
  $conexion=mysql_connect("localhost","root","") or
    die("Problemas en la conexion");

  mysql_select_db("bd_its",$conexion) or
    die("Problemas en la selecci�n de la base de datos");

  $registro=mysql_query("select * from evento where idNoticia=$_REQUEST[cod]",$conexion) or
    die("Error en el select:".mysql_error());

  $reg=mysql_fetch_array($registro);
  
  Header ("Content-type: image/jpeg");
  echo $reg['imagen'];

?>
