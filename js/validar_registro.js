$('#registrar').click(function(){
	var nom=$('#txtnombre').val().trim();
	var ape=$('#txtapellido').val().trim();
	var tel=$('#txttelefono').val().trim();
	var ocar=$('#otracarrera').val().trim();
	var contra=$('#txtcontraseña').val().trim();
	var ccontra=$('#txtccontraseña').val().trim();
	var mail=$('#txtcorreo').val().trim();

	if (nom=='') {
		
		$(txtnombre).css("border","1px solid red");
		$(txtnombre).attr("placeholder","Por favor, Introduzca su nombre");
	}
	else{
		$(txtnombre).css("border","1px solid lightgray");
	}
	if (ape=='') {
		/*alert('');*/
		$(txtapellido).css("border","1px solid red");
		$(txtapellido).attr("placeholder","Por favor, no omita sus apellidos");

	}
	else{
		$(txtapellido).css("border","1px solid lightgray");
	}
	if (tel=='') {
		/*alert('');*/
		$(txttelefono).css("border","1px solid red");
		$(txttelefono).attr("placeholder","Por favor ingrese su número");
	}
	else if(isNaN($("#txttelefono").val())) {  
        /*alert(""); */
        $(txttelefono).css("border","1px solid red");
        $(txttelefono).val("");
		$(txttelefono).attr("placeholder","El teléfono solo debe contener números");
        return false; 

    } 
    else{
    	$(txttelefono).css("border","1px solid lightgray");
    }
    if (mail=='') {
    	$(txtcorreo).css("border","1px solid red");
		$(txtcorreo).attr("placeholder","Por favor ingrese su correo");
    }
	else{ 
		$(mail).css("border","1px solid lightgray");
    } 
    if (ocar=='') {
    	/*alert(');*/
    	$(txtotracarrera).css("border","1px solid red");
		$(otracarrera).attr("placeholder,no deje el campo de la carrera en blanco");
    } 
    if ($('#txtcontraseña').val()=='') {
    	/*alert('');*/
    	$(txtcontraseña).css("border","1px solid red");
		$(txtcontraseña).attr("placeholder","Escriba su contraseña");
    }
     if (ccontra=='') {
    	/*alert('Escriba su contraseña');*/
    	$(txtccontraseña).css("border","1px solid red");
		$(txtccontraseña).attr("placeholder","Escriba su contraseña");
    }
	
});