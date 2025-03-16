<?php
function sinPortada($link, $clasificacion)
{
	$sql="UPDATE noticia SET  portada= '0' WHERE portada = '1' and clasificacion='".$clasificacion."'; ";
	$idConsulta=mysql_query($sql,$link);
}
?>