$('#registrar').click(function(){
	var mail=$('#txtcorreo').val().trim();

	if ($('#txtnombre').val()=='') {
		
		$(txtnombre).css("border","1px solid red");
		$(txtnombre).attr("placeholder","Por favor, Introduzca su nombre");
	}
	else{
		$(txtnombre).css("border","1px solid lightgray");
	}
	if ($('#txtapellido').val()=='') {
		/*alert('');*/
		$(txtapellido).css("border","1px solid red");
		$(txtapellido).attr("placeholder","Por favor, no omita sus apellidos");

	}
	else{
		$(txtapellido).css("border","1px solid lightgray");
	}
	if ($('#txttelefono').val()=='') {
		/*alert('');*/
		$(txttelefono).css("border","1px solid red");
		$(txttelefono).attr("placeholder","Por favor ingrese su número");
	}
	else {
		if(isNaN($("#txttelefono").val())) {  
        /*alert(""); */
        $(txttelefono).css("border","1px solid red");
        $(txttelefono).val("");
		$(txttelefono).attr("placeholder","El teléfono solo debe contener números");
        return false; 

    } 
    else{
    	$(txttelefono).css("border","1px solid lightgray");
    }
	}
    if (mail=='') {
    	$(txtcorreo).css("border","1px solid red");
		$(txtcorreo).attr("placeholder","Por favor ingrese su correo");
    }
    else{
    	$(txtcorreo).css("border","1px solid lightgray");
    }
    if ($('#txtcontraseña').val()=='') {
    	/*alert('');*/
    	$(txtcontraseña).css("border","1px solid red");
		$(txtcontraseña).attr("placeholder","Escriba su contraseña");
    }
    else{
    	$(txtcontraseña).css("border","1px solid lightgray");
    }
     if ($('#txtccontraseña').val()=='') {
    	/*alert('Escriba su contraseña');*/
    	$(txtccontraseña).css("border","1px solid red");
		$(txtccontraseña).attr("placeholder","Escriba su contraseña");
    }
    else{
    	$(txtccontraseña).css("border","1px solid lightgray");
    }
    if ($('#txtcontraseña').val()!=$('#txtccontraseña').val()) {
    	alert("contrase;a no coninciden");
    }
    if ($('#txtotracarrera').val()=='') {
    	/*alert(');*/
    	$(txtotracarrera).css("border","1px solid red");
		$(txtotracarrera).attr("no deje el campo de la carrera en blanco");
    } 
	
});