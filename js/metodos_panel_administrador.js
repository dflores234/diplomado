function listarCuentas()
{
	$.getJSON("../php/listarcuentas.php", function(result)
    {
      $.each(result, function(i, field) 
      {

        $('#cuentas').append('<tr><td>'+field.nombre_completo+'</td><td>'+field.correo_electronico+'</td><td>'+field.numero_contacto+'</td><td>'+field.nombre_carrera+'</td><td><input type="checkbox" name="" style="margin-left: 5px"></td></tr>');
      });
  });
}



function listarModulos()
{
	$.getJSON("../php/listarModulos.php", function(result)
    {
      $.each(result, function(i, field) 
      {
      		$('#modulos').append('<option value="'+field.id_modulo+'">'+field.nombre_modulo+'</option>');
      });
  });
}

