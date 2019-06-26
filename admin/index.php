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
  <style type="text/css">
      hr{
  border:         none;
    border-left:    1px solid hsla(200, 10%, 50%,100);
    height:         2vh;
    width:          1px; 
    display: inline-block;
    margin:0px;
  }
    </style>
</head>
<body>
  <!--Navbar-->
  <div class="container-fluid fixed-top text-center"  style="background-color: white;border-bottom: 0.5px solid lightgray">
          <nav class="navbar navbar-expand-lg navbar-light container" style="background-color: white">
            <a class="navbar-brand" href="index.php">
             <img src="../img/Logo CENTRO IST BLANCO-05[1393].png" width="190" height="40" alt="">
                              <hr >
                            <img src="../img/Diplomado2-1.png" width="120" height="50"> 
            </a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="navbar-nav ml-auto">
                <div>
                  <p class="font-weight-bold" style="margin-top: 5px;color: gray">Bienvenido administrador</p>
                </div>
                <div>
                	<div class="btn-group" style="">
						  
						  <button style="color: gray;margin-right: 20px" type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
   <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-controls="settings">Modulos</a>
  </li>
  <li>
    <a class="nav-link " data-toggle="tab" href="#maestrolis" role="tab" aria-controls="home">Maestro inscritos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Cuentas inactivas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Lista Asistencia</a>
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
              <input class="form-control" type="text" placeholder="Teclee su nombre" id="txtnombreMaestro" required="required">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Apellidos</label>
              <div class="col-lg-9">
              <input class="form-control"  id="txtapellidoMaestro" type="text" value="" placeholder="Apellido Paterno / Apellido Materno" required="">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Correo:</label>
              <div class="col-lg-9">
              <input class="form-control" type="email" placeholder="example2@mail.com" id="txtcorreoMaestro" required="">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-5 control-label">Número de contacto:</label>
              <div class="col-lg-9">
              <input class="form-control" id="txttelefonoMaestro" type="tel" placeholder="(867)136754" maxlength="10" minlength="10" required="">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <label class="col-lg-5 control-label">Modulo a impartir:</label>
              <div class="col-lg-9">
                <div class="ui-select">
                    <select id="modulosM" class="form-control">
                    </select>
                </div>
              </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Contraseña:</label>
                <div class="col-md-9">
                  <input class="form-control" id="txtcontraseñaMaestro" type="password" placeholder="*******" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-5 control-label">Confirmar contraseña:</label>
                <div class="col-md-9">
                  <input class="form-control" id="txtccontraseñaMaestro" type="password" placeholder="*******" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label"></label>
                <div class="col-md-9">
                  <button type="button" class="btn btn-info float-right" id="btnGuardarMaestro"> 
                    <i class="fa fa-check-circle"></i>
                     Guardar
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

      <table class="table table-striped text-center">
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
          <input type="button" class="btn btn-success float-right"  id="btnGuardarAsistencia" value="Guardar asistencia"><span></span>
      </div>
    <div class="table-responsive">
      <br>
      <br>
      <br>
          <table class="table table-striped text-center table-sm ">
            <thead>
              <tr class="bg-info">
                <th style="width: 50px">#</th>
                <th style="width: 50px">Clase</th>
                <th style="width: 50px;">Alumno</th>
                <th style="width: 50px">Fecha</th>
                <th style="width: 50px">Asistencia</th>
              </tr>
            </thead>
            <tbody id="lista2"></tbody>
          </table>
    </div>              
  </div>
 

  <div class="tab-pane" id="settings" role="tabpanel">
    <br>
                <div class="form-group" style="display: inline-block;width: 200px">
                  <label class="col-lg-3 control-label">Modulos:</label>
                  <div class="col-lg-10">
                    <div class="ui-select">
                      <select id="modulos" class="form-control"></select>
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

          <!-- Cuadri column  AQUI IBA EL MAPA-->
          <div class="col-md-3 mb-md-0 mb-3">
          
          </div>
          <!-- Cuadri column -->

      </div>
      <!-- Cuadri row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 bg-light">
      <img src="../img/logo7.png" width="140" id="logo">
      <img src="../img/logo5.png" width="150" id="logo">
      <img src="../img/Logo CENTRO IST BLANCO-05[1393].png" width="140" height="40" id="logo">
      <img src="../img/logo3.png" width="160" id="logo">
      <img src="../img/itnl.gif" width="60" id="logo">
      <img src="../img/logo2.png" width="140" id="logo" >
      <img src="../img/logo6.png" width="170" id="logo" >
      
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
      mostrarFechaActual();
      listarCuentas();
      listarNombreModulo();
      listarModulos();
      listarMaestros();
      listarAlumnos();
    

      $('#btnActivar').click(function(event) 
      {
        if (confirm("¿Seguro que desea activar las cuentas seleccionadas?")) 
        {
            $("input[type=checkbox]:checked").each(function() 
            {  
                $.ajax
                ({
                  url: '../php/usuario.controller.php',
                  type: 'POST',
                  dataType: 'JSON',
                  data: {opcion: 'cambiar_status', id_alumno:$(this).val()},
                  beforeSend: function(data)
                  {
                    $('#btnActivar').html('').append('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Por favor espere...');
                  },
                  success: function(data)
                  {
                    if(data.status == 'ok')
                    {
                      alert(data.msg);
                      console.log(data.otro);
                      listarCuentas();
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


            
      $('#btnGuardarMaestro').click(function(event)
      {
          var datos_maestro =
          {
                  nombre: $('#txtnombreMaestro').val(),
                  apellido: $('#txtapellidoMaestro').val(),
                  correo: $('#txtcorreoMaestro').val(),
                  contacto: $('#txttelefonoMaestro').val(),
                  contrasena: $('#txtccontraseñaMaestro').val(),
                  modulo: $('#modulos').val()
          };
        $.ajax
        ({
            type: 'POST',
            data:{ datos:JSON.stringify(datos_maestro), opcion:'registrar'},
            url:'../php/maestro.controller.php',
            dataType: 'json',
            beforeSend: function(data)
            {
              //Loader de registro
              /*$('#registrar').html('').append('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Por favor espere...');*/
            },
            success:function(data)
            {
              //Alerta de retroalimentacion
              /* $('#mdlBody').append(data.msg+"<br>Se ha enviado un correo electrónico");
              $('#modalRetro').modal({show: true});*/
              console.log(data);
            },
            error:function(error)
            {
              //Alerta de error
               console.log(error);
            }
        });
    });



  });

    
</script>               

          