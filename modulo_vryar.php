<?php 
  include 'php/sesion.class.php';
  $id = '4';


  $session = new Session();

  if ($session->getSession('id')) 
  {
    $avatar = $session->getSession('avatar');
    $nombre = $session->getSession('nombre');

   /*if($session->getSession('id_modulo') !== $id)
    {
      header("Location: participante_index.php"); 
    }*/
  }
  else 
  {
    header("Location: index.php");
  }

 ?>
 <!DOCTYPE html>
  <html>
    <head>
	     <title>Sistemas interactivos basados en visión para ayuda al operador (VR Y AR)</title>
	       <meta charset="utf-8">
         <link rel="shortcut icon" href="img/istblanco.png">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="css/participante2.css">
          <link rel="stylesheet" href="css/bootstrap.min.css">
          <!-- Los iconos tipo Solid de Fontawesome-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <!--Menu-->
            <?php include "header2.php" ?>
        <!--Fin menu-->
          <section class="main-section">
    	          <div style="width: 850px;margin: 0 auto;">
                      <h1>
                        <img src="img/AR.svg" width="50">Sistemas interactivos basados en visión para ayuda al operador (VR Y AR)
                      </h1>
                </div>  
                <div id="accordion" role="tablist">
                   <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  General Gamificación y Usabilidad
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >
                            <div class="card-body bg-light">
                                <div class="contanier">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                         <iframe src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21139&amp;authkey=AAwA16BqvFcjkeg&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="490px" height="406px" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <h3>Introducción</h3><hr style="background-color: black">
                                                <ul align="left" style="font-size: 14px;">
                                                    <li>¿Por qué un bloque de GP?</li>
                                                    <li>Objetivos</li>
                                                    <li>Organización</li>                             
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
                                  Realidad virtual 
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >
                            <div class="card-body bg-light">
                                <div class="contanier">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                          <iframe src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21140&amp;authkey=AE8k20ByNeIUvPs&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="490px" height="406px" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <h3>Módulo I</h3><hr style="background-color: black">
                                                <ul align="left" style="font-size: 14px;">
                                                    <li>Introducción a la Realidad Virtual</li>
                                                    <li>Tipos Realidad Virtual (inmersiva, no inmersiva, etc.)​</li>
                                                    <li>Análisis de dispositivos (comerciales actuales)​</li> 
                                                    <li>Ejemplos de aplicación​</li>
                                                    <li> Grado de madurez y retos​</li>
                                                    <li>Cómo desarrollar activos/productos de RV, intro básica​</li>
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
                                  Realidad Aumentada 
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" >
                            <div class="card-body bg-light">
                                <div class="contanier">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                          <iframe src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21141&amp;authkey=AEAA-mMo8t5Wzy0&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="490px" height="406px" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <h3>Módulo II</h3><hr style="background-color: black">
                                                <ul align="left" style="font-size: 14px;">
                                                    <li>Introducción</li>
                                                    <li>Línea del tiempo de la Realidad Aumentada​</li>
                                                    <li>Grado de Madurez​</li> 
                                                    <li>¿Cómo funciona?​</li>
                                                    <li>Análisis de dispositivos​</li>
                                                    <li>Sectores y Ejemplos de aplicación​</li>
                                                    <li>Industria 4.0​</li>
                                                    <li>Actualidad</li>
                                                    <li>Conclusiones​</li>
                                                    <li>Cómo desarrollar activos/ productos de RA​</li>
                                                </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                  </div>
                  <div class="card">
                        <div class="card-header bg-white" role="tab" id="heading19">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapse19" aria-expanded="true" aria-controls="collapse19">
                              Material extra 
                            </a>
                          </h5>
                        </div>
                        <div id="collapse19" class="collapse" role="tabpanel" aria-labelledby="heading19" data-parent="#accordion" >
                          <div class="card-body bg-light">
                              <div class="contanier">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <h3>Nombre</h3><hr style="background-color: black">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                      <a href="#">Link del artículo</a><hr style="background-color: black">
                                  </div>
                                
                                </div>
                              </div> 
                          </div>
                        </div>
                    </div>
                     
                </div>   
          </section>
                 <!-- Footer -->
     <?php include 'footer.php'; ?>
 
</body>
</html>

    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>