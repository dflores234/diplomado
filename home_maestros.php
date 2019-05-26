<?php 
  include 'php/sesion.class.php';
  
    $session = new Session();

    if ($session->getSession('id')) 
    {
        $id_modulo = $session->getSession('id_modulo');
        $nombre = $session->getSession('nombre');
    }
    else 
    {
      header("Location: index.php");
    }



 ?>



<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   		<link rel="stylesheet" type="text/css" href="css/home_maestro.css">
        <link rel="shortcut icon" href="img/istblanco.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>Home maestros</title>
</head>
<body>
<!--Navbar-->
  		<div class="container-fluid fixed-top text-center"  style="background-color: #23AAE1">
          	<nav class="navbar navbar-expand-lg navbar-light container" style="background-color: #23AAE1">
	            <a class="navbar-brand" href="index.php">
	              <img src="img/Diplomado3 - copia.png" width="160" height="63" class="d-inline-block align-top" alt="">
	            </a> 
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		              <span class="navbar-toggler-icon">
		              </span>
	            </button>
	            <div class="collapse navbar-collapse" id="navbarSupportedContent">
	              	<div class="navbar-nav ml-auto">
		                <div>
		                  	<p class="font-weight-bold text-light" style="margin-top: 5px;">Bienvenido: <?php echo $nombre; ?></p>
		                </div>
		                <div>
		                	<div class="btn-group" style="">
								  	<button style="color: white;margin-right: 20px" type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    <span class="sr-only">Toggle Dropdown</span>
								  	</button>
								  	<div class="dropdown-menu">
								    	<a class="dropdown-item" href="php/destroysession.php" class="btn btn-outline-dark" >Salir</a>
								  	</div>
							</div>
		                  
		                </div>
	              	</div>
	            </div>
        	</nav>
        </div>
        <!--Contenido del home-->
        <div class="main-section">
       		<div class="contanier">
       			<ul class="nav nav-tabs" id="myTab" role="tablist" >
       				<li class="nav-item">
       					<a class="nav-link active" data-toggle="tab" href="#contenido" role="tab" aria-controls="contenido">Contenido del modulo</a>
       				</li>
       				<li>
       					<a class="nav-link" data-toggle="tab" href="#contenidoadd" role="tab" aria-controls="contenidoadd">Agregar contenido al modulo</a>
       				</li>
       			</ul>
       			<!--Aqui va el contenido de las pesta;as-->
       			<div class="tab-content">
       				<div class="tab-pane active" id="contenido" role="tabpanel">
       					<br>
       					<div style="width: 200px;margin: 0 auto;">
    		               <h1 style="font-size: 30px"> <img src="img/code.svg" width="40">PYTHON </h1>
    	             	</div>
    	             	<div id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingOne">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Introducción a python
                            </a>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >
                          <div class="card-body bg-light">
                              <div class="contanier">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                    <iframe src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21116&amp;authkey=ADddGjuHiXXNY8w&amp;em=2&amp;wdAr=1.3333333333333333" width="500" height="400" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <h3>Introducción a Python</h3><hr style="background-color: black">
                                          <ul align="left" style="font-size: 14px;">
                                             <li>¿Qué es Python?</li>
                                            <li>Ventajas de python </li>
                                            <li>Entorno de python</li>
                                            <li>Declaracíon de variables</li>
                                            <li>Imprimir mensajes</li>
                                            <li>Ingresar datos</li>
                                            <li>Operaciones matematicas y funciones matematicas</li>
                                            <li>Importar librerias</li>                              
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
                              Sentencias en python
                            </a>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >
                          <div class="card-body bg-light">
                              <div class="contanier">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br> 
                                    <iframe src="https://onedrive.live.com/embed?cid=B58A0C42EAF6FEE8&amp;resid=B58A0C42EAF6FEE8%21117&amp;authkey=AMEzBstc55hAcco&amp;em=2&amp;wdAr=1.7777777777777777" width="500" height="320" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <h3>Sentencias en python</h3><hr style="background-color: black">
                                          <ul align="left" style="font-size: 14px;">
                                <li>Sentencia 'if'</li>
                                <li>Operadores condicionales </li>
                                <li>Errores comunes</li>
                                <li>Sentencia 'elif'</li>
                                <li>Misceláneo</li>
                                <li>Conteo</li>
                                <li>Suma</li>
                                <li>Intercambio</li>
                                <li>Banderas</li>
                                <li>Máximos y mínimos</li>
                                <li>Comentarios</li>
                              </ul>
                                  </div>
                                </div>
                              </div> 
                          </div>
                        </div>
                    </div>
                      <div class="card">
                        <div class="card-header bg-white" role="tab" id="headingThree">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                              Material descargable
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" >
                          <div class="card-body bg-light">
                              <div class="contanier">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <a href="https://www.python.org/downloads/"  target="_blank" style="color:blue">Descarga python</a>
                                  </div>
                               
                                </div>
                              </div> 
                          </div>
                        </div>
                    </div>
              
                    </div>
       				</div>
       				<div class="tab-pane" id="contenidoadd" role="tabpanel">
       					<br>
       					<form class="form-horizontal" role="form" onsubmit="return Validar()" name="form" method="POST">
       						   <div class="form-group">
  					              <label class="col-lg-3 control-label">Nombre del articulo:</label>
  					              <div class="col-lg-6">
  					              <input class="form-control" type="text" placeholder="Introduzca aquí el nombre del artículo" id="txtNombreArt" required="required">
  					              </div>
            				</div>
            				  <div class="form-group">
        							    <label class="col-lg-3 control-label" for="Descripcion">Descripción:</label>
        							    <div class="col-lg-6">
        							    	<textarea class="form-control" id="txtDescArt" rows="3"></textarea>
        							    </div>  
  							       </div>
  							       <div class="form-group">
  					              <label class="col-lg-3 control-label">Link del artículo:</label>
  					              <div class="col-lg-6">
  					              <input class="form-control" type="text" placeholder="Introduzca aquí el link" id="txtLink" required="required">
					             </div>
            				</div>
            				<div class="form-group">
					                <label class="col-md-2 control-label"></label>
					                <div class="col-md-6">
					                  <button type="button" class="btn btn-info float-right" id="guardarArt"> 
					                    <i class="fa fa-check-circle"></i>
					                      Guardar
					                  </button>
					                </div>
            				</div>
       					</form>
       				</div>
       			</div>
       		</div>
        </div>
        <!--Fin del contenido de home-->
        <div style="margin-bottom: 200px"></div>
        <?php include "footer.php" ?>
</body>
</html>

<!--Scripts-->
<script type="text/javascript" src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
    function Validar(){
        if (form.txtNombreArt.value=="" || form.txtDescArt.value=="" || form.txtLink.value=="") 
        {
          $(txtNombreArt).css("border","1px solid red");$(txtDescArt).css("border","1px solid red");return false
        }
        
       }
</script>
<script type="text/javascript">
  /*$(function() 
  {
      $('#guardarArt').click(function(event) 
      {    
          $.ajax
          ({
              type: 'POST',
              data:{ nombre:$('#txtNombreArt').val(),descripcion:$('#txtDescArt').val(), link:$('#txtLink').val() ,id_modulo:<?php echo $id_modulo; ?> },
              url:'php/altaRecurso.php',
              dataType: 'JSON',
              beforeSend: function(data)
              {
                $('#guardarArt').html('').append('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Por favor espere...');  
              },
              success:function(data)
              {
                if(data.status == 'ok')
                {
                    alert(data.msg);
                    $('#guardarArt').html('').append('Guardar');
                }else
                {
                  console.log(data.msg);
                }
              },
              error:function(error)
              {       
                console.log(error);
              }
          });
      });
  });*/

</script>