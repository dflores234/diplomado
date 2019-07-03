<?php 
  include 'php/sesion.class.php';
  $id = '3';

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
	     <title>Ciberseguridad</title>
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
        	      <div style="width: 500px;margin: 0 auto;">
                      <h1>
                        <img src="img/hacker_cyber_crime-512.png" width="70">CIBERSEGURIDAD 
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
                                                Esteganografía
                                              </a>
                                          </h5>
                                      </div>
                                      <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordion3" >
                                          <div class="card-body bg-light">
                                              <div class="contanier">
                                                  <div class="row">
                                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                      <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                              <source src="https://www.dropbox.com/s/1588fovm89gd5h5/1_esteganografia.mp4?raw=1" type="video/mp4"></source>
                                                      </video>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                          <h3>Esteganografía</h3><hr style="background-color: black">
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
                                              Criptografía
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/c99f71ozdsm61l1/2_criptografia.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Criptografía</h3><hr style="background-color: black">
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
                                              Aplicaciones de la Criptografía
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/l2dio6g02iw6ftk/3_aplicaciones.mp4?raw=1" type="video/mp4"></source>
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
                                              Retos de la Ciberseguridad
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading12" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/jcgksv3wepqb2mq/4_retos.mp4?raw=1" type="video/mp4"></source>
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
                                    <div class="card-header bg-white" role="tab" id="heading13">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
                                              Gestión de respuesta ante incidentes de ciberseguridad
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse13" class="collapse" role="tabpanel" aria-labelledby="heading13" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/vjs9f7ak6eyllzf/5_gestion%20ante%20incidentes.mp4?raw=1" type="video/mp4"></source>
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
                                              Equipos de respuesta ante incidentes
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse14" class="collapse" role="tabpanel" aria-labelledby="heading14" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/0slvhkosyzam5bd/6_respuesta%20ante%20incidentes.mp4?raw=1" type="video/mp4"></source>
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
                                    <div class="card-header bg-white" role="tab" id="heading15">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
                                             Ip Tables (Parte 1)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse15" class="collapse" role="tabpanel" aria-labelledby="heading15" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/03vi3vnl5g415m8/7_ip_tablesok.mp4?raw=1" type="video/mp4"></source>
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
                                              Ip Tables (Parte 2)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse16" class="collapse" role="tabpanel" aria-labelledby="heading16" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/lf7tqutkkhuzxpf/7_IP%20Tables%20p2.mp4?raw=1" type="video/mp4"></source>
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
                                              Ciberseguridad: Estándares y Normativas
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse17" class="collapse" role="tabpanel" aria-labelledby="heading17" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/q2h4juhlplf4xlt/8_Est%C3%A1ndares%20y%20normativas.mp4?raw=1" type="video/mp4"></source>
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
                                    <div class="card-header bg-white" role="tab" id="heading18">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse18" aria-expanded="true" aria-controls="collapse18">
                                              Seguridad por diseño
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse18" class="collapse" role="tabpanel" aria-labelledby="heading17" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/uz5c2pb7ugf4fm2/9_Seguridad%20por%20dise%C3%B1o.mp4?raw=1" type="video/mp4"></source>
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
                                    <div class="card-header bg-white" role="tab" id="heading19">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse19" aria-expanded="true" aria-controls="collapse19">
                                              Practica Pentesting (Parte 1)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse19" class="collapse" role="tabpanel" aria-labelledby="heading19" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/tnhsdlgibfw0b3u/01_Intro%2Binstalacion.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Intro-Instalación</h3><hr style="background-color: black">
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
                                    <div class="card-header bg-white" role="tab" id="heading20">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse20" aria-expanded="true" aria-controls="collapse20">
                                              Practica Pentesting(Parte 2)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse20" class="collapse" role="tabpanel" aria-labelledby="heading20" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/7khzd6lv3kpaidx/02_Teoria.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Teoria</h3><hr style="background-color: black">
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
                                    <div class="card-header bg-white" role="tab" id="heading21">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse21" aria-expanded="true" aria-controls="collapse21">
                                              Practica Pentesting(Parte 3)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse21" class="collapse" role="tabpanel" aria-labelledby="heading21" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/w9v01sbkys1svom/03_Fase_Reconocimiento.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Fase de reconocimiento</h3><hr style="background-color: black">
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
                                    <div class="card-header bg-white" role="tab" id="heading22">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse22" aria-expanded="true" aria-controls="collapse22">
                                              Practica Pentesting(Parte 4)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse22" class="collapse" role="tabpanel" aria-labelledby="heading22" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/4m9ub6jicz1orz1/04_Fase_Escaneo.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Fase de Escaneo</h3><hr style="background-color: black">
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
                                    <div class="card-header bg-white" role="tab" id="heading23">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse23" aria-expanded="true" aria-controls="collapse23">
                                              Practica Pentesting(Parte 5)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse23" class="collapse" role="tabpanel" aria-labelledby="heading23" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/uzz9tljsaz2r8u1/05_Fase_Ataque_Parte1.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Fase Ataque parte 1</h3><hr style="background-color: black">
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
                                    <div class="card-header bg-white" role="tab" id="heading24">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse24" aria-expanded="true" aria-controls="collapse24">
                                              Practica Pentesting(Parte 6)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse24" class="collapse" role="tabpanel" aria-labelledby="heading24" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/8p1654ypn1wbn1f/06_Fase_Ataque_Parte2.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Fase de ataque parte 2</h3><hr style="background-color: black">
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
                                    <div class="card-header bg-white" role="tab" id="heading25">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse25" aria-expanded="true" aria-controls="collapse25">
                                              Practica Pentesting(Parte 7)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse25" class="collapse" role="tabpanel" aria-labelledby="heading25" data-parent="#accordion3" >
                                        <div class="card-body bg-light">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                                    <video controls controlsList="nodownload" width="440" height="auto" style="margin-left: 30px;">
                                                            <source src="https://www.dropbox.com/s/7vvulym77mz4w64/07_Fases_Finales.mp4?raw=1" type="video/mp4"></source>
                                                    </video>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                        <h3>Fases finales</h3><hr style="background-color: black">
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
           <?php include 'footer.php'; ?>-
    </body>
  </html>

    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type='text/javascript'>
  document.oncontextmenu = function(){return false}
</script>
