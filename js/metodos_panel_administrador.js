function listarCuentas()
{
  $('#cuentas').html('');
	$.getJSON("../php/listarcuentas.php", function(result)
  {
      $.each(result, function(i, field) 
      {
        $('#cuentas').append('<tr><td>'+(i+1)+'</td><td>'+field.nombre_completo+'</td><td>'+field.correo_electronico+'</td><td>'+field.numero_contacto+'</td><td>'+field.nombre_carrera+'</td><td><input type="checkbox" name="cuenta_'+i+'" style="margin-left: 5px;" data-id="'+field.id_alumno+'"></td></tr>');
      });
  });
}



function listarModulos()
{

  $('#modulos').html('');
  $('#tblModulos').html('');

	$.getJSON("../php/listarModulos.php", function(result)
    {
      $.each(result, function(i, field) 
      {
      	$('#modulos').append('<option value="'+field.id_modulo+'">'+field.nombre_modulo+'</option>');
        $('#tblModulos').append('<tr class="text-center"><td>'+field.nombre_modulo+'</td><td>'+field.fecha_inicio+'</td><td>'+field.fecha_fin+'</td></tr>');
      });
  });
}


function listarNombreModulo()
{

  $.getJSON("../php/listarModuloNombre.php", function(result)
    {
      $.each(result, function(i, field) 
      {
        $('#modulosM').append('<option value="'+field.id_modulo+'">'+field.nombre_modulo+'</option>');
      });
  });
}

function listarMaestros()
{

  $('#maestro').html('');

  $.getJSON("../php/listarMaestros.php", function(result)
    {
      $.each(result, function(i, field) 
      {
          $('#maestro').append('<tr class="text-center"><td>'+field.nombre_completo+'</td><td>'+
            field.correo_electronico+'</td><td>'+field.numero_contacto+'</td><td>'+field.nombre_modulo+'</td></tr>');
      });

  });
}


function modificarFechasModulos()
{

  var errores = 0;

  if ($('#txtFechaInicio').val() == '')
  {
    $('#txtFechaInicio').addClass('border border-danger');
    errores++;
  }else
  {
    $('#txtFechaInicio').removeClass('border border-danger');
    errores--;
  }


  if ($('#txtFechaFin').val() == '')
  {
    $('#txtFechaFin').addClass('border border-danger');
    errores++;
  }else
  {
    $('#txtFechaFin').removeClass('border border-danger');
    errores--;
  }
  if(errores <= 0)
  {

    $.ajax
    ({
        url: '../php/modificarFechasModulos.php',
        type: 'POST',
        dataType: 'JSON',
        data: {id_modulo: $('option:selected').attr('value'),fecha_inicio: $('#txtFechaInicio').val(), fecha_fin:$('#txtFechaFin').val() },
        beforeSend: function(data)
        {
            $('#btnModificarFecha').html('').append('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Por favor espere...');
        },
        success: function(data)
        {
            if(data.status == 'ok')
            {
              alert(data.msg);
              $('#btnModificarFecha').html('').append('Cambiar fecha');
              listarModulos();
            }
                       
        },
        error: function(error)
        {
            console.log(error);
        }
    });

      

      //setTimeout(function(){ $('#btnModificarFecha').html('').append('Cambiar fecha');}, 500);

  }

}


function mostrarFechaActual()
{
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10){dd = '0' + dd;} 
    if (mm < 10){mm = '0' + mm;} 

    var today = dd + '/' + mm + '/' + yyyy;
    $('#fechaActual').append(today);
}

