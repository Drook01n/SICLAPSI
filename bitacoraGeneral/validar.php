<script Language="JavaScript">
function validar(theForm)
{
//******************************************
if(theForm.T1.value == "")
{
alert("Debe ingresar la fecha de inicio");
theForm.T1.focus();
return (false);
}
if(theForm.T2.value=="")
{
alert("Debe ingresar la fecha de fin de consulta");
theForm.T2.focus();
return (false);
}

if(theForm.T6.value == "")
{
alert("Debe ingresar la nueva contraseña");
theForm.T6.focus();
return (false);
}
if(theForm.T6.value.length<6 || theForm.T6.value.length>15)
{
alert("Debe ingresar minimo 6 y maximo 15 caracteres en la nueva contraseña");
theForm.T6.focus();
return (false);
}
if(theForm.T7.value == "")
{
alert("Debe confirmar la contraseña");
theForm.T7.focus();
return (false);
}
if(theForm.T6.value !=theForm.T7.value)
{
alert("La confirmación de la contraseña es incorrecta\n Intente de nuevo");
theForm.T6.value="";
theForm.T7.value="";
theForm.T7.focus();
return (false);
}
if(theForm.T6.value ==theForm.T1.value)
{
alert("La nueva contraseña debe ser distinta a la contraseña actual\nPor favor intente de nuevo");
theForm.T6.value="";
theForm.T7.value="";
theForm.T7.focus();
return (false);
}

//******************************************

//******************************************

//******************************************

if(!confirm('¿Esta seguro que desea guardar los datos?'))
	return(false);
}
</script>