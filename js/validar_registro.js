$('#registrar').click(function(){
	/*var mail=.trim();*/
    var cuenta_errores = 0;

    /*Validacion nombre*/
    	if ($('#txtnombre').val()=='')
        {
    		$(txtnombre).css("border","1px solid red");
    		$(txtnombre).attr("placeholder","Por favor, Introduzca su nombre");
            cuenta_errores++;
    	}
    	else
        {
    		$(txtnombre).css("border","1px solid lightgray");
            cuenta_errores--;
    	}

    /*Validacion apellido*/
    	if ($('#txtapellido').val()=='')
        {
    		$(txtapellido).css("border","1px solid red");
    		$(txtapellido).attr("placeholder","Por favor, no omita sus apellidos");
            cuenta_errores++;
    	}
    	else
        {
    		$(txtapellido).css("border","1px solid lightgray");
            cuenta_errores--;
    	}

    /*Validacion telefono*/
        if ($('#txttelefono').val()=='') 
        {
    		/*alert('');*/
    		$(txttelefono).css("border","1px solid red");
    		$(txttelefono).attr("placeholder","Por favor ingrese su número");
              cuenta_errores++;
    	}
    	else 
        {
    		if(isNaN($("#txttelefono").val())) 
            {  
                $(txttelefono).css("border","1px solid red");
                $(txttelefono).val("");
                $(txttelefono).attr("placeholder","El teléfono solo debe contener números");
                e.preventDefault();
                cuenta_errores++;
            }
            else
            {
        	   $(txttelefono).css("border","1px solid lightgray");
               cuenta_errores--;
            }
    	}

    /*Validacion correo*/
        if ($('#txtcorreo').val()=='') 
        {
        	$(txtcorreo).css("border","1px solid red");
    		$(txtcorreo).attr("placeholder","Por favor ingrese su correo");
            cuenta_errores++;
        }
        else
        {
        	$(txtcorreo).css("border","1px solid lightgray");
            cuenta_errores--;
        }

    /*Validacion carrera*/
        if ($('#txtotracarrera').val()=='') 
        {
            $(txtotracarrera).css("border","1px solid red");
            $(txtotracarrera).attr("placeholder","no deje el campo de la carrera en blanco");
            cuenta_errores++;
        }

    /*Validacion contraseña*/
        if ($('#txtcontraseña').val()=='') 
        {
        	$(txtcontraseña).css("border","1px solid red");
    		$(txtcontraseña).attr("placeholder","Escriba su contraseña");
            cuenta_errores++;
        }
        else
        {
        	$(txtcontraseña).css("border","1px solid lightgray");
            cuenta_errores--;
        }

        if ($('#txtccontraseña').val()=='') 
        {
        	$(txtccontraseña).css("border","1px solid red");
    		$(txtccontraseña).attr("placeholder","Escriba su contraseña");
              cuenta_errores++;
        }
        else
        {
        	$(txtccontraseña).css("border","1px solid lightgray");
            cuenta_errores--;
        }

        if(cuenta_errores <= 0)
        {
            var datos_registro =
            {
                nombre: $('#txtnombre').val(),
                apellido: $('#txtapellido').val(),
                correo: $('#txtcorreo').val(),
                contacto: $('#txttelefono').val(),
                carrera: $('#carreras').val(),
                semestre: $('#semestre').val(),
                ccontrasena: $('#txtccontraseña').val()
            };
            $.ajax({
                        type: 'POST',
                        data:{ datos:JSON.stringify(datos_registro), opcion:'registrar'},
                        url:'php/usuario.controller.php',
                        dataType: 'json',
                        beforeSend: function(data)
                        {
                            //Loader de registro
                            $('#registrar').html('').append('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Por favor espere...');
                        },
                        success:function(data)
                        {
                            //Alerta de retroalimentacion
                            alert(data.msg);
                            alert(data.otro);

                        },
                        error:function(error)
                        {
                            //Alerta de error
                            alert(error);
                        }
                });
                
        setTimeout(function() 
        { 
            $('#registrar').html('').append('Registrar');
        }, 1000);

        }else
        {
            alert('Verifique los campos en blanco e intente nuevamente');
        }
});

$('#btnLogin').click(function(){

    if ($('#correo').val()=='') {
        $(correo).css("border", "1px solid red");
        $(correo).attr("placeholder","no deje vacio");

    }
    else{
        $(correo).css("border", "1px solid lightgray");
    }
    if ($('#contraseña').val()=='') {
        $(contraseña).css("border", "1px solid red");
        $(contraseña).attr("placeholder","no deje vacio");
    }
    else{
        $(contraseña).css("border", "1px solid lightgray");
    }
});

$('#cambios').click(function()
{
    if ($('#contraseña').val()=='')
    {
        $(contraseña).css("border","1px solid red");
        $(contraseña).attr("placeholder","Escriba su contraseña");
    }
    else
    {
        $(contraseña).css("border","1px solid lightgray");
    }
     
    if ($('#ccontraseña').val()=='')
    {
        $(ccontraseña).css("border","1px solid red");
        $(ccontraseña).attr("placeholder","Escriba su contraseña");
    }
    else
    {
        $(ccontraseña).css("border","1px solid lightgray");
    }

});