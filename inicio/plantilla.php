<html>
<head>
<meta http-equiv="Content-Language" content="es">
<TITLE>:: SIEBA ::</TITLE>


<link rel="stylesheet" type="text/css" href="../../cssMenu/lksMenuSkin3.css" />
<link rel="stylesheet" type="text/css" href="../../style.css" />
<link rel="stylesheet" type="text/css" href="../../css/estilos.css" />
<script type="text/javascript" src="../../cssMenu/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../../cssMenu/jquery.lksMenu.js"></script>
<script>
					$('document').ready(function(){
						$('.menu').lksMenu();
					});
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 3000, true);
	});
</script>

</HEAD>
<BODY topMargin=0 bgcolor="#CCCCCC">
<TABLE cellSpacing=0 cellPadding=0 width=800 align=center border=0>
	
  	<TR>
    	<TD height="437" bgcolor="#ffffff">
      	<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0 height="356">
        <TBODY>
        <TR>
          	<TD vAlign=top colSpan=2 height=1>
            <TABLE cellSpacing=0 cellPadding=0 width=800 align=centerborder=0>
            	<TBODY>
              	<TR>
                	<TD height="15"><?php include("../../include/encabezado.html");?></TD>
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
											<!--CUERPO DE LA PAINA WEB-->
													
													
													
													
													
													
											
											
											
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
    		<TD height=15 align="center" background="../../imagen/pie.jpg"><?php include("../../include/piepagina.html");?> </TD>
			</TR>
		
			</TABLE>
</BODY>
</HTML>