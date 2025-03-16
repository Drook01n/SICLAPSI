<?php include("../../include/encabezado.html");?>
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
				<TD width=210 height="343" rowspan="3" vAlign=top background="../../imagen/fondo_menu_izq.jpg">
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
											<!--CUERPO DE LA PAINA WEB-->
											
											<table align="center" width="100%" height="100%" border="0">
											<tr height="40">
													<td height="50">
															<span class="Estilo1"><span class="Estilo2">Temas sobres ITS </span></span>
															<hr>
											  </td>
											</tr>
											<tr height="*">
													<td valign="top">
											
											<?php 
											if(!isset($_REQUEST["operacion"]))
												include("listado.php");
											else
											{
												if ($_REQUEST["operacion"]=='n')
												include("nuevo.php");
												else
												if ($_REQUEST["operacion"]=='Guardar')
												include("nuevo2.php");
												else
												if ($_REQUEST["operacion"]=='e')
												include("eliminar.php");
												else
												if ($_REQUEST["operacion"]=='c')
												include("consulta.php");			
												else
												if ($_REQUEST["operacion"]=='a')
												include("editar1.php");
												else
												if ($_REQUEST["operacion"]=='Actualizar')
												include("editar2.php");														
												
											}
											
											?>													
											</td>
											</tr>
											</table>
													
													
													
													
													
											
											
											
											<!--FIN CUERTPO DE LA PAGINA WEB-->											
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
    		<TD height=15 align="center" background="../../imagen/pie.jpg">
			<?php include("../../include/piepagina.html");?> 
			</TD>
			</TR>
		
</TABLE>
</BODY>
</HTML>