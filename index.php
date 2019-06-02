<!doctype html>
  <html lang="es">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <link rel="shortcut icon" href="img/istblanco.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Los iconos tipo Solid de Fontawesome-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

      <title>Capacitaciones Nuevo Laredo 4.0 </title>
    </head>
    <body>
      <!--Menu-->
      <?php 
            include 'php/sesion.class.php';

             $session = new Session();

            if ($session->getSession('id')) 
            {
                $avatar = $session->getSession('avatar');
                $nombre = $session->getSession('nombre');
                include 'header2.php';
            }
            else 
            {
              include 'header.php';  
            }
      ?>
      <!--Fin menu-->
      <!--CARRUSEL-->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
          </li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">
          </li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2">  
          </li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/curso5.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block slider" id="mensaje" style="background-color: #23AAE1">
                <p>
                  <img src="img/Logo CENTRO IST BLANCO-04.png" width="500" height="100">
                </p>
                
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/curso4.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block slider " id="mensaje" style="background-color: #23AAE1">
              <p >
                  <img src="img/Logo CENTRO IST BLANCO-04.png" width="500" height="100">
                </p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/curso2.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block slider" id="mensaje" style="background-color: #23AAE1" >
              <p >
                  <img src="img/Logo CENTRO IST BLANCO-04.png" width="500" height="100">
                </p>
                
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true">
          </span>
          <span class="sr-only">
            Previous
          </span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true">
          </span>
          <span class="sr-only">
            Next
          </span>
        </a>
      </div>
      <!--Fin del CARRUSEL-->
      <!--Main-->
      <br>
      <div class="container" id="maind"><br>
    	   <h3 style="text-align: center;">
          Acerca de Capacitaciones Nuevo Laredo 4.0  <img src=""><br><br>
          </h3>
    	   <p class="lead" style="text-align: justify;">
            El programa Capacitaciones Nuevo Laredo 4.0 surgió como consecuencia de la iniciativa Nuevo Laredo 4.0 en donde el Centro IST y el Gobierno de Nuevo Laredo impulsaron la capacitación de la industria, academia y comunidad en tecnologías referentes a I4.0 mediante la creación de un Diplomado de 206 horas destinado a los mismo.
        </p >
    	   <p id="pcon" style="text-align: justify;">
           El Programa Nuevo Laredo 4.0 en las temáticas referentes a Industria 4.0 será impartido por maestros del Instituto Tecnológico de Nuevo Laredo (ITNL) con soporte de diversos materiales audiovisuales generados por expertos en los temas de Tecnalia (Centro de innovación e investigación del país Vasco, España).
        </p>
    	   <p id="pcon">
         Los asistentes aprenderán conocimientos básicos en las nuevas tecnologías correspondientes a la I4.0:
            <ul id="colors">
              <li> 
                <h6>
                  Curso introductorio a lenguaje de programación Python
                </h6>
              </li>
              <li>
                <h6>
                  Sensibilización y capacitación en I4.0 e IoT:

                </h6>
                
              </li>
              <li>
                <h6>
                  Capacitación en sistemas interactivos basados en visión para ayuda al operador (realidad aumentada):
                </h6> 
               
              </li>
              <li>
                <h6>
                  Capacitación en digitalización, IoT, big data y data analytics: 
                </h6>
                
              </li>
              <li>
                <h6>
                  Capacitación en sistemas de visión artificial inteligentes: 
                </h6>
                
              </li>
              <li>
                <h6>
                    Capacitación en ciberseguridad 
                </h6>
                
              </li>
            </ul>
        </p>
    	   <p id="pcon">
            Las Capacitaciones Nuevo Laredo 4.0 serán destinadas a los diversos sectores productivos de Nuevo Laredo:
            <ul id="colors">
              <li>
                Industria de Manufactura  
              </li>
              <li>
                Logística y Transporte 
              </li>
              <br>
               Buscando responder a las necesidades detectadas en capacitación entorno a nuevas tecnologías.
            </ul>

        </p>
        <p id="pcon" style="text-align: justify;">
          Se brindará apertura de capacitación a las diversas universidades locales, como un impulso a la preparación de los futuros ingenieros de la ciudad.<br>
          <ul id="colors">
              <li>
               Instituto Tecnológico de Nuevo Laredo

              </li>
              <li>
                 Universidad Tecnológica de Nuevo Laredo
              </li>
              <li>
                Universidad Autónoma de Tamaulipas Campus Nuevo Laredo 
              </li>
              <li>
                Universidad Tecmilenio Campus Nuevo Laredo
              </li>
            </ul>
          
        </p> <br><br>
      </div>
      <!--Fin del main-->
       <!-- Footer -->
        <?php include "footer.php";?>
    <!-- Footer -->
    </body>
  </html>

 <!--  JavaScript -->
    <script src="js/jquery.js"> 
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>