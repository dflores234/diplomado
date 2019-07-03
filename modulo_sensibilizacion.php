<?php 
  include 'php/sesion.class.php';
  $id = '2';

  $session = new Session();

  if ($session->getSession('id')) 
  {
    $avatar = $session->getSession('avatar');
    $nombre = $session->getSession('nombre');

    if($session->getSession('id_modulo') !== $id)
    {
     header("Location: participante_index.php"); 
    }
  }
  else 
  {
    header("Location: index.html");
  }

 ?>
 <!DOCTYPE html>
  <html>
    <head>
	     <title>Sensibilización y capacitación en I4.0 e IoT</title>
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
      		        <h1><img src="img/Industry-4.0_01.png" width="70">Sensibilización y capacitación en I4.0 e IoT</h1>
      	   </div>
           <div id="accordion" role="tablist">
              <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Sensibilización en Industria 4.0
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >
                            <div class="card-body bg-light">
                                <div class="contanier">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                          <iframe  style="margin-left: 10px" src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21120&amp;authkey=AH_efWPtOdDg_-g&amp;em=2&amp;wdAr=1.3333333333333333" width="440" height="350" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <h3>Sensibilización en Industria 4.0</h3><hr style="background-color: black">
                                                <ul align="left" style="font-size: 14px;">
                                                   <li>Evolución, Industria 4.0, Innovación, Industria y Tecnologia como concepto</li>
                                                    <li>Avances tecnologicos en el tiempo </li>
                                                    <li>Modelo XXI</li>
                                                    <li>Causas del cambio-Sociedad 4.0 y Empresas 4.0</li>
                                                    <li>Evolución, Revolución y Disrupción</li>
                                                    <li>Innovar o morir</li>
                                                    <li>Mega tendencias</li>
                                                    <li>Nuevos productos y cadenas de valor</li> 
                                                    <li>Nuevas habilidades y comportamiento de empleados</li>                             
                                                    <li>Nuevo modelo de negocio</li>
                                                    <li>Nuevos mercados</li>
                                                    <li>Cambio cultural (Niños de la posguerra, Baby Boomers, Generación X, Milennials y Generación Z</li>
                                                    <li>Nuevas tendencias de trabajo</li>
                                                    <li>Herramientas de planeación</li>                             
                                                </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                  </div>
                  <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingFive">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                              Material extra 
                            </a>
                          </h5>
                        </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion" >
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