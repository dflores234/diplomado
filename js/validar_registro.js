$('#registrar').click(function(){
	var nom=$('#txtnombre').val().trim();
	var ape=$('#txtapellido').val().trim();
	var tel=$('#txttelefono').val().trim();
	var ocar=$('#txtotracarrera').val().trim();
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
<<<<<<< HEAD
	else{ 
		$(mail).css("border","1px solid lightgray");
=======
	else if($(mail).val().indexOf('@', 0) == -1 || $("#correo").val().indexOf('.', 0) == -1) {  
            alert("La dirección parece incorrecta");  
            return false;  
    } 
    else{
    	$(mail).css("border","1px solid lightgray");
>>>>>>> 77662f5fedf5321af6586b8fa1f4d274f0b6b926
    } 
    if (ocar=='') {
    	/*alert(');*/
    	$(txtotracarrera).css("border","1px solid red");
<<<<<<< HEAD
		$(otracarrera).attr("placeholder,no deje el campo de la carrera en blanco");
=======
		$(txtotracarrera).attr("no deje el campo de la carrera en blanco");
>>>>>>> 77662f5fedf5321af6586b8fa1f4d274f0b6b926
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