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
    header("Location: index.html");
  }
?>

 <!DOCTYPE html>
<html>
  <head>
  	   <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="shortcut icon" href="img/istblanco.png">
  	     <title>Editar perfil</title>
  </head>
  <body>
    <!--Menu-->
    
      <?php include 'header2.php'; ?>
    <!--Fin menu-->
    <div>
	     <div class="container">
          <h1 class="text-left">
            Editar Perfil
          </h1><hr>
	         <div class="row">
            <!-- columna izquierda -->
              <div class="col-md-5">
                <div class="text-center">
                  <img src='<?php echo $avatar; ?>'width="100" height="100" class="avatar rounded-circle" alt="avatar" id="imgPerfil"><br><br>
                  <input type="file" name="" accept="image/jpeg">
                </div>
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
                <h3>
                  Informacion personal
                </h3>
        <form class="form-horizontal" role="form" id="form-cambios">
          <div class="form-group">
            <label class="col-lg-4 control-label">Numero de contacto:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="" placeholder="Celular o Fijo">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Correo:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="Ejemplo: Juan2@mail.com">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Contraseña:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" placeholder="*******" required="" id="contraseña">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Confirmar contraseña:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" placeholder="*******" required="" id="ccontraseña">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary"  id="cambios" value="Guardar cambios">
              <span></span>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
</div>
</html>

<!--  JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/validar_registro.js"></script>
    <script type="text/javascript" src="js/validar.js"></script>
</body>

<script type="text/javascript">
  $(function() 
  {
      
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




