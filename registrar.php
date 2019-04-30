<!DOCTYPE html>
	<html lang="es">
		<head>
			<!--Modales para los mensajes-->
			<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet"/>

			<meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<title>Registrate</title>
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/registro.css">
			<link rel="shortcut icon" href="img/istblanco.png">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		</head>
		<body>
			<!--Menu-->
    		<?php include("header.php") ?>  
    		<!--Fin menu-->
    		<!--Banner-->
    		<div class="container-fluid banner d-flex justify-content-right item align-items-center banner">
    			<div class="text-left " style="color: #23AAE1">
    				<h3>
    					¡Bienvenido!
    				</h3>
    				<h3>
    				Antes de registrarte <br>verifica los requisitos para unirte
    				</h3>
    			</div>
    		</div>
			<!--Fin del banner-->
			<!--Formulario-->
			<div class="main-section">
    	<div>
	     <div class="container">
	     	<div class="row">
            <!-- columna para formulario de editar -->
              	<div class="col-md-6 personal-info">
                	<h3>
                  		Crea tu cuenta <img src="img/regis.svg" width="30" height="30">
                	</h3>
        		<div class="form-horizontal" role="form" >
        			<div id="form-registrar">
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
			           <div class="form-group">
			            <label class="col-lg-3 control-label">Carreras:</label>
			            <div class="col-lg-9
			            ">
			              <div class="ui-select">
			                <select id="carreras" class="form-control">
			                </select>
			              </div>
			            </div>
			          </div>
			          <div class="form-group">
			            <div class="col-lg-9">
			              <input class="form-control" id="otracarrera" type="text" placeholder="Escriba su carrera" style="display: none;">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-lg-3 control-label">Semestre/Cuatrimestre:</label>
			            <div class="col-lg-10">
			              <div class="ui-select">
			                <select id="semestre" name="semestre" class="form-control">
					            <option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
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
      <div class="col-md-5">
                <div class="text-center">
                	<h3>
						¿Ya estas registrado?
					</h3>
					
					<a href="login.php" style="text-decoration: none">
						Inicia sesión <img src="img/users.svg" width="20" align="center">
					</a>	
						<br><br>
						<h6>Bienvenido al Diplomado Nuevo Laredo 4.0 </h6>
					<p align="left"> 
						Al registrarte en el diplomado tendras acceso a los distintos modulos, tales como: 
						<ul style="text-align: left;">
							<li>Ciberseguirdad</li>
							<li>Big Data</li>
							<li>IoT</li>
							<li>Visión Artificial Inteligente</li>
							<li>Sistemas interactivos basados en visión para ayuda al operador (VR Y AR)</li>
						</ul>
						
						Requisitos para registrarte <img src="img/tips.svg" width="20"><br>
						<img src="img/checked.svg" width="20"> Ser egresado de últimos semestres de las carreras:
						<ul style="text-align: left;">
							<li>
								Sistemas computacionales
							</li>
							<li>
								Mecatrónica
							</li>
							<li>
								Electrónica
							</li>
							<li>
								Industrial
							</li>
							<li>
								Eléctrica
							</li>
							<li>
								Mantenimiento industrial
							</li>
						</ul>
						<img src="img/checked.svg" width="20"> Disponibilidad de horario viernes y sábados en horarios de 9AM a 6PM <br>
						<img src="img/checked.svg" width="20"> Tener conocimientos básicos de programción en alguno
						de los siguientes lenguajes:
						<ul style="text-align: left;">
							<li>
								C++
							</li>
							<li>
								Python
							</li>
							<li>
								Java
							</li>
						</ul>
					</p>
					
              	</div>
              </div>
 				</div>
			</div>
		</div>
    </div>
			<!--Contenido fuera del formulario-->
			
			<!-- Footer -->
			<?php include("footer.php") ?>
		
  			<!-- Footer -->       
		</body>
	</html>

	<!--  JavaScript -->
	    <script src="js/jquery.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <!--Validar campos-->
	    <script type="text/javascript" src="js/validar_registro.js"></script>
	     <script type="text/javascript" src="js/validar.js"></script>
	     <!--Script para los modales-->
	     <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>
	    <script src="js/misscripst.js"></script>
	    <script  type="text/javascript">
		    $(function() 
		    {
		    	listarCarreras();
		    });
	    </script>

