<?php include("../../include/encabezado.html");?>

              	
              	<TR>
                	<TD>
                  	<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0 height="32">
                    <TBODY>
                    	<TR>
                      		<TD width=51 height=32 background="#FF82AB">&nbsp;
							</TD>
                      		<TD width=176 background="#FF82AB">
                        		<DIV id="fecha">
								<?php echo "San Fernando ".date("d-m-Y");?></font></DIV>
							</TD>
                      		<TD background="#FF82AB">
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
				<TD vAlign=top width=210 background= "#FF82AB">
					<TABLE cellSpacing=0 cellPadding=0 width=222 align=center border=0 height="251">
						<TBODY>
			              	<TR>
			              		<TD background= "#FF82AB" height=251><?php include("../../include/menu.php");?></TD>
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
											
													
													
													
											
											
											
											
																						
											<p align="center">&nbsp;</p>
											<p align="center"><font color="#000000"><b>
											<font size="6" face="Calibri"><span class="Estilo1"></span></font> </b></font><b><font size="6" face="arial" color="#FF0000">Hola Camarada<br>
											<?php echo $_SESSION["usuario"];?></font></b></p>
									              
	                                                                              <td width="97" height="207" valign="top"><img src="../../imagen/logo1.png" width="185" height="171" /></td>
	                                                                              
	  
											<p align="center">&nbsp;</p>											</TD>
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