$('#restablecer').click(function(){
if ($('#txtcontraseña').val()!= $('#txtccontraseña').val()) {
    	swal({
        title: "La contraseñas no coinciden",
          text: "por favor vuelva a introducir las contraseñas",
          type: "warning",
          /*showCancelButton: true,*/
          confirmButtonColor: '#3085d6',
          /*cancelButtonColor: '#d33',*/
          confirmButtonText: 'Regresar',
          /*cancelButtonText: "Cancelar"*/
        });
    
    }

});

		



