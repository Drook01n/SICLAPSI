<script Language="JavaScript">
function validar(theForm)
{
//******************************************
if(theForm.T1.value == "")
{
alert("Debe ingresar la cédula del aspirante");
theForm.T1.focus();
return (false);
}
if(theForm.T2.value == "")
{
alert("Debe ingresar el nombre");
theForm.T2.focus();
return (false);
}
if(theForm.T3.value == "")
{
alert("Debe ingresar el apellido");
theForm.T3.focus();
return (false);
}
if(theForm.T6.value == "")
{
alert("Debe ingresar la fecha de Nacimiento");
theForm.T6.focus();
return (false);
}
if(theForm.T9.value == "")
{
alert("Debe ingresar la ciudad o poblacion de nacimiento");
theForm.T9.focus();
return (false);
}
if(theForm.T10.value == "")
{
alert("Debe ingresar la dirección de residencia");
theForm.T10.focus();
return (false);
}
if(theForm.T11.value == "")
{
alert("Debe ingresar el codigo del Carnet de la patria");
theForm.T11.focus();
return (false);
}
if(theForm.T12.value == "")
{
alert("Debe ingresar el numero de celular");
theForm.T12.focus();
return (false);
}
//******************************************

//******************************************

//******************************************

if(!confirm('¿Esta seguro que desea guardar los datos?'))
	return(false);
}
</script>