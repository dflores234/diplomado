	 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		 	<div class="container">    
					<div style="margin-top:50px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="panel-title text-center">Modificar contraseña</div>
							</div>     
							
							<div style="padding-top:30px" class="panel-body" >
								
								<div id="loginform" class="form-horizontal">
									<input type="hidden" id="user_id" name="user_id" value ="<?php echo $user_id; ?>" />
									<input type="hidden" id="token" name="token" value ="<?php echo $token; ?>" />
				
									<div class="form-group">
										<label for="password" class="col-md-3 control-label">Nuevo Password</label>
										<div class="col-md-9">
											<input type="password" class="form-control" id="password" placeholder="Escribir contraseña...">
										</div>
									</div>
									
									<div class="form-group">
										<label for="con_password" class="col-md-3 control-label">Confirmar Password</label>
										<div class="col-md-9">
											<input type="password" class="form-control" id="con_password" placeholder="Confirmar contraseña...">
										</div>
									</div>
									
									<div style="margin-top:10px" class="form-group">
										<div class="col-sm-12 controls">
											<button id="btnModificar" type="button" class="btn btn-info btn-block">Modificar</button>
										</div>
									</div>   
								</div>
							</div> 

							<div class="panel-footer">
								<p class="text-light text-center">
									 © 2019 Copyright | Centro de Innovación Socioecónomica y Tecnológica
								</p>
							</div>                    
						</div>  
					</div>
			</div>

			<script type="text/javascript" src="../js/jquery.js"></script>
			<script type="text/javascript">
				$(function()
				{
					$('#btnModificar').click(function(event) 
					{
						if($('#password').val() == '')
						{
							$('#password').css('border-color', 'red');
							$('#password').attr('placeholder','No se permiten este campo en blanco');
						}else
						{
							$('#password').removeAttr('style');
						}

						if($('#con_password').val() == '')
						{
							$('#con_password').css('border-color', 'red');
							$('#password').attr('placeholder','No se permiten este campo en blanco');
						}else
						{
							$('#con_password').removeAttr('style');
						}

						if($('#password').val() == $('#con_password').val())
						{
							//
						}else
						{
							alert('No son iguales');
						}

					});
				});
			</script>
