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
      <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">

      <title> Diplomado Nuevo Laredo 4.0</title>
    </head>
    <body>
      <!--Menu-->
      <?php include 'header.php'; ?>
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
      <div class="container" id="maind">
    	   <h3>
          Acerca del Diplomado 4.0 <img src="">
          </h3>
    	   <p class="lead">
            El diplomado surgio como consecuencia del Programa Nuevo Laredo 4.0 en donde
            el Centro IST y el Gobierno de Nuevo Laredo impulsaron la capacitación de la
            industria, academia y comunidad en tecnologías referentes a I4.0. 
        </p >
    	   <p id="pcon">
           El 50% de la duración del Diplomado será impartido por maestros del ITNL, impulsando
           de esta manera el fortalecimiento el conocimiento local, el 50% restante será impartido
           por Tecnalia (Centro de innovación e investigación del país Vasco, España) mediante MOOC´s o educación a distancia.
        </p>
    	   <p id="pcon">
            El diplomado constara de 5 módulos de 20 horas de trabajo en donde los asistentes 
            aprenderán conocimientos básicos en las siguientes disciplinas básicas en las 
            nuevas tecnologías correspondientes a Industria 4.0:
            <ul id="colors">
              <li> 
                <h6>
                  Curso introductorio a lenguaje de programación Python
                </h6>
              </li>
              <li>
                <h6>
                  Capacitación en ciberseguridad 
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
                  Sensibilización y capacitación en I4.0 e IoT:
                </h6>
                
              </li>
              <li>
                <h6>
                  Big Data y Celda de Manufactura: 
                </h6>
              
              </li>
            </ul>
        </p>
    	   <p id="pcon">
            Los objetivos del Diplomado Nuevo Laredo 4.0 serán los siguientes:
            <ul id="colors">
              <li>
                100 horas de capacitación para alumnos y maestros.
              </li>
              <li>
                30 alumnos beneficiados del ITNL
              </li>
              <li>
                20 alumnos beneficiados de la UTNL
              </li>
              <li>
                10 maestros beneficiados de la UTNL
              </li>
            </ul>
        </p>
        <p id="pcon">
          El Diplomado será destinado a alumnos de las siguientes carreras afines a los conceptos de Industria 4.0:<br>
          <img src="img/itnl.gif" width="25">ITNL: Mecatrónica, Electrónica, Industrial, Sistemas Computacionales y Eléctrica <br>
          <img src="img/ut.png" width="25"> UTNL: Mecatrónica y Mantenimiento Industrial
        </p> <br><br>
        <p class="lead">
          "Este diplomado es un esfuerzo del Gobierno de Nuevo Laredo por impulsar la innovación, capacitación y nuevas tecnologías en las universidades de la ciudad por medio del Centro IST de la Secretaria de Desarrollo Económico"
        </p>
      </div>
      <!--Fin del main-->
       <!-- Footer -->
        <?php include("footer.php") ?>
    <!-- Footer -->
    </body>
  </html>

 <!--  JavaScript -->
    <script src="js/jquery.js"> 
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>