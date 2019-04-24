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
                   <div id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingOne">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Introducción a python
                            </a>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >
                          <div class="card-body bg-light">
                              <div class="contanier">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                    <iframe src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21116&amp;authkey=ADddGjuHiXXNY8w&amp;em=2&amp;wdAr=1.3333333333333333" width="500" height="400" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
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
                          </div>
                        </div>
                    </div>
                   
                      <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingTwo">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                              Sentencias en python
                            </a>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >
                          <div class="card-body bg-light">
                              <div class="contanier">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                    <iframe src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21117&amp;authkey=AMEzBstc55hAcco&amp;em=2&amp;wdAr=1.7777777777777777" width="500" height="320" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <h3>Sentencias en python</h3><hr style="background-color: black">
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
                          </div>
                        </div>
                    </div>
                      <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingThree">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                              Material descargable
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" >
                          <div class="card-body bg-light">
                              <div class="contanier">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <a href="https://www.python.org/downloads/"  target="_blank" style="color:blue">Descarga python</a>
                                  </div>
                               
                                </div>
                              </div> 
                          </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingFour">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                              Evaluación de python
                            </a>
                          </h5>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion" >
                          <div class="card-body bg-light">
                              <div class="contanier">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <a href="examen_python.php" target="_blank">Evaluación</a>
                                  </div>
                               
                                </div>
                              </div> 
                          </div>
                        </div>
                    </div>
                    </div>
                </section>
     </div>
       </div>
     </div>
   </div>
  </div>
  <!-- Footer -->
      <?php include "footer.php" ?>
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