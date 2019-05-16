<?php

  include 'php/sesion.class.php';

  $session = new Session();

  if ($session->getSession('id')) 
  {
    $avatar = $session->getSession('avatar');
    $nombre = $session->getSession('nombre');
  }
  else 
  {
    header("Location: index.php");
  }
?>

 <!DOCTYPE html>
<html>
  <head>
  	   <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/editar_perfil.css">
         <!-- Los iconos tipo Solid de Fontawesome-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">      
        <link rel="shortcut icon" href="img/istblanco.png">
  	     <title>Editar perfil</title>
  </head>
  <body>
    <div id="wrapper" class="toggled">
        <div id="sidebar-wrapper" class="">
            <div class="col-sm-12 col-sm-offset-4 frame">
              <ol id="chat">
                  <li style="width:90%">
                      <div class="msj macro">
                              <div class="text text-l">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                  <p><small>2019-01-28 16:26:07</small></p>
                              </div>
                      </div>
                  </li>
              </ol>
              <div>
                  <div class="msj-rta macro">                        
                      <div class="text text-r" style="background:whitesmoke !important">
                          <input class="mytext" placeholder="Escribe un mensaje..." id="txtMsg" />
                      </div> 
                  </div>
                  <div style="padding:10px;">
                      <span class="glyphicon glyphicon-share-alt" id="enviar"></span>
                  </div>              
              </div>
            </div>  
        </div>
        <div id="page-content-wrapper">
            <div class="">
              <div class="row">
                <div class="col-lg-12"> 
                <!--Menu-->
                  <?php include 'header2.php'; ?>
                <!--Fin menu-->
                        <div>
                           <div class="container">
                              <h1 class="text-center">
                                Editar Perfil
                              </h1><hr>
                               <div class="row">
                                <!-- columna izquierda -->
                                  <div class="col-md-5">
                                    <form method="post" action="#" enctype="multipart/form-data">
                                        <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="<?php echo $avatar; ?>" id="imgPerfil">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Cambiar foto de perfil</h5>
                                                <div class="form-group">
                                                    <label for="image">Seleccionar nueva imagen:</label>
                                                    <input type="file" class="form-control-file" name="image" id="image">
                                                </div>
                                                <button class="btn btn-primary upload float-right" disabled="disabled">Subir <i class="fas fa-upload"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <div>
                                       <table class="table">
                                        <br>
                                          <thead>
                                            <tr>
                                              <th scope="col" style="padding:8px;">
                                                <button type="button" style="width: 80px; padding: 0px;border:0px;">
                                                  <img src="img/avatar1.png" width="80" id="avatar1"></button>
                                              </th>
                                              <th scope="col" style="padding:8px;">
                                                <button type="button" style="width: 80px; padding: 0px;border:0px;">
                                                  <img src="img/avatar2.png" width="80" id="avatar2">
                                                </button>
                                              </th>
                                              <th scope="col" style="padding:8px;">
                                                <button type="button" style="width: 80px; padding: 0px;border:0px;">
                                                <img src="img/avatar3.png" width="80" id="avatar3">
                                              </button>
                                            </th>
                                            </tr>
                                          </thead>
                                           <thead>
                                            <tr>
                                              <th scope="col" style="padding:8px;">
                                                <button type="button" style="width: 80px; padding: 0px;border:0px;">
                                                  <img src="img/avatar4.png" width="80" id="avatar4">
                                                </button>
                                              </th>
                                              <th scope="col" style="padding:8px;">
                                                <button type="button" style="width: 80px; padding: 0px;border:0px;">
                                                  <img src="img/avatar5.png" width="80" id="avatar5">
                                                </button>
                                              </th>
                                              <th scope="col" style="padding:8px;">
                                                <button type="button" style="width: 80px; padding: 0px;border:0px;">
                                                  <img src="img/avatar6.png" width="80" id="avatar6">
                                                </button>
                                              </th>
                                            </tr>
                                          </thead>
                                      </table>
                                    </div>
                                  </div>
                                <!-- columna para formulario de editar -->
                                  <div class="col-md-7 personal-info">

                              
                                                              
                            <form class="form-horizontal" role="form" method="post" onsubmit="return validar()"
                            name="form">

                              <div class="form-group">
                                <label class="col-lg-4 control-label">Número de contacto:</label>
                                <div class="col-lg-8">
                                  <input class="form-control" type="tel" value="" placeholder="Celular o Fijo" maxlength="10" id="edittel">
                                  
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-lg-3 control-label">Correo:</label>
                                <div class="col-lg-8">
                                  <input class="form-control" type="email" placeholder="Ejemplo: Juan2@mail.com" id="mailedit">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Contraseña:</label>
                                <div class="col-md-8">
                                  <input class="form-control" type="password" placeholder="*******" id="editcontraseña" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Confirmar contraseña:</label>
                                <div class="col-md-8">
                                  <input class="form-control" type="password" placeholder="*******"id="editccontraseña">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-8">
                                  <button type="button" class="btn btn-primary float-right" id="cambios"><i class="far fa-save"></i>
                                    Guardar
                                  </button>
                                  <span></span>
                                </div>
                              </div>
                            </form>
                          </div>
                      </div>
                    </div>
                    <hr>
                    </div> 
                    <?php include "footer.php" ?>     
                </div>
              </div>
            </div>
        </div>
      </div> 
</body>
</html>

<!--  JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <!--Script para deslisar el chat-->
    <script type="text/javascript" src="js/Chat.js"></script>
    <script type="text/javascript" src="js/validar_registro.js"></script>
    <script type="text/javascript" src="js/validar.js"></script>
    </script>

     <script type="text/javascript">
       function validar()
       {
        if (form.editcontraseña.value==''|| form.editccontraseña.value=='') 
        {
          $(editcontraseña).css("border","1px solid red");$(editccontraseña).css("border","1px solid red");return false
        }
        if (form.editcontraseña.value!=form.editccontraseña.value) {alert('La contraseñas no coinciden');
        $(editcontraseña).css("border","1px solid lightgray");$(editccontraseña).css("border","1px solid lightgray");return false}
        else
          return true;
       }

       $('#cambios').click(function()
       {
        if(isNaN($("#edittel").val())) 
            {  
                $(edittel).val("");
                $(edittel).attr("placeholder","El teléfono solo debe contener números");
                
            }

       });
         /*$(function() 
    {
        $('#enviar').click(function(event)
=======
    $(function() 
      {

        $("#image").change(function()
>>>>>>> cb1b8ebb4af918054cbfe484fdab510e4873a576
        {
          $(".upload").prop("disabled", this.files.length == 0);
        });

<<<<<<< HEAD
        $('#txtMsg').keydown(function(event) {
            
            if(event.which == 13)
            {
                if(!$('#txtMsg').val() == '')
                {
                    insertarChat($('#txtMsg').val())
                }    
            }
     //   });
   // });

   /* function insertarChat(texto)
    {
        var date = '2019-01-28 16:26:07'
        var control = '<li style="width:100%;">'+'<div class="msj-rta macro">'+'<div class="text text-r">'+'<p>'+texto+'</p>'+'<p><small>'+date+'</small></p>'+'</div>' +'</li>';

        $('ol').append(control).scrollTop($('ol').prop('scrollHeight'));
        $('#txtMsg').val('');
    }*/

  $(function() 
  {
      $("#image").change(function()
      {
        $(".upload").prop("disabled", this.files.length == 0);
      });
  
        $(".upload").on('click', function()
        {
          var formData = new FormData();
          var files = $('#image')[0].files[0];
          formData.append('file',files);
         
            $.ajax
            ({
                url: 'php/subirFoto.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) 
                {
                  console.log(data);
                    if (data.status == 'ok') 
                    {
                        $(".card-img-top").attr("src", data.src);
                        alert("Se ha actualizado correctamente la imagen de perfil.");
                    } 
                    else 
                    {
                        alert("Ha ocurrido un error al actualizar la imagen de perfil.");
                    }
                }
            });
          
        return false;

        });

        $('#avatar1').click(function()
        {
            var avatar = $('#avatar1').attr('src');
            $('#imgPerfil').attr('src',avatar);
        });


        $('#avatar2').click(function()
        {
            var avatar = $('#avatar2').attr('src');
            $('#imgPerfil').attr('src',avatar);
        });

        $('#avatar3').click(function()
        {
            var avatar = $('#avatar3').attr('src');
            $('#imgPerfil').attr('src',avatar);
        });

        $('#avatar4').click(function()
        {
            var avatar = $('#avatar4').attr('src');
            $('#imgPerfil').attr('src',avatar);
        });

        $('#avatar5').click(function()
        {
            var avatar = $('#avatar5').attr('src');
            $('#imgPerfil').attr('src',avatar);
        });

        $('#avatar6').click(function()
        {
            var avatar = $('#avatar6').attr('src');
            $('#imgPerfil').attr('src',avatar);
        });

      });  
</script>



