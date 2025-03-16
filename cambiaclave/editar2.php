<?php
	include "../../include/conectar.php";


		$T1=$_POST["T1"];		
		$T6=$_POST["T6"];
						

		
			$sql="UPDATE `usuario` SET 
			`clave` = '$T6'
			WHERE `usuario`.`login` = '".$_SESSION["login"]."' and `usuario`.`clave`='".$T1."'";
			$link=conectarse();
			$idConsulta=mysql_query($sql,$link)or die(mysql_error()); 					

			if ($idConsulta=1 && mysql_affected_rows()>0 )
						{
						$op="Actualizo datos de ".$modulo;
						bitacora(date("Y-m-d"),date("h:i:s"),$op,$_SESSION["usuario"]);
						?>
						<SCRIPT LANGUAGE="Javascript" TYPE="text/javascript">
					   	alert("Los cambios de los datos fueron guardados con éxito");
					  	window.location.href="../../index.php";
						</SCRIPT>
						<?php
						}
			else
			{
?>
						<SCRIPT LANGUAGE="Javascript" TYPE="text/javascript">
					   	alert("La clave actual que ingreso es incorrecta.\n Por favor intente de nuevo");
					  	window.location.href="index.php";
						</SCRIPT>
<?php
}
?>