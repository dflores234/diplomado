<?php 
  //http://velozityweb.com/blog/php/como-subir-imagenes-o-fotos-al-servidor-con-php/#sthash.Dwe6S2jE.dpbs
//https://www.w3schools.com/php/php_file_upload.asp
//https://codigosdeprogramacion.com/2017/03/02/curso-de-php-y-mysql-21-recuperar-contrasena-por-email/
//https://www.todoexpertos.com/preguntas/6bdxo3eh7n6q5ky6/como-puedo-subir-una-imagen-al-servidor-y-guardar-la-ruta-en-la-base-de-datos-con-php-y-mysql-he-probado-con-mas-de-5-videos
//https://manuais.iessanclemente.net/index.php/Almacenamiento_de_imágenes_en_bases_de_datos_con_PHP
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
	  				<a class="navbar-brand" href="index.html">
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
                    <input type="text" placeholder="Correo electronico" name="" class="form-control" id="correo" required="">
                  </div>
                  <div class="form-group" id="contraseña-group">
                    <input type="password" placeholder="Contraseña" name="" class="form-control" id="contraseña" required="">
                  </div>
                  <button type="button" class="btn btn-info" id="btnLogin">
                    <i class="fas fa-sign-out-alt"></i>
                    Ingresar
                  </button>
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
      <div class="modal-body">
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
                              <p style="color: white;">Si olvidaste tu contraseña, puedes restablecerla aquí.</p>
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
                                        <button class="btn btn-primary pull-right btn-sm"type="button" id="btnRecuperarContrasena">
                                          Recuperar contraseña
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
<footer class="page-footer font-small blue pt-4 bg-dark">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Cuadricula row -->
      <div class="row">

        <!-- Cuadricula column -->
        <div class="col-md-6 mt-md-0 mt-3">
          <!-- Contenido -->
          <h5 class="text-uppercase text-light">
            Centro de Innovación Socioecónomica y Tecnológica
          </h5>
          <div class="">
            <p class="text-light">
              <i class="fas fa-phone"></i> +52 (867) 712-0327 <br>
              <i class="fas fa-envelope-open"></i> contacto@centroist.org
            </p>
          </div>
            
            <div class="infod">
              <p class="text-light">
               Av. Luis Donaldo Colosio Km. 2.5,<br>
               Valle real<br>
               Nuevo Laredo, Tamaulipas. México. <br>
               CP: 88000 <br>
                © 2019 Copyright | Centro de Innovación Socioecónomica y Tecnológica
              </p>
            </div>
        </div>
        <!-- Cudri column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Cuadri column -->
        <div class="" style="display: inline-block;">

            <!-- Links -->
            <!--<h5 class="text-uppercase text-light">Siguenos</h5>-->

            <ul class="list-unstyled ">
              <li>
                <a href="https://www.facebook.com/centroist/"><img src="img/facebook.svg" width="35"></a>
              </li> <br>
              <li>
                <a href="http://centroist.org"><img src="img/istblanco.png" width="35" height="30"></a>
              </li>
              
            </ul>

          </div>
          <!-- Cuadri column -->

          <!-- Cuadri column -->
          <div class="col-md-3 mb-md-0 mb-3">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3541.4031901302506!2d-99.50885468520613!3d27.425542682909526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866118b8bdd010a5%3A0x1bbdad4f53dc3ec1!2sCentro+Cultural+Nuevo+Laredo!5e0!3m2!1ses-419!2smx!4v1551718555256" width="500" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <!-- Cuadri column -->

      </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 bg-light">
      <img src="img/logo4.png" width="110" id="logo">
      <img src="img/Logo CENTRO IST BLANCO-05[1393].png" width="180" height="50" id="logo">
      <img src="img/logo3.png" width="180" id="logo">
      <img src="img/itnl.gif" width="70" id="logo" style="">
      <img src="img/logo2.png" width="150" id="logo" style="margin-left: ">
    </div>
    <!-- Copyright -->

</footer>
  <!-- Footer -->



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
          
        $('#btnLogin').click(function()
<<<<<<< HEAD
        {
=======
        {/*
>>>>>>> e9c34541b9c034964337e91a10ccf35291dc7614
            $.ajax
                  ({
                    url: 'php/usuario.controller.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {opcion: 'iniciar',correo: $('#correo').val(),contrasena: $('#contraseña').val()},
                    beforeSend: function()
                    {
                        $('#btnLogin').html('').append('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Por favor espere...');
                    },
                    success: function(data)
                    {
                      if(data.status == 'ok')
                      {
                         var url = 'participante_index.php';
                         $(location).attr('href',url);
                      }else
                      {
                        $('#modalTitle').append('ATENCION!').css('color','white');
                        $('.modal-body').append(data.msg).css('color','white');
                        $('#modalRetro').modal({show: true});
                        $('#btnLogin').html('').append('<i class="fas fa-sign-out-alt"></i>Ingresar');
                      }
                    },
                    error: function(error)
                    {
                      $('#btnLogin').html('').append('<i class="fas fa-sign-out-alt"></i>Ingresar');
                    }
<<<<<<< HEAD
                  });
=======
                  });*/
>>>>>>> e9c34541b9c034964337e91a10ccf35291dc7614
        });

        $('#btnRecuperarContrasena').click(function()
        {
            if($('#rpemail').val() == "")
            {
                $('#rpemail').addClass('border border-danger');
                $('#repemail').attr('placeholder', 'Escriba su correo electrónico...');
            }else
            {
              $('#rpemail').removeClass('border border-danger');
               $.ajax
                  ({
                    url: 'php/usuario.controller.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {opcion: 'enviar',correo: $('#correo').val()},
                    beforeSend: function()
                    {
                        $('#btnRecuperarContrasena').html('').append('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Por favor espere...');
                    },
                    success: function(data)
                    {
                      if(data.status == 'ok')
                      {
                        console.log(data);
                      }else
                      {
                        console.log(data);
                      }
                    },
                    error: function(error)
                    {
                      $('#btnRecuperarContrasena').html('').append('<i class="fas fa-sign-out-alt"></i>Ingresar');
                    }
                  });
            }
        });

      });

    </script>

