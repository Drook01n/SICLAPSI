<style type="text/css">
<!--
.Estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	color:#FFFFFF;
	font-weight: bold;
}
-->
</style>
<TABLE cellSpacing=0 cellPadding=0 width=178 align=right 
                  border=0>
                    <TBODY>
                    <TR>
                      <TD height=19>&nbsp;</TD></TR>
                    <TR>
                      <TD height=19>
                        <DIV align=center>
							<img border="0" src="../../imagen/principal.png" width="180" height="29"></DIV></TD>
					</TR>
                    <TR>
					<td>
					
					<div class="menu">
						<ul>
							
							<li>
								<a href="#">Parametros del Sistema</a>
								<ul>
									<li><a href="../fcalle/index.php">Jefe de Calle</a></li>
									<li><a href="../tipoAsignacion/index.php">Tipo de Asignacion</a></li>
									<li><a href="../periodoAcademico/index.php">Periodo de gestion</a></li>
									<li>
								</ul>								
						  	</li>

						
							
							
							<li>
								<a href="#">Ingreso de Beneficiarios</a>
							  	<ul>
									<li><a href="../oferta/index.php">Cantidad de modulos por Jefe de Calle</a></li>
									<li><a href="../aspirante/index.php">Registro del Beneficiario</a></li>
									<li><a href="../inscripcion/index.php">Preselecion</a></li>
							<li><a href="../seleccion/index.php">Asignacion de Beneficios</a></li>
							<?php
							if($_SESSION["rol"]=="ADMINISTRADOR")
							{
							?>
							<li><a href="../reasignar/index.php">Reasignacion de Beneficios</a></li>
							<?php
							}
							?>
								</ul>
							</li>
							

							<li><a href="#">Reportes</a>
							  <ul>
								<li><a href="../repPreiscritosG/index.php">Listado General de Preseleccionados</a></li>
								<li><a href="../repPreiscritosC/index.php">Listado de Preseleccionados por Jefe de Calle</a></li>
								<li><a href="../repPreiscritosTA/index.php">Listado de Preseleccionados por Tipo Asignacion</a></li>
								<li><a href="../repSelecciodadoG/index.php">Listado General de Admitidos</a></li>
								<li><a href="../repSeleccionadoC/index.php">Listado de Admitidos  por Jefe de Calle</a></li>
								<li><a href="../repSeleccionadoTA/index.php">Listados de Admitidos por Tipo de Asignacion</a></li>
							</ul>
							</li>
							<?php
							if($_SESSION["rol"]=="ADMINISTRADOR")
							{
							?>
							<li><a href="#">Usuarios del Sistema</a>
								<ul>
								<li><a href="../usuario/index.php">Cuentas de Usuario</a></li>
																
							  </ul>
							  	
							</li>
							<?php
							}
							?>
							
							<li><a href="#">Mi Cuenta</a>
							  <ul>
								<li><a href="../informacionpersonal/index.php">Informacion Personal</a></li>
								<li><a href="../cambiaclave/index.php">Cambio de Clave</a></li>
																
								<li><a href="../login/cerrarSesion.php">Cerrar Sesion</a></li>
							  </ul>
							</li>
					
						</ul>
					</div>
					</td>
					</TR>
					<tr>
						<td><div align="center"><img src="../../imagen/001.gif" width="130" height="130" /><bR />
						  <span><?php echo $_SESSION["usuario"];?></span></div></td>
					</tr>
					</TBODY></TABLE>