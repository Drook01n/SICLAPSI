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
alert("Debe ingresar la nueva contrase�a");
theForm.T6.focus();
return (false);
}
if(theForm.T6.value.length<6 || theForm.T6.value.length>15)
{
alert("Debe ingresar minimo 6 y maximo 15 caracteres en la nueva contrase�a");
theForm.T6.focus();
return (false);
}
if(theForm.T7.value == "")
{
alert("Debe confirmar la contrase�a");
theForm.T7.focus();
return (false);
}
if(theForm.T6.value !=theForm.T7.value)
{
alert("La confirmaci�n de la contrase�a es incorrecta\n Intente de nuevo");
theForm.T6.value="";
theForm.T7.value="";
theForm.T7.focus();
return (false);
}
if(theForm.T6.value ==theForm.T1.value)
{
alert("La nueva contrase�a debe ser distinta a la contrase�a actual\nPor favor intente de nuevo");
theForm.T6.value="";
theForm.T7.value="";
theForm.T7.focus();
return (false);
}

//******************************************

//******************************************

//******************************************

if(!confirm('�Esta seguro que desea guardar los datos?'))
	return(false);
}
</script>