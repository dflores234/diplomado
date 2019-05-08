 function verificarCursosHabilitados()
    {
      $.ajax
      ({
          url: 'php/verificarModuloActivo.php',
          type: 'POST',
          dataType: 'JSON',
          success: function(data)
          {
              $('.btn.disabled').each(function() 
              {
                if($(this).data('id') == data.ids)
                {
                  $(this).removeClass('btn disabled');
                }
              });
          },
          error: function(error)
          {
            console.log(error);
          }            
      });
    }