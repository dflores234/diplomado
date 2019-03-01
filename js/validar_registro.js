$('#registrar').click(function(){
	var nom=$('#nombre').val().trim();
	var ape=$('#apellido').val().trim();
	var tel=$('#telefono').val().trim();
	var ocar=$('#otracarrera').val().trim();
	var contra=$('#contraseña').val().trim();
	var ccontra=$('#ccontraseña').val().trim();
	if (nom=='') {
		alert('Por favor, introduzca su nombre');
	}
	if (ape=='') {
		alert('Por favor, no omita sus apellidos');
	}
	if (tel=='') {
		alert('No deje el campo del numero de telefono vacio');
	}
	else if(isNaN($("#telefono").val())) {  
        alert("El teléfono solo debe contener números");  
        return false;  
    } 
	if($("#correo").val().indexOf('@', 0) == -1 || $("#correo").val().indexOf('.', 0) == -1) {  
            alert("La dirección parece incorrecta");  
            return false;  
        }  
    if (ocar=='') {
    	alert('no deje el campo de la carrera en blanco');
    } 
    if (contra=='') {
    	alert('Escriba su contraseña');
    }
     if (ccontra=='') {
    	alert('Escriba su contraseña');
    }
	
});