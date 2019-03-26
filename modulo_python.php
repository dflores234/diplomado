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
	     <title>Phyton</title>
	       <meta charset="utf-8">
         <link rel="shortcut icon" href="img/istblanco.png">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="css/participante2.css">
          <link rel="stylesheet" href="css/bootstrap.min.css">
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
                    <div class="container-fluid text-right" style="background-color: #23AAE1">
                      <nav class="navbar navbar-expand-lg navbar-light container" style="background-color: #23AAE1">
                        <a class="navbar-brand" href="participante_index.php">
                            <img src="img/Diplomado3 - copia.png" width="160" height="63" class="d-inline-block align-top" alt="">
                        </a> 
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="navbar-nav ml-auto">
                                <div>
                                  <a href="#menu-toggle" class="btn btn-default chatb" id="menu-toggle"> 
                                    <img src="img/group.svg" width="25" height="25" class="d-inline-block align-top" alt="">
                                </a>
                                </div>
                                <div class="dropdown pmd-dropdown pmd-user-info ml-auto">
                                    <a href="javascript:void(0);" class="btn-user dropdown-toggle media align-items-center" data-toggle="dropdown" data-sidebar="true" aria-expanded="false">
                                        <img class="mr-2 rounded-circle" src='<?php echo $avatar; ?>' width="40" height="40" alt="avatar">
                                        <div class="media-body" id="userc">
                                          <?php echo $nombre; ?>
                                        </div>
                                        <i class="material-icons md-light ml-2 pmd-sm"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="editar_perfil.php">
                                            Editar Perfil
                                        </a>
                                        <a class="dropdown-item" href="php/destroysession.php">
                                            Cerrar sesión
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </nav>
                </div>  
                <!--Fin menu-->
                <section class="main-section">
    	             <div style="width: 500px;margin: 0 auto;">
    		               <h1> <img src="img/code.svg" width="70" >PYTHON </h1>
    	             </div>
                   <section style="background-color: #0560A0">
                    <div class="contanier">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                     <iframe style="margin-left: 10px" src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21116&amp;authkey=ADddGjuHiXXNY8w&amp;em=2&amp;wdAr=1.3333333333333333" width="500" height="400" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                          <h3>Introducción a Python</h3><hr style="background-color: black">
                              <ul align="left" style="font-size: 14px;">
                                 <li>¿Qué es Python?</li>
                                <li>Ventajas de python </li>
                                <li>Entorno de python</li>
                                <li>Declaracíon de variables</li>
                                <li>Imprimir mensajes</li>
                                <li>Ingresar datos</li>
                                <li>Operaciones matematicas y funciones matematicas</li>
                                <li>Importar librerias</li>                              
                              </ul>
                        </div>
                      </div>
                    </div> 
                   </section>
                    <hr style="margin:0px; background-color: black">
    	             <section style="background-color: #0560A0">
                    <div class="contanier">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br>
                         <iframe style="margin-left: 10px" src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21117&amp;authkey=AMEzBstc55hAcco&amp;em=2&amp;wdAr=1.7777777777777777" width="500" height="320" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                          <h3>Sentecias en Python</h3><hr style="background-color: black">
                              <ul align="left" style="font-size: 14px;">
                                <li>Sentencia 'if'</li>
                                <li>Operadores condicionales </li>
                                <li>Errores comunes</li>
                                <li>Sentencia 'elif'</li>
                                <li>Misceláneo</li>
                                <li>Conteo</li>
                                <li>Suma</li>
                                <li>Intercambio</li>
                                <li>Banderas</li>
                                <li>Máximos y mínimos</li>
                                <li>Comentarios</li>
                              </ul>
                        </div>
                      </div>
                    </div> 
                   </section>
                   <hr style="margin:0px; background-color: black">
                   <section style="background-color: #0560A0">
                    <div class="contanier">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="img/descargar.png" width="150" style="margin-left: 100px; margin-top: 5px" >
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <h3>Descarga de material</h3><hr>
                           <li><a href="https://www.python.org/downloads/" style="color:white">Python</a></li>

                        </div>
                      </div>
                    </div> 
                   </section>
                </section>
     </div>
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
              <div class="infof">
                
                  <img src="img/phone.svg" width="20"> +52 (867) 712-0327 <br>
                  <img src="img/pin.svg" width="20"> contacto@centroist.org
                
              </div>
                
                <div class="infod">
                    Av. Luis Donaldo Colosio Km. 2.5,<br>
                    Valle real<br>
                    Nuevo Laredo, Tamaulipas. México. <br>
                    CP: 88000<br>
                    © 2019 Copyright | Centro de Innovación Socioecónomica y Tecnológica
                  
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
                  </li>
                  <br>
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
          <!-- Cuadri row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 bg-light">
          <img src="img/logo4.png" width="110" id="logo">
          <img src="img/Logo CENTRO IST BLANCO-05[1393].png" width="180" height="50" id="logo" >
          <img src="img/logo3.png" width="180" id="logo">
          <img src="img/itnl.gif" width="70" id="logo" style="">
          <img src="img/logo2.png" width="150" id="logo" style="margin-left: ">
        </div>
        <!-- Copyright -->

    </footer>
</body>
</html>

    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--Script para el sidebar-->
     <script type="text/javascript" src="js/Chat.js"></script>
      <!--chat de jona-->
    <script type="text/javascript">
    $(function() 
    {
        $('#enviar').click(function(event)
        {
            if(!$('#txtMsg').val() == '')
            {
                insertarChat($('#txtMsg').val())
            }
        });

        $('#txtMsg').keydown(function(event) {
            /* Act on the event */
            if(event.which == 13)
            {
                if(!$('#txtMsg').val() == '')
                {
                    insertarChat($('#txtMsg').val())
                }    
            }
        });
    });

    function insertarChat(texto)
    {
        var date = '2019-01-28 16:26:07'
        var control = '<li style="width:100%;">'+'<div class="msj-rta macro">'+'<div class="text text-r">'+'<p>'+texto+'</p>'+'<p><small>'+date+'</small></p>'+'</div>' +'</li>';

        $('ol').append(control).scrollTop($('ol').prop('scrollHeight'));
        $('#txtMsg').val('');
    }
</script>