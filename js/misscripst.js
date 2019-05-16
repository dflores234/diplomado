/*
* Funcion que permite obtener las carreras de la BD y ponerlas en un select
*/

	function listarCarreras()
	{
	    $.ajax
	    ({
	    		
	    	url: 'php/listarCarreras.php',
	    	type: 'POST',
	    	dataType: 'JSON',
	    	beforeSend: function(){},
	    	success: function(data)
	    	{
	    		$.each(data, function(index, val) 
	    		{
	    			$('#carreras').append("<option value="+val.id_carrera+">"+val.nombre_carrera+"</option>"); 
	    		});
	    	},
	    });

	}



/*
* Permite ocultar o mostrar para dar de alta otra carrera
*/
$('#carreras').change(function(event) 
{
	var carrera = $('#carreras option:selected').text();
	    			
	if (carrera == 'Otro')
	{
		$('#otracarrera').fadeIn('fast');
	}
	else
	{
		$('#otracarrera').fadeOut('fast');
	}
					
});


function recuperarContrasena()
{
	if($('#rpemail').val() == "")
  {
                $('#rpemail').addClass('border border-danger');
                $('#repemail').attr('placeholder', 'Escriba su correo electrónico...');
  }
  else
  {
     $('#rpemail').removeClass('border border-danger');
              
        $.ajax
        ({
           
          url: 'php/usuario.controller.php',
          type: 'POST',
          dataType: 'JSON',
          data: {opcion: 'recuperar',correo: $('#rpemail').val()},
          beforeSend: function(data)
          {
            $('#btnRecuperarContrasena').html('').append('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Por favor espere...');
          },
          success: function(data)
          {
          
            if(data.status == 'ok')
            {
              console.log(data.otro);
              $('#msg').html('').append(data.msg);
              $('#rpemail').val('');

            }
            else
            {
              console.log(data.msg);
              $('#msg').html('').append(data.msg);
            }
          },
          error: function(error)
          {
            console.log(error);
          }
        });
  }


            setTimeout(function()
            {
              $('#msg').html('').append('Si olvidaste tu contraseña, puedes restablecerla aquí.');
              $('#btnRecuperarContrasena').html('').append('<i class="fa fa-paper-plane"></i> Recuperar contraseña');
            }, 5000);
}