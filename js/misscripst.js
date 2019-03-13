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