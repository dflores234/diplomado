<?php 
  include 'php/sesion.class.php';
  $id = '5';

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
    header("Location: index.html");
  }

 ?>
 <!DOCTYPE html>
  <html>
    <head>
	     <title>Visión Artificial Inteligente</title>
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
                        <img src="img/vision.png" width="70">Visión Artificial Inteligente
                      </h1>
                </div>
                   <section style="background-color: #D8D8D8">
                        <div class="contanier">
                          <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                <!--embed style="margin-left: 5px;" src="Presentaciones/M1.1.1 Principios Basicos de ciberseguridad.pdf" width="500" height="450" href="Presentaciones/M1.1.1 Principios Basicos de ciberseguridad.pdf"></embed-->
                                <iframe style="margin-left: 10px;" src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21114&amp;authkey=ANf9dKLLcz7iRg8&amp;em=2&amp;wdAr=1.3333333333333333" width="500" height="400" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                              </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                              <h3>Principios básicos de la ciberseguridad</h3><hr>
                                  <ul align="left" style="font-size: 14px;">
                                     <li>Introducción</li>
                                    <li>Breve perspectiva histórica </li>
                                    <li>Ciberseguridad en el mundo actual</li>
                                    <li>¿Qué es la ciberseguridad?</li>
                                    <li>Definiciones básicas</li>
                                    <li>Importancia de la ciberseguridad</li>
                                    <li>Objetos principales</li>
                                    <li>Entidades implicadas</li>                              
                                  </ul>
                            </div>
                          </div>
                        </div> 
                   </section>
                    <hr style="margin:0px; background-color: gray">
                   <section style="background-color: #D8D8D8">
                        <div class="contanier">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br>
                              <video controls width="450" height="auto" style="margin-left: 30px;">
                                <source src="#" type="video/mp4"></source>
                              </video>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                              <h3>Aplicaciones de la criptografía</h3><hr>
                                  <ul align="left" style="font-size: 14px;">
                                    <li>Firma Digital</li>
                                    <li>Tipos de Firma Digital </li>
                                    <li>Firma digital con RSA</li>
                                    <li>Ejemplo de Firma digital RSA (I,II,II,IV,V,VI,VII,VIII Y IX)</li>
                                    <li>Certificados digitales</li>
                                    <li>Autoridades de Certificación</li>
                                    <li>Almacenamiento de certificados</li>
                                    <li>Custodia y distribucion de datos</li>
                                  </ul>
                            </div>
                          </div>
                        </div> 
                   </section>
                    <hr style="margin:0px; background-color: gray">
                   <section style="background-color: #D8D8D8">
                      <div class="contanier">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br>
                            <!--video controls class="img-responsive" width="450" height="auto" style="margin-left: 30px;">
                              <source src="src/7_ip_tablesok.mp4" type="video/mp4">
                            </video-->
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h3>IP Tables</h3><hr>
                                <ul align="left" style="font-size: 15px;">
                                    <li>Conceptos Básicos min (0:34)</li>
                                    <li>Tipos de tablas</li>
                                    <li>Diagrama de las capas de IP tables</li>
                                    <li>Tipos de cadenas</li>
                                    <li>Sintaxis</li>
                                  </ul>
                          </div>
                        </div>
                      </div> 
                   </section>   
            </section>
        <!-- Footer -->
       <?php include 'footer.php'; ?>
    </body>
  </html>

    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
