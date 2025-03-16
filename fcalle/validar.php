<script Language="JavaScript">
function validar(theForm)
{
//******************************************
if(theForm.T1.value == "")
{
alert("Debe ingresar El nombre y apellido del Jefa o Jefe de Calle");
theForm.T1.focus();
return (false);
}
if(theForm.T2.value == "")
{
alert("Debe ingresar el Status del Beneficiario");
theForm.T2.focus();
return (false);
}
if(theForm.T3.value == "")
{
alert("Debe seleccionar el regimen de duracion del Beneficio");
theForm.T3.focus();
return (false);
}
if(theForm.T4.value == "")
{
alert("Debe indicar el regimen duracion");
theForm.T4.focus();
return (false);
}

//******************************************

//******************************************

//******************************************

if(!confirm('¿Esta seguro que desea guardar los datos?'))
	return(false);
}
</script>