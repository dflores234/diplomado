<?php 

?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Evaluación de python</title>
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/preguntas.css">
  	<link rel="shortcut icon" href="img/istblanco.png">
  </head>
  <body>
  		<!--Menu-->
      <div class="container-fluid fixed-top text-center" style="background-color: #23AAE1" >
        <nav class="navbar navbar-expand-lg navbar-light container" style="background-color: #23AAE1">
    	   <a class="navbar-brand" href="#">
    	    <img src="img/Diplomado3 - copia.png" width="160" height="63" class="d-inline-block align-top" alt="">
    	   </a>
    	   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	   <span class="navbar-toggler-icon"> 
         </span>
    	   </button>
    	   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	     <div class="navbar-nav ml-auto">
            
    	     </div>
    	   </div>
    	 </nav>
      </div>
      <div class="main-section">
      	<h3 align="center" style="font-size: 35px">EVALUACIÓN</h3><br>
      	<form class="form-horizontal" method="post">
  		<!--INICIO DE LA PREGUNTAS-->
  		<div class="pregunta">
  			<span class="numero-pregunta">1.</span>
  			¿Cuál de estas son caracteristicas de python?
  		</div>
  		<ul class="alternativas">
  			<li>
  				<label>
  					<input type="radio" name="respuesta1" value="V">
  					Lenguaje interpretado, Multiparadigma
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta1" value="F">
  					Enfocado en web y servidores
  				</label>
  			</li>
  		</ul>
  		<div class="pregunta">
  			<span class="numero-pregunta">2.</span>
  			Las variables pueden...
  		</div>
  		<ul class="alternativas">
  			<li>
  				<label>
  					<input type="radio" name="respuesta2" value="V">
  					Tener números, letras y guiones
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta2" value="F">
  					Solo pueden tener letras y números
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta2" value="F">
  					Empezar con guiones y números
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta2" value="F">
  					Pueden tener espacios
  				</label>
  			</li>
  		</ul>
  		<div class="pregunta">
  			<span class="numero-pregunta">3.</span>
  			La forma correctar de imprimir un mensaje es:
  		</div>
  		<ul class="alternativas">
  			<li>
  				<label>
  					<input type="radio" name="respuesta3" value="F">
  					Print "Mensaje"
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta3" value="F">
  					Console.readline("Mensaje")
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta3" value="F">
  					print("mensaje");
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta3" value="V">
  					print('mensaje')
  				</label>
  			</li>
  		</ul>
  		<div class="pregunta">
  			<span class="numero-pregunta">4.</span>
  			¿Se puede realizar operaciones matemáticas en la instrucción "print" ?
  		</div>
  		<ul class="alternativas">
  			<li>
  				<label>
  					<input type="radio" name="respuesta4" value="V">
  					Verdadero 
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta4" value="F">
  					Falso
  				</label>
  			</li>
  		</ul>
  		<div class="pregunta">
  			<span class="numero-pregunta">5.</span>
  			¿Cuál de las siguientes instrucciones es incorrecta?
  		</div>
  		<ul class="alternativas">
  			<li>
  				<label>
  					<input type="radio" name="respuesta5" value="F">
  					print('3+4')
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta5" value="F">
  					print(3+4)
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta5" value="V">
  					print(hola mundo)
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta5" value="F">
  					print('la suma total es', 53+45)
  				</label>
  			</li>
  		</ul>
  		<div class="pregunta">
  			<span class="numero-pregunta">6.</span>
  			Eliga la forma corecta de ingresar datos (tanto caracteres como valores númericos):
  		</div>
  		<ul class="alternativas">
  			<li>
  				<label>
  					<input type="radio" name="respuesta6" value="F">
  					nombre_de_la_variable=input('algun mensaje') y nombre_de_la_variable=input('algun número')
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta6" value="F">
  					console.write("algun mensaje") y nombre_de_la_variable=eval(input('algun número'))
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta6" value="V">
  					nombre_de_la_variable=input('algun mensaje') y nombre_de_la_variable=eval(input('algun número'))
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta6" value="F">
  					nombre_de_la_variable=input(variable) y nombre_de_la_variable=eval(output('algun número'))
  				</label>
  			</li>
  		</ul>
  		<div class="pregunta">
  			<span class="numero-pregunta">7.</span>
  			Eliga la forma correcta de hacer un ciclo FOR:
  		</div>
  		<ul class="alternativas">
  			<li>
  				<label>
  					<input type="radio" name="respuesta7" value="F">
  					<p style="display: inline-block;margin-left: 10px">
  						for x in range (80):
  							<p style="margin-left: 50px;">print (hola mundo)</p>
  					</p>
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta7" value="F">
  					<p style="display: inline-block;margin-left: 10px">
  						for (int i=5;i<8;i=i+1)
  							<p style="margin-left: 50px;">
  							{
  							print('hola mundo')
  							}
  							</p>
  					</p>
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta7" value="F">
  					<p style="display: inline-block;margin-left: 10px">
  						for(int x=0;x>-10;x--)
  							<p style="margin-left: 50px;">
  								{	
									printf("El contador X vale: %d\n",x);
    							}
  							</p>
  					</p>
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta7" value="V">
  					<p style="display: inline-block;margin-left: 10px">
  						for x in range (80):
  							<p style="margin-left: 50px;">print ('hola mundo')</p>
  					</p>
  				</label>
  			</li>
  		</ul>
  		<div class="pregunta">
  			<span class="numero-pregunta">8.</span>
  			Eliga un error común en la sentecia if
  		</div>
  		<ul class="alternativas">
  			<li>
  				<label>
  					<input type="radio" name="respuesta8" value="V">
  					if=1:
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta8" value="F">
  					if==1:
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta8" value="F">
  					if x >=80 and x<90:
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta8" value="F">
  					if 80<=x<90:
  				</label>
  			</li>
  		</ul>
  		<div class="pregunta">
  			<span class="numero-pregunta">9.</span>
  			Eliga la forma correcta de importa una libreria:
  		</div>
  		<ul class="alternativas">
  			<li>
  				<label>
  					<input type="radio" name="respuesta9" value="F">
  					from random export randint
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta9" value="F">
  					import pi from math
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta9" value="F">
  					from math this sqrt
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta9" value="V">
  					from random import randint
  				</label>
  			</li>
  		</ul>
  		<div class="pregunta">
  			<span class="numero-pregunta">10.</span>
  			¿Como se ponen los comentarios en python?
  		</div>
  		<ul class="alternativas">
  			<li>
  				<label>
  					<input type="radio" name="respuesta10" value="V">
  					""" Comentario"""
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta10" value="F">
  					/*Comentario*/
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta10" value="F">
  					//Comentario//
  				</label>
  			</li>
  			<li>
  				<label>
  					<input type="radio" name="respuesta10" value="F">
  					'comentario'
  				</label>
  			</li>
  		</ul>


  		<div class="col-md-12">
              <button type="submit" class="btn btn-info" value="Evaluar" id="evaluar" style="float: right;width: 200px;height: 50px;margin-bottom: 20px;font-size: 25px;border-radius: 10px;">Evaluar</button> 
        </div>
  	</form>
      </div>

  	
  
  </body>
  </html>