<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/panel.css">
        <link rel="shortcut icon" href="../img/istblanco.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
  <title>Panel de Administrador</title>
</head>
<body>
  <!--Navbar-->
  <div class="container-fluid fixed-top text-center"  style="background-color: #23AAE1">
          <nav class="navbar navbar-expand-lg navbar-light container" style="background-color: #23AAE1">
            <a class="navbar-brand" href="index.php">
              <img src="../img/Diplomado3 - copia.png" width="160" height="63" class="d-inline-block align-top" alt="">
            </a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="navbar-nav ml-auto">
                <div>
                  <p class="font-weight-bold text-light" style="margin-top: 5px;">Bienvenido administrador</p>
                </div>
                <div>
                	<div class="btn-group" style="">
						  
						  <button style="color: white;margin-right: 20px" type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <div class="dropdown-menu">
						    <a class="dropdown-item" href="http://fakeuser:fakepassword@localhost:8080/diplomado/admin/_logout/" class="btn btn-outline-dark" >Salir</a>
						  </div>
					</div>
                  
                </div>
              </div>
            </div>
        </nav>
        </div>

  <!---SASASA-->
<br>
<br>
<br>
<br>
<div class="container" style="margin-bottom:100px;">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Altas Maestros</a>
  </li>
  <li>
    <a class="nav-link " data-toggle="tab" href="#maestrolis" role="tab" aria-controls="home">Maestro inscritos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Cuentas inactivas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Alumnos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-controls="settings">Modulos</a>
  </li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel">
    <br>
    <form class="form-horizontal" role="form">
      <div class="contanier">
        <div class="row">
          <div class="col-md-5 personal-info">
            <div class="form-group">
              <label class="col-lg-3 control-label">Nombre(s):</label>
              <div class="col-lg-9">
              <input class="form-control" type="text" placeholder="Teclee su nombre" id="txtnombre" required="required">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Apellidos</label>
              <div class="col-lg-9">
              <input class="form-control"  id="txtapellido" type="text" value="" placeholder="Apellido Paterno / Apellido Materno" required="">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Correo:</label>
              <div class="col-lg-9">
              <input class="form-control" type="email" placeholder="example2@mail.com" id="txtcorreo" required="">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-5 control-label">Número de contacto:</label>
              <div class="col-lg-9">
              <input class="form-control" id="txttelefono" type="tel" placeholder="(867)136754" maxlength="10" minlength="10" required="">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <label class="col-lg-5 control-label">Modulo a impartir:</label>
              <div class="col-lg-9">
                <div class="ui-select">
                    <select id="semestre" name="modulos" class="form-control">
                        <option value="1">Python</option>
                        <option value="2">Sensibilización y capacitación en I4.0 e IoT</option>
                        <option value="3">Ciberseguridad</option>
                        <option value="4">Sistemas interactivos basados en visión para ayuda al operador (VR Y AR)</option>
                        <option value="5"> Visión Artificial Inteligente</option>
                        <option value="6"> Big Data, IoT</option>
                    </select>
                </div>
              </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Contraseña:</label>
                <div class="col-md-9">
                  <input class="form-control" id="txtcontraseña" type="password" placeholder="*******" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-5 control-label">Confirmar contraseña:</label>
                <div class="col-md-9">
                  <input class="form-control" id="txtccontraseña" type="password" placeholder="*******" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label"></label>
                <div class="col-md-9">
                  <button type="button" class="btn btn-info float-right" id="registrar"> 
                    <i class="fa fa-check-circle"></i>
                      Registrar
                  </button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <br>
    <div class="tab-pane" id="maestrolis" role="tabpanel">
        <table class="table table-striped text-center" id="tblmaestro">
                        <thead class="bg-info">
                          <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Contacto</th>
                            <th>Modulo a impartir</th>
                          </tr>
                        </thead>
                        <tbody id="maestro">
                        </tbody>
        </table>
      
    </div>
    <div class="tab-pane" id="profile" role="tabpanel">

      <table class="table table-striped text-center" id="tblCuentas">
                        <thead class="bg-info">
                          <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Contacto</th>
                            <th>Carrera</th>
                            <th>Activar</th>
                          </tr>
                        </thead>
                        <tbody id="cuentas">
                        </tbody>
        </table>
                      
        <div class="form-group">
              <input type="button" class="btn btn-success float-right"  id="btnActivar" value="Activar"><span></span>
        </div>
    </div>



  <div class="tab-pane" id="messages" role="tabpanel">
    <br>
      <table class="table table-striped text-center">
                        <thead>
                          <tr class="bg-info">
                            <th style="width: 50px">#</th>
                            <th style="width: 50px">Alumno</th>
                            <th style="width: 50px" id="fechaActual"></th>
                          </tr>
                        </thead>
                        <tbody id="lista">
                          
                        </tbody>
                      </table>
<div class="form-group">
    <input type="button" class="btn btn-success float-right"  id="" value="Guardar asistencia"><span></span>
</div>


<div class="table-responsive">
  <br>
  <br>
  <br>
      <table class="table table-striped text-center table-sm ">
                        <thead>
                          <tr class="bg-info">
                            <th style="width: 50px">#</th>
                            <th style="width: 50px;">Alumno</th>
                            <th style="width: 50px">Fecha</th>
                          </tr>
                        </thead>
                        <tbody id="lista2">
                          
                        </tbody>
      </table>
</div>
                    
  </div>
  <div class="tab-pane" id="settings" role="tabpanel">
    <br>
                <div class="form-group" style="display: inline-block;width: 200px">
                  <label class="col-lg-3 control-label">Modulos:</label>
                  <div class="col-lg-10">
                    <div class="ui-select">
                      <select id="modulos" name="modulos" class="form-control">
                      
                      </select>
                    </div>
                  </div>
                </div>
               <div class="form-group" style="display: inline-block;">
                  <label class="col-lg-12 control-label">Fecha de inicio:</label>
                  <div class="col-lg-12">
                    <input class="form-control" id="txtFechaInicio" type="date" min=<?php $hoy=date("Y-m-d"); echo $hoy;?> />
                  </div>
                </div>
                 <div class="form-group" style="display: inline-block;">
                    <label class="col-lg-12 control-label">Fecha de terminación:</label>
                    <div class="col-lg-12">
                      <input class="form-control" id="txtFechaFin" type="date" min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
                    </div>
                </div>
                  

                 <div class="form-group" style="display: inline-block;">
                  <div class="col-lg-12">
                    <button type="button" class="btn btn-success" id="btnModificarFecha">Cambiar fecha</button>
                  </div>
                </div>


          <table class="table table-striped">
            <thead class="bg-info">
                <tr class="text-center">
                  <th style="width: 50px">Módulo</th>
                  <th style="width: 50px">Fecha de inicio</th>
                  <th style="width: 50px">Fecha de terminación</th>
                </tr>
            </thead>
            <tbody id="tblModulos"></tbody>
          </table>
  </div>
</div><br>
</div>

    <!-- Footer -->

<footer class="page-footer font-small blue pt-4 bg-dark">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Cuadricula row -->
      <div class="row">

        <!-- Cuadricula column -->
        <div class="col-md-6 mt-md-0 mt-3">
          <!-- Contenido -->
          <h5 class="text-uppercase text-light">
            Centro de Innovación Socioecónomica y Tecnológica
          </h5>
          <div class="">
            <p class="text-light">
              <i class="fas fa-phone"></i> +52 (867) 712-0327 <br>
              <i class="fas fa-envelope-open"></i> contacto@centroist.org
            </p>
          </div>
            
            <div class="infod">
              <p class="text-light">
                Av. Luis Donaldo Colosio Km. 2.5,<br>
                Valle real<br>
                Nuevo Laredo, Tamaulipas. México. <br>
                CP: 88000 <br>
                © 2019 Copyright | Centro de Innovación Socioecónomica y Tecnológica

              </p>
            </div>
        </div>
        <!-- Cudri column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Cuadri column -->
        <div class="" style="display: inline-block;">

            <!-- Links -->
            <!--<h5 class="text-uppercase text-light">Siguenos</h5>-->

            <ul class="list-unstyled ">
              <li>
                <a href="https://www.facebook.com/centroist/"><img src="../img/facebook.svg" width="35"></a>
              </li>
              <br>
              <li>
                <a href="http://centroist.org"><img src="../img/istblanco.png" width="35" height="30"></a>
              </li>
              
            </ul>

          </div>
          <!-- Cuadri column -->

          <!-- Cuadri column -->
          <div class="col-md-3 mb-md-0 mb-3">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3541.4031901302506!2d-99.50885468520613!3d27.425542682909526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866118b8bdd010a5%3A0x1bbdad4f53dc3ec1!2sCentro+Cultural+Nuevo+Laredo!5e0!3m2!1ses-419!2smx!4v1551718555256" width="500" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <!-- Cuadri column -->

      </div>
      <!-- Cuadri row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 bg-light">
      <img src="../img/logo4.png" width="110" id="logo">
      <img src="../img/Logo CENTRO IST BLANCO-05[1393].png" width="180" height="50" id="logo">
      <img src="../img/logo3.png" width="180" id="logo">
      <img src="../img/itnl.gif" width="70" id="logo" style="">
      <img src="../img/logo2.png" width="150" id="logo" style="margin-left: ">
      
    </div>
    <!-- Copyright -->

</footer>
  <!-- Footer -->



</body>
</html>
<!--<script type="text/javascript">
  document.getElementById('#fecha').value = new Date().toDateInputValue();
</script>-->
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/metodos_panel_administrador.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script>
  $(function()
  {
      mostrarFechaActual()
      listarCuentas();
      listarModulos();
    

      $('#btnActivar').click(function(event) 
      {
        if (confirm("¿Seguro que desea activar las cuentas seleccionadas?")) 
        {
            $("#tblCuentas input[type=checkbox]:checked").each(function() 
            {      
                $.ajax
                ({
                  url: '../php/usuario.controller.php',
                  type: 'POST',
                  dataType: 'JSON',
                  data: {opcion: 'cambiar_status', id_alumno:$(this).data('id')},
                  beforeSend: function(data)
                  {
                    $('#btnActivar').html('').append('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Por favor espere...');
                  },
                  success: function(data)
                  {
                    if(data.status == 'ok')
                    {
                      console.log(data.msg);
                    }else
                    {
                      console.log(data.msg);
                    }       
                  },
                  error: function(error)
                  {
                    console.log(error);
                  }
                });
            });
        }
      });

      $('#btnModificarFecha').click(function(event) 
      {
          modificarFechasModulos();
      });







    });

    
</script>               

          