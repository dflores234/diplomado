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
                    <?php include "header2.php" ?>
                <!--Fin menu-->
                <section class="main-section">
    	             <div style="width: 500px;margin: 0 auto;">
    		              <h1><img src="img/hacker_cyber_crime-512.png" width="70">CIBERSEGURIDAD </h1>
    	             </div>
                     <div id="accordion" role="tablist">
                        <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingOne">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Principios basicos de la ciberseguridad
                            </a>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >
                          <div class="card-body bg-info">
                              <div class="contanier">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                    <iframe src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21114&amp;authkey=ANf9dKLLcz7iRg8&amp;em=2&amp;wdAr=1.3333333333333333" width="500" height="400" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <h3 style="margin-left:5px"> Principios básicos de la ciberseguridad</h3><hr style="background-color: black">
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
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingTwo">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                              Aplicaciones de la criptografía (video)
                            </a>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >
                          <div class="card-body bg-info">
                              <div class="contanier">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                    <video controls controlsList="nodownload" width="450" height="auto" style="margin-left: 30px;">
                                      <source src="src/video1ejemplo.mp4" type="video/mp4"></source>
                                    </video>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <h3>Aplicaciones de la criptografía</h3><hr style="background-color: black">
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
                          </div>
                        </div>
                    </div>
                      <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingEleven">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                              Evaluación de ciberseguridad
                            </a>
                          </h5>
                        </div>
                        <div id="collapseEleven" class="collapse" role="tabpanel" aria-labelledby="headingEleven" data-parent="#accordion" >
                          <div class="card-body bg-info">
                              <div class="contanier">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <a href="examen_ciberseguridad.php" target="blank" style="color: white">Evaluación</a>
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
       <?php include 'footer.php'; ?>-
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