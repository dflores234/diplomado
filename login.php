<?php 

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
	  				<!--button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    				<span class="navbar-toggler-icon">
	    				</span>
	  				</button-->
				</nav>
    		</div>  
    		<!--Fin menu-->
    		<!--Inicio del login-->
			<div class="modal-dialog text-center logins">
				<div class="col-sm-8 main-section">
					<div class="modal-content">
						<div class="col-12 user-img">
							<img src="img/ico.png">
						</div>
            <form>
                <div class="col-12" action="participante_index.php">
              <div class="form-group " id="user-group">
                <input type="text" placeholder="Correo electronico" name="" class="form-control" id="correo" required="">
              </div>
              <div class="form-group" id="contraseña-group">
                <input type="password" placeholder="Contraseña" name="" class="form-control" id="contraseña" required="">
              </div>
              <button type="submit" class="btn btn-info" id="btnLogin"><i class="fas fa-sign-out-alt"></i> Ingresar 
              </button>
              <!--div class="lds-hourglass"></div-->

            </div>
            </form>
					
						<div class="col-12 cuenta">
							¿No tienes cuenta?
							<a href="registrar.php">
								Crea una
							</a>
						</div>
						<div class="col-12 cuenta">
							<a href="#"> 
								¿Olvido su contraseña?
							</a>
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
              <img src="img/phone.svg" width="20"> +52 (867) 712-0327 <br>
              <img src="img/pin.svg" width="20"> contacto@centroist.org
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
      <img src="img/Logo CENTRO IST BLANCO-05[1393].png" width="180" height="50" id="logo" style="background: #A0A0A0; border-radius: 6px;">
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
          {
            $.ajax
                  ({
                    url: 'php/usuario.controller.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {opcion: 'iniciar',correo: 'dflores234@gmail.com',contrasena: '@Sefuerte365!'},
                    beforeSend: function(){},
                    success: function(data)
                    {
                      console.log(data);
                      if(data.status == 'ok')
                      {
                         var url = 'participante_index.php';
                         $(location).attr('href',url);
                      }
                    },
                  });
          });

      });

    </script>

