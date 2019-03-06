$('#registrar').click(function(){
	var nom=$('#nombre').val().trim();
	var ape=$('#apellido').val().trim();
	var tel=$('#telefono').val().trim();
	var ocar=$('#otracarrera').val().trim();
	var contra=$('#contraseña').val().trim();
	var ccontra=$('#ccontraseña').val().trim();
	var mail=$('#correo').val().trim();

	if (nom=='') {
		
		$(nombre).css("border","1px solid red");
		$(nombre).attr("placeholder","Por favor, Introduzca su nombre");
	}
	else{
		$(nombre).css("border","1px solid lightgray");
	}
	if (ape=='') {
		/*alert('');*/
		$(apellido).css("border","1px solid red");
		$(apellido).attr("placeholder","Por favor, no omita sus apellidos");

	}
	else{
		$(apellido).css("border","1px solid lightgray");
	}
	if (tel=='') {
		/*alert('');*/
		$(telefono).css("border","1px solid red");
		$(telefono).attr("placeholder","Por favor ingrese su número");
	}
	else if(isNaN($("#telefono").val())) {  
        /*alert(""); */
        $(telefono).css("border","1px solid red");
        $(telefono).val("");
		$(telefono).attr("placeholder","El teléfono solo debe contener números");
        return false; 

    } 
    else{
    	$(telefono).css("border","1px solid lightgray");
    }
    if (mail=='') {
    	$(correo).css("border","1px solid red");
		$(correo).attr("placeholder","Por favor ingrese su correo");
    }
	else if($("#correo").val().indexOf('@', 0) == -1 || $("#correo").val().indexOf('.', 0) == -1) {  
            alert("La dirección parece incorrecta");  
            return false;  
    } 
    else{
    	$(mail).css("border","1px solid lightgray");
    } 
    if (ocar=='') {
    	/*alert(');*/
    	$(otracarrera).css("border","1px solid red");
		$(otracarrera).attr("no deje el campo de la carrera en blanco");
    } 
    if (contra=='') {
    	/*alert('');*/
    	$(contraseña).css("border","1px solid red");
		$(contraseña).attr("placeholder","Escriba su contraseña");
    }
     if (ccontra=='') {
    	/*alert('Escriba su contraseña');*/
    	$(ccontraseña).css("border","1px solid red");
		$(ccontraseña).attr("placeholder","Escriba su contraseña");
    }
	
});