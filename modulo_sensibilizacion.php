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
	     <title>Sensibilización y capacitación en I4.0 e IoT</title>
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
                    <?php include "header2.php" ?>
                <!--Fin menu-->
                <section class="main-section">
    	             <div style="width: 850px;margin: 0 auto;">
    		              <h1><img src="img/Industry-4.0_01.png" width="70">Sensibilización y capacitación en I4.0 e IoT</h1>
    	             </div>
                   <section >
                    <div class="contanier">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                      <!--embed style="margin-left: 5px;" src="Presentaciones/M1.1.1 Principios Basicos de ciberseguridad.pdf" width="500" height="450" href="Presentaciones/M1.1.1 Principios Basicos de ciberseguridad.pdf"></embed-->
                      <iframe  style="margin-left: 10px" src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21120&amp;authkey=AH_efWPtOdDg_-g&amp;em=2&amp;wdAr=1.3333333333333333" width="500" height="400" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                          <h3>Sensibilización en Industria 4.0</h3><hr>
                              <ul align="left" style="font-size: 13px;">
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
                   </section>
                </section>
                <!-- Footer -->
   <?php include 'footer.php'; ?>
     </div>
       </div>
     </div>
   </div>
  </div>
  
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