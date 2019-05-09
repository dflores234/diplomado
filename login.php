<?php 
  //http://velozityweb.com/blog/php/como-subir-imagenes-o-fotos-al-servidor-con-php/#sthash.Dwe6S2jE.dpbs
//https://www.w3schools.com/php/php_file_upload.asp
//https://codigosdeprogramacion.com/2017/03/02/curso-de-php-y-mysql-21-recuperar-contrasena-por-email/
//https://www.todoexpertos.com/preguntas/6bdxo3eh7n6q5ky6/como-puedo-subir-una-imagen-al-servidor-y-guardar-la-ruta-en-la-base-de-datos-con-php-y-mysql-he-probado-con-mas-de-5-videos
//https://manuais.iessanclemente.net/index.php/Almacenamiento_de_imágenes_en_bases_de_datos_con_PHP
//https://www.jose-aguilar.com/blog/como-subir-una-imagen-con-jquery-ajax-php/
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Iniciar Sesión</title>
			<meta charset="utf-8">
      <link rel="shortcut icon" href="img/istblanco.png">
			<!--FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css\login.css">
			<!-- Los iconos tipo Solid de Fontawesome-->
      <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
		</head>
		<body>
			<!--Menu-->
    		<div class="container-fluid" style="background-color: #23AAE1" >
    			<nav class="navbar navbar-expand-lg navbar-light container" style="background-color: #23AAE1">
	  				<a class="navbar-brand" href="index.php">
	  					<img src="img/Diplomado3 - copia.png" width="160" height="63" class="d-inline-block align-top" alt="">
	  				</a> 
				</nav>
    		</div>  
    		<!--Fin menu-->
    		<!--Inicio del login-->
			<div class="modal-dialog text-center logins">
				<div class="col-sm-8 main-section">
					<div class="modal-content">
						<div class="col-12 user-img">
							<img src="img/Avatar.png">
						</div>
            <div>
                <div class="col-12">
                  <div class="form-group " id="user-group">
                    <input type="text" placeholder="Correo electrónico" class="form-control" id="correo" required="">
                  </div>
                  <div class="form-group" id="contraseña-group">
                    <input type="password" placeholder="Contraseña" class="form-control" id="contraseña" required="">
                  </div>
                  <button type="button" class="btn btn-info" id="btnLogin">
                    <i class="fas fa-sign-out-alt"></i>
                    Ingresar
                  </button>
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitches">
                    <label class="custom-control-label" for="customSwitches">Alumno/Maestro</label>
                  </div>
                </div>
            </div>
					
						<div class="col-12 cuenta">
							¿No tienes cuenta?
							<a href="registrar.php">
								Crea una
							</a>
						</div>
						<div class="col-12 cuenta">
							<a href="#" data-target="#pwdModal" data-toggle="modal"> 
								¿Olvido su contraseña?
							</a>
						</div>
					</div>
				</div>
			</div>
		

  <!-- Modal Retroalimentación-->
  <div class="modal fade" id="modalRetro" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="mdlBody">
      </div>
    </div>
  </div>
</div>

<!--modal recueprar contraseña-->
  <div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body">
              <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                              <p style="color: white;" id="msg">Si olvidaste tu contraseña, puedes restablecerla aquí.</p>
                                <div class="panel-body">
                                        <div class="form-group">
                                            <label for="rpemail" style="color: white;">Ingrese correo electrónico:</label>
                                            <div class="input-group mb-2">
                                               <div class="input-group-prepend">
                                                  <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                                </div>
                                                <input class="form-control" placeholder="example@example.com" id="rpemail" type="email">
                                          </div>
                                        </div>
                                        <button class="btn btn-primary pull-right"type="button" id="btnRecuperarContrasena">
                                          <i class="fa fa-paper-plane"></i> Recuperar contraseña
                                        </button>
                                </div>
                        </div>
                    </div> 
                </div>
          </div>
          <div class="modal-footer">
              <button class="btn btn-danger pull-left btn-sm" data-dismiss="modal" aria-hidden="true">Cancelar</button>
          </div>
      </div>
    </div>
  </div>

           <!-- Footer -->
<?php include("footer.php") ?>



		</body>
	</html> 
	
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script type="text/javascript" src="js/validar_registro.js"></script>
    <script  type="text/javascript" src="js/misscripst.js"></script>
    <script type="text/javascript">
      $(function() 
      {
           
        $('#btnRecuperarContrasena').click(function()
        {
          recuperarContrasena();
        });

      });
    </script>

