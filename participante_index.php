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
	     <title>Participante</title>
	       <meta charset="utf-8">
         <link rel="shortcut icon" href="img/istblanco.png">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="css/participante_index.css">
          <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="css/bootstrap.min.css">

    </head>
    <body>  
      <div id="wrapper" class="toggled">
        <div id="sidebar-wrapper">
            
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
                  <div class="container-fluid text-right" style="background-color: #23AAE1" >
                    <nav class="navbar navbar-expand-lg navbar-light container" style="background-color: #23AAE1">
                      <a class="navbar-brand" href="#">
                        <img src="img/Diplomado3 - copia.png" width="160" height="63" class="d-inline-block align-top" alt="">
                      </a> 
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                        </span>
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
                              <div class="media-body" id="usuarioc">
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
                <!--Inicio acordion-->
                <section class="main-section">
                  <div id="accordion" role="tablist">
                    <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingOne">
                          <h5 class="mb-0">
                            <img src="img/code.svg" width="30" id="imgse">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Python
                            </a>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >
                          <div class="card-body bg-info" style="background:url(img/fondo2.jpg); background-size: cover; background-position: center;">
                            <h5 style="color:white">
                              Objetivo del curso:
                            </h5>
                            <p style="color:white">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <a href="modulo_python.php">
                              <img src="img/ir.png" width="50" >
                            </a>
                          </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingTwo">
                          <h5 class="mb-0">
                            <img src="img/Industry-4.0_01.png" width="40" id="imgse">
                            <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                              Sensibilización y capacitación en I4.0 e IoT
                              
                            </a>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body bg-info" style="background:url(img/fondo42.png); background-size: cover; background-position: center;">
                            <h5 style="color: white">
                              Objetivo del curso:
                            </h5>
                            <p style="color: white">
                               El módulo de iniciación a industria 4.0 tiene un enfoque de concepto, global y generalista, su objetivo es aportar una visión de referencia sobre las tecnologías y tendencias a nivel mundial que definen las fábricas de mañana, la industria 4.0 y el concepto de internet de las cosas (IoT, internet of things).
                            </p>
                            <h5 style="color: white">
                              Competencias a adquirir:
                            </h5><br>
                            <p style="color: white">
                             •Capacidad de sensibilización, visión de referencia de lo que es Industria 4.0, ámbitos de la misma y de las tecnologías involucradas <br>
                             •Capacidad de identificación de las áreas de mejora en la empresa particular del asistente 
                            </p><br>
                            <a href="modulo_sensibilizacion.php">
                              <img src="img/ir.png" width="50" >
                            </a>
                          </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingThree">
                          <h5 class="mb-0">
                            <img src="img/hacker_cyber_crime-512.png" width="40" id="imgse">
                            <a data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                              Ciberseguridad 
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body bg-info" style="background:url(img/fondo6.jpg); background-size: cover; background-position: center;">
                            <h5 style="color: white;">
                              Objetivo del curso:
                            </h5>
                            <p style="color: white;">
                              Transferencia de conocimientos desde las normativas y estándares, generalidades sobre la ciberseguridad en la industria, hasta hacking ético
                            </p>
                            <h5 style="color: white">
                              Competencias a adquirir:
                            </h5>
                            <p style="color: white;">
                             •Concienciación y dominio conceptual de lo que abarca un sistema de ciberseguridad <br>•Conocimiento de las técnicas y metodologías de identificación y recolección de evidencia digital <br>
                             •Experiencia práctica en el manejo de las herramientas que ofrece la ciberseguridad
                            </p><br>
                            <a href="modulos.php">
                              <img src="img/ir.png" width="50" >
                            </a>
                          </div>
                        </div>
                    </div>
                    <div class="card">
                      <div class="card-header bg-white" role="tab" id="headingFour">
                        <h5 class="mb-0">
                          <img src="img/data.svg" width="40" id="imgse">
                          <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Big Data, IoT
                          
                          </a>
                        </h5>
                      </div>
                      <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body bg-info" style="background:url(img/fondo5.jpg); background-size: cover; background-position: center;">
                          <h5 style="color: white">
                            Objetivo del curso:
                          </h5>
                          <p style="color: white">
                            Permitir que cuenten con conocimientos en soluciones Big Data, con el fin de identificar su potencial, sus impactos, y entender cómo implementarlo.
                          </p>
                          <h5 style="color: white">
                            Competencias que se esperan adquirir:
                          </h5>
                          <ul style="color: white">
                            <li>
                              Dominio conceptual de la digitalización de las cosas, almacenamiento de datos, uso y aplicaciones
                            </li>
                              <li>
                              Capacidad de digitalizar diferentes productos/sistemas/servicios, dentro de la empresa particular del asistente
                            </li>
                          </ul>
                          <a href="modulo_bigdata.php">
                            <img src="img/ir.png" width="50" >
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header bg-white" role="tab" id="headingFive">
                        <h5 class="mb-0">
                          <img src="img/vision.png" width="40" id="imgse">
                          <a class="collapsed text-primary" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                             Visión Artificial Inteligente 
                             
                          </a>
                        </h5>
                      </div>
                      <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body bg-info" style="background:url(img/fondo8.jpg); background-size: cover; background-position: center;">
                          <h5 style="color: white">
                          Objetivo del curso:
                          </h5>
                          <p style="color: white;" >
                            Mejorar el control y garantía de calidad de las inspecciones, asegurar continuidad y constancia, eliminar el factor humano, permitir la interactividad y adaptación automática de un sistema, y mejorar la trazabilidad.
                          </p>
                          <h5 style="color: white">
                            Competencias que se esperan adquirir:
                          </h5>
                          <ul style="color: white">
                              <li>Capacidad técnica de diseño, desarrollo, e implementación de sistemas capaces de interpretar el entorno que los rodea en tiempo real</li>
                              <li>Experiencia práctica en talleres de ensayo para implementación real de un prototipo</li>
                          </ul>
                          <a href="modulo_vision.php">
                            <img src="img/ir.png" width="50" >
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header bg-white" role="tab" id="headingSix">
                        <h5 class="mb-0">
                          <img src="img/AR.svg" width="40" id="imgse">
                          <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          Sistemas interactivos basados en visión para ayuda al operador (VR Y AR) 
                          
                          </a>
                        </h5>
                      </div>
                      <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body bg-info" style="background:url(img/fondo1.jpeg); background-size: cover; background-position: center;">
                          <p style="color: white">Se refiere a tecnología de soporte y ayuda a la capacitación y operación de operarios en línea. Con soluciones basadas en visión artificial inteligente con capacidad de interacción con el operador.</p>
                          <h5 style="color:white;">
                            Objetivo del curso:
                          </h5>
                          <p style="color: white;">
                            Transferir conocimientos en la capacitación de recursos técnicos a través del uso de visión artificial inteligente con realidad aumentada.
                          </p>
                          <h5 style="color: white;">  
                            Competencias que se esperan adquirir:
                          </h5>
                          <ul style="color: white;">
                              <li>Conocimientos y detalles técnicos de diseño, desarrollo, e implementación de sistemas de realidad aumentada, para identificar necesidades, plantear posibles soluciones, interactuar con proveedores</li>
                          </ul>
                          <a href="modulo_vryar.php">
                            <img src="img/ir.png" width="50" >
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header bg-white" role="tab" id="headingSeven">
                        <h5 class="mb-0">
                          <img src="img/manufacturing.svg" width="40">
                          <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseFive">
                          Celda de Manufactura 
                          
                          </a>
                        </h5>
                      </div>
                      <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion">
                        <div class="card-body  bg-info" style="background:url(img/fondo7.jpg); background-size: cover; background-position: center;">
                          <p style="background-color: lightyellow">
                             Lograr dar un enfoque industrial a los participantes mediante la utilización de la celda de manufactura y el análisis de las áreas de oportunidad en I4.0.

                          </p>
                          <a href="#">
                            <img src="img/ir.png" width="50" >
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <!--Fin del acordion--> 
         </div>
       </div>
     </div>
   </div>
  </div>
  <!-- Footer -->
   <?php include "footer.php" ?>
    </body>
  </html>
<!--  JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
<!--Script para deslisar el chat-->
    <script type="text/javascript" src="js/Chat.js">
    </script>

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