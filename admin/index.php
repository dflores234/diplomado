<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/panel.css">
        <link rel="shortcut icon" href="../img/istblanco.png">
        
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
                  <p class="font-weight-bold text-light">Bienvenido administrador</p>
                </div>
                <div>
                  <a href="http://fakeuser:fakepassword@localhost:8080/diplomado/admin/_logout/" class="btn btn-light">Salir</a>
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
<div class="container">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Cuentas</a>
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

</div>
  <br>
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
          <label class="col-md control-label"></label>
            
              <input type="submit" class="btn btn-success float-right"  id="btnActivar" value="Activar"><span></span>
            
        </div>
  </div>



  <div class="tab-pane" id="messages" role="tabpanel">
      <table class="table table-striped text-center">
                        <thead>
                          <tr class="bg-info">
                            <th style="width: 50px">Alumno</th>
                            <th style="width: 50px">Fecha</th>
                            <th style="width: 5px">Asistencia</th>
                          </tr>
                        </thead>
                        <tbody id="cuentas">
                          
                        </tbody>
                      </table>
                    
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
                    <input class="form-control" id="txtFechaInicio" type="date">
                  </div>
                </div>
                 <div class="form-group" style="display: inline-block;">
                  <label class="col-lg-12 control-label">Fecha de terminación:</label>
                  <div class="col-lg-12">
                    <input class="form-control" id="txtFechaFin" type="date">
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
                        <tbody id="tblModulos">
                          
                        </tbody>
                      </table>



  </div>
</div>

<script>
 
</script>
</div><br><br>
    
 
  <?php include "../footer.php" ?>

</body>
</html>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/metodos_panel_administrador.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script>
  $(function()
  {
      listarCuentas();

      listarModulos();
    

      $('#btnActivar').click(function(event) 
      {
        $("input[type=checkbox]:checked").each(function()
        {
          //cada elemento seleccionado
          alert($(this).val());
        });
         
      });




      $('#btnModificarFecha').click(function(event) 
      {
        
          modificarFechasModulos();
      });
    
  });

</script>               
<tr>
          