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
<!--Navbar-->
  		<div class="container-fluid fixed-top text-center"  style="background-color: white;border-bottom: 0.5px solid lightgray">
          	<nav class="navbar navbar-expand-lg navbar-light container" style="background-color: white">
	            <a class="navbar-brand" href="index.php">
	             <img src="img/Logo CENTRO IST BLANCO-05[1393].png" width="190" height="40" alt="">
                              <hr >
                            <img src="img/Diplomado2-1.png" width="120" height="50"> 
	            </a> 
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		              <span class="navbar-toggler-icon">
		              </span>
	            </button>
	            <div class="collapse navbar-collapse" id="navbarSupportedContent">
	              	<div class="navbar-nav ml-auto">
		                <div>
		                  	<p class="font-weight-bold text-dark" style="margin-top: 5px;">Bienvenido: <?php echo $nombre; ?></p>
		                </div>
		                <div>
		                	<div class="btn-group" style="">
								  	<button style="color:black;margin-right: 20px" type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                   <!--Aqui van el contenido de cada curso-->
    	             	<?php include "maestro_contenidociber.php" ?>
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