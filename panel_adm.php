<!DOCTYPE html>
<html>
<head>
      		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/panel.css">
        <link rel="shortcut icon" href="img/istblanco.png">
        
	<title>Panel de Administrador</title>
</head>
<body>
	<!--Navbar-->
	<?php include 'header2.php' ?>

	<!---SASASA-->
<br>
<div class="container">
  <h2>Administrador</h2>
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
  Bienvenido administrador
</div>
  <div class="tab-pane" id="profile" role="tabpanel">
      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th >Nombre</th>
                            <th >Apellido</th>
                            <th >Correo</th>
                            <th >Activar <input type="checkbox" name="" style="margin-left: 5px"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                            <td><input type="checkbox" name=""></td>
                          </tr>
                          <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                            <td><input type="checkbox" name=""></td>
                          </tr>
                          <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                            <td><input type="checkbox" name=""></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="form-group">
                                <label class="col-md control-label"></label>
                                <div class="col-md-2" >
                                  <input type="submit" class="btn btn-primary"  id="activar" value="Activar">
                                  <span></span>
                                </div>
                      </div>
  </div>
  <div class="tab-pane" id="messages" role="tabpanel">
      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 50px">Nombre</th>
                            <th style="width: 50px">Apellido</th>
                            <th style="width: 50px">Correo</th>
                            <th style="width: 5px">Asistencia</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                            <td><input type="checkbox" name=""></td>
                          </tr>
                          <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                            <td><input type="checkbox" name=""></td>
                          </tr>
                          <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                            <td><input type="checkbox" name=""></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="form-group">
                                <label class="col-md control-label"></label>
                                <div class="col-md-2" >
                                  <input type="submit" class="btn btn-primary"  id="asistencia" value="Asistencia">
                                  <span></span>
                                </div>
                      </div>
  </div>
  <div class="tab-pane" id="settings" role="tabpanel">
    <br>
                <div class="form-group" style="display: inline-block;width: 200px">
                  <label class="col-lg-3 control-label">Modulos:</label>
                  <div class="col-lg-10">
                    <div class="ui-select">
                      <select id="modulos" name="modulos" class="form-control">
                      <option value="1">Python</option>
                      <option value="2">Sensibilización y capacitación en I4.0 e IoT </option>
                      <option value="3"> Ciberseguridad </option>
                      <option value="4">Sistemas interactivos basados en visión para ayuda al operador (VR Y AR) </option>
                      <option value="5">Visión Artificial Inteligente </option>
                      <option value="6"> Big Data, IoT </option>
                      </select>
                    </div>
                  </div>
                </div>
               <div class="form-group" style="display: inline-block;">
                  <label class="col-lg-12 control-label">Fecha de inicio:</label>
                  <div class="col-lg-12">
                    <input class="form-control" id="txttelefono" type="date">
                  </div>
                </div>
                 <div class="form-group" style="display: inline-block;">
                  <label class="col-lg-12 control-label">Fecha de terminación:</label>
                  <div class="col-lg-12">
                    <input class="form-control" id="txttelefono" type="date">
                  </div>
                </div>
  </div>
</div>

<script>
 
</script>
</div><br><br>
    
 
  <?php include "footer.php" ?>

</body>
</html>
<script type="text/javascript" src="js/jquery.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>