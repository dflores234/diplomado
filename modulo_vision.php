<?php 
  include 'php/sesion.class.php';
  $id = '5';

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
                <!--Aqui van las presentaciones-->
                <div id="accordion" role="tablist">
                  <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingOne">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Presentaciones 
                            </a>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne"   data-parent="#accordion" >
                          <div class="card-body bg-light">
                               <div id="accordion2" role="tablist">
                                  <div class="card">
                                      <div class="card-header bg-white" role="tab" id="headingOne1">
                                          <h5 class="mb-0">
                                              <a data-toggle="collapse" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                                Introducción
                                              </a>
                                          </h5>
                                      </div>
                                      <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordion2" >
                                          <div class="card-body bg-light">
                                              <div class="contanier">
                                                  <div class="row">
                                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                        <iframe src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21156&amp;authkey=AMTlVR0Abh4GMJk&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="480px" height="396px" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                          <h3>Introducción</h3><hr style="background-color: black">
                                                              <ul align="left" style="font-size: 14px;">
                                                                  <li>Introducción</li>
                                                                  <li>Ejemplos de aplicación</li>
                                                                  <li>Organización del curso</li>                          
                                                              </ul>
                                                      </div>
                                                  </div>
                                              </div> 
                                          </div>
                                      </div>
                                </div>
                                <div class="card">
                                      <div class="card-header bg-white" role="tab" id="headingTwo2">
                                          <h5 class="mb-0">
                                              <a data-toggle="collapse" href="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo2">
                                                Luces y cámaras 
                                              </a>
                                          </h5>
                                      </div>
                                      <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordion2" >
                                          <div class="card-body bg-light">
                                              <div class="contanier">
                                                  <div class="row">
                                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                        <iframe src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21153&amp;authkey=ALOf6gDo3VOas7s&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="480px" height="396px" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                          <h3>Luces y camaras</h3><hr style="background-color: black">
                                                              <ul align="left" style="font-size: 14px;">
                                                                  <li>Introducción <br>Que es la visión artificial y e proecesamiento de imagen <br>Definiciones y términos <br>Aspectos a tener en cuenta en sistemas de visión artificial</li>
                                                                  <li>Elementos en visión artificial</li>
                                                                  <li>Elementos de Hardware <br> Sistemas de ilumninación <br>Ópticas <br> Cámaras</li> 
                                                                  
                                                              </ul>
                                                      </div>
                                                  </div>
                                              </div> 
                                          </div>
                                      </div>
                                </div>
                                <div class="card">
                                      <div class="card-header bg-white" role="tab" id="headingThree1">
                                          <h5 class="mb-0">
                                              <a data-toggle="collapse" href="#collapseThree1" aria-expanded="true" aria-controls="collapseThree1">
                                                Imagen Digital  
                                              </a>
                                          </h5>
                                      </div>
                                      <div id="collapseThree1" class="collapse" role="tabpanel" aria-labelledby="headingThree1" data-parent="#accordion2" >
                                          <div class="card-body bg-light">
                                              <div class="contanier">
                                                  <div class="row">
                                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                        <iframe src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21152&amp;authkey=ACP0-RSeo0Rg3Yo&amp;em=2&amp;wdAr=1.3333333333333333" width="480px" height="396px" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                          <h3>Imagen Digital</h3><hr style="background-color: black">
                                                              <ul align="left" style="font-size: 14px;">
                                                                  <li>Introducción​</li>
                                                                  <li>Imagen digital</li>
                                                                  <li>Formatos de imagen <br>Compresión de imagen <br> Formatos sin pérdida vs con pérdida</li> 
                                                                  <li>Librerías de procesamiento de imagen <br>Libres <br>Propietarias</li>
                                                                  <li>    Lenguajes de programación​ <br>Python como lenguaje de prototipado rápido</li>
                                                              </ul>
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
                                               Operaciones con histogramas
                                              </a>
                                          </h5>
                                      </div>
                                      <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion2" >
                                          <div class="card-body bg-light">
                                              <div class="contanier">
                                                  <div class="row">
                                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                        <iframe src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21151&amp;authkey=AMhk57m0p93-S0o&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="480px" height="396px" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                          <h3>Operaciones con histogramas</h3><hr style="background-color: black">
                                                              <ul align="left" style="font-size: 14px;">
                                                                  <li>Operaciones básicas <br>Tipos de Imágenes <br>Operaciones con arrays <br>Subarrays</li>
                                                                  <li>Histogramas <br>Definiciones <br>Estirado de histogramas <br> Ecualizado de histograma <br> CLACHE <br>Transferencia de histograma</li>
                                                                  <li>Umbralizado</li>
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
                                                Operaciones Morfológicas 
                                              </a>
                                          </h5>
                                      </div>
                                      <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion2" >
                                          <div class="card-body bg-light">
                                              <div class="contanier">
                                                  <div class="row">
                                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                       <iframe src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21154&amp;authkey=ABwcGg6wXexdWXU&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="480px" height="396px" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                          <h3>Operaciones Morfológicas</h3><hr style="background-color: black">
                                                              <ul align="left" style="font-size: 14px;">
                                                                  <li>Filtrado de imagen <br> Filtros linelaes <br>Filtros no lineales <br> Filtros de realce <br>Filtros de borde</li>
                                                                  <li>Imágenes binarias <br> Erosión / Dilatación<br> Apertura / Cierre<br>Operaciones morfológicas complejas <br>Reconstrucción <br>Conectividad</li> 
                                                                  
                                                              </ul>
                                                      </div>
                                                  </div>
                                              </div> 
                                          </div>
                                      </div>
                                </div>
                                
                               </div>
                          </div>
                        </div>
                  </div>
                  <!--Aqui van los videos-->
                    <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingTwo">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                              Vídeos
                            </a>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >
                          <div class="card-body bg-light">
                               <div id="accordion3" role="tablist">
                                  <div class="card">
                                      <div class="card-header bg-white" role="tab" id="headingNine">
                                          <h5 class="mb-0">
                                              <a data-toggle="collapse" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                                Teoría del color y Sistemas Bioinspirados
                                              </a>
                                          </h5>
                                      </div>
                                      <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordion3" >
                                          <div class="card-body bg-light">
                                              <div class="contanier">
                                                  <div class="row">
                                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                      <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                              <source src="https://www.dropbox.com/s/liwiqyo34idf3co/5_teoriaColor.mp4?raw=1" type="video/mp4"></source>
                                                      </video>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                          <h3>Teoría del color y Sistemas Bioinspirados</h3><hr style="background-color: black">
                                                              <ul align="left" style="font-size: 14px;">
                                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                  consequat.
                                                              </ul>
                                                      </div>
                                                  </div>
                                              </div> 
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header bg-white" role="tab" id="headingTen">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                              Práctica Teoría del color
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/vg34he6i07uf9x8/practica_m6_color.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Ejercicios</h3><hr style="background-color: black">
                                                            <ul align="left" style="font-size: 14px;">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat.
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                              </div>
                              <div class="card">
                                    <div class="card-header bg-white" role="tab" id="heading11">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                              Técnicas de segmentación de imágenes
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/rpetr9w7wsxvdtk/6_Segmentacion.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Temas a ver:</h3><hr style="background-color: black">
                                                            <ul align="left" style="font-size: 14px;">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat.
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                              </div>
                              <div class="card">
                                    <div class="card-header bg-white" role="tab" id="heading12">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                              Práctica Segmentación(Vídeo)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading12" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/94gp2x9zk1lb8t3/practica_m7_segmentacion.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Ejercicios</h3><hr style="background-color: black">
                                                            <ul align="left" style="font-size: 14px;">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat.
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                              </div>
                              <div class="card">
                                    <div class="card-header bg-white" role="tab" id="heading13">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
                                              Procesamiento de Vídeo
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse13" class="collapse" role="tabpanel" aria-labelledby="heading13" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/hw98egcjhb8qtr4/8_procesoVideo.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Temas</h3><hr style="background-color: black">
                                                            <ul align="left" style="font-size: 14px;">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat.
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                              </div>
                              <div class="card">
                                    <div class="card-header bg-white" role="tab" id="heading14">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse14" aria-expanded="true" aria-controls="collapse14">
                                              Práctica Procesado de vídeo
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse14" class="collapse" role="tabpanel" aria-labelledby="heading14" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/ctmlqm2vu64vfei/practica_m8_video-2.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Ejercicios</h3><hr style="background-color: black">
                                                            <ul align="left" style="font-size: 14px;">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat.
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                              </div>
                              <div class="card">
                                    <div class="card-header bg-white" role="tab" id="heading15">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
                                              Deep Learning
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse15" class="collapse" role="tabpanel" aria-labelledby="heading15" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/zql3j8ofw526pp7/9_DeepLearning-2.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Temas</h3><hr style="background-color: black">
                                                            <ul align="left" style="font-size: 14px;">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat.
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                              </div>
                              <div class="card">
                                    <div class="card-header bg-white" role="tab" id="heading16">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse16" aria-expanded="true" aria-controls="collapse16">
                                              Práctica Deep Learning
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse16" class="collapse" role="tabpanel" aria-labelledby="heading16" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/z852qc28owhb9fj/practica_m9_deep.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Ejercicios</h3><hr style="background-color: black">
                                                            <ul align="left" style="font-size: 14px;">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat.
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                              </div>
                              <div class="card">
                                    <div class="card-header bg-white" role="tab" id="heading17">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse17" aria-expanded="true" aria-controls="collapse17">
                                              Casos de Uso y Aplicaciones(Vídeo)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse17" class="collapse" role="tabpanel" aria-labelledby="heading17" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/3fjnpokaca1cnei/10_CasosdeUso.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Temas</h3><hr style="background-color: black">
                                                            <ul align="left" style="font-size: 14px;">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat.
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                              </div>
                                </div>
                          </div>
                        </div>
                    </div>
                    <!--Aqui va el material extra-->
                    <div class="card">
                          <div class="card-header bg-white" role="tab" id="headingThree">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Material extra 
                              </a>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" >
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
<script type='text/javascript'>
  document.oncontextmenu = function(){return false}
</script>