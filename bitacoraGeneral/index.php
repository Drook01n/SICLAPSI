<?php include("../../include/encabezado.html");
include "../../include/libreria/bitacora.php";
include("../../include/scriptCalendario.htm");
?>

              	<TR>
                	<TD><IMG height=1 src="ARVELO &amp; FERNANDEZ ABOGADOS_archivos/vacio.gif"width=1></TD>
                </TR>
              	<TR>
                	<TD>
                  	<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0 height="32">
                    <TBODY>
                    	<TR>
                      		<TD width=51 height=32 background="../../imagen/menuSup.jpg">&nbsp;
							</TD>
                      		<TD width=176 background="../../imagen/menuSup.jpg">
                        		<DIV id="fecha">
								<?php echo "San Fernando ".date("d-m-Y");?></font></DIV>
							</TD>
                      		<TD background="../../imagen/menuSup.jpg">
							<?php include("../../include/menuSup.php");?></TD>
                      	</TR>
                      </TBODY>
                      </TABLE>
                      </TD>
                </TR>
                </TBODY>
             </TABLE>
            </TD>
           </TR>
			<TR>
				<TD vAlign=top width=210 background="../../imagen/fondo_menu_izq.jpg" rowspan="3">
					<TABLE cellSpacing=0 cellPadding=0 width=222 align=center border=0 height="251">
						<TBODY>
			              	<TR>
			              		<TD background="../../imagen/fondo_menu_izq.jpg" height=251><?php include("../../include/menu.php");?></TD>
			              	</TR>
			             </TBODY>
			         </TABLE>
			    </TD>
			    <TD vAlign=top width=590>
			    	
			                		<TABLE cellSpacing=0 cellPadding=0 width="573" border=0 height="270">
			                    		<TBODY>
				                    	<TR>
				                    	  	<TD vAlign=top width="22" height="270">&nbsp;
											</TD>
				                    	  	<TD vAlign=top width="535" height="270" colspan="2">
							<!--iNICIO DEL JAVA SCRIP-->
							<table align="center" width="100%" height="100%" border="0">
							<tr height="40">
							<td height="50">
							<span class="Estilo1"><span class="Estilo2">Historico de Operaciones</span></span>
							<hr>
							  </td>
									</tr>
									<tr height="*">
									<td valign="top">
									<?php 								
									$modulo="Historico de Operaciones";	
												include("listado.php");												
												$op="Ingreso al modulo de ".$modulo;
												bitacora(date("Y-m-d"),date("h:i:s"),$op,$_SESSION["usuario"]);
											
											?>													
											</td>
											</tr>
											</table>
													
													
											<!-- -->		
											</TD>
				                      		<TD height="99">&nbsp;</TD>
				                      	</TR>
				                    	<TR>
				                      		<TD vAlign=top width="22">&nbsp;</TD>
				                      		<TD vAlign=top width="16">&nbsp;</TD>
				                      	</TR>				                    	
				                    	<TR>
				                      		<TD vAlign=top width="22">&nbsp;</TD>
				                      		<TD>&nbsp;
				                      			</TD>
				                      		<TD valign="top">&nbsp;
				                      		</TD>
				                      		<TD vAlign=top width="16">&nbsp;</TD>
				                      	</TR>				                    	
			                    		</TBODY>
			                    	</TABLE>
			                   
				</TD>
			</TR>
			</TBODY>
			</TABLE>
			</TD>
			</TR>
			<TR>
    		<TD height=15 align="center" background="../../imagen/pie.jpg" height="20">
			<?php include("../../include/piepagina.html");?> 
			</TD>
			</TR>
			<tr><td height="100%"></td></tr>
			</TABLE>
</BODY>
</HTML>