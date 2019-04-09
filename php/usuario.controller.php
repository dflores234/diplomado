<?php 
	include_once 'usuario.class.php';
	include_once 'sesion.class.php';

	$response = array();

	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$usuario = new Usuario();
		switch ($_REQUEST['opcion']) 
		{
			case 'registrar':
							$datos_registro = json_decode($_REQUEST['datos']);

							$nombre = $apellido = $correo = $contrasena = $semestre = $carrera = "";

							/**/
							$nombre = filtrar_entrada($datos_registro->nombre,FILTER_SANITIZE_STRING);
							$apellido = filtrar_entrada($datos_registro->apellido,FILTER_SANITIZE_STRING);
							$correo = filtrar_entrada($datos_registro->correo,FILTER_SANITIZE_EMAIL);
							$semestre = filtrar_entrada($datos_registro->semestre,FILTER_VALIDATE_INT);
							$carrera = filtrar_entrada($datos_registro->carrera,FILTER_VALIDATE_INT);

							$resultado = $usuario->registrarUsuario(
																		$nombre,
																		$apellido,
																		'',
																		$correo,
																		$datos_registro->numero,
																		$datos_registro->ccontrasena,
																		$semestre,
																		$carrera
																	);

								switch ($resultado) 
								{
									case 0: 
										$response['status'] = 'ok';
										$response['msg'] = 'El usuario ha sido registrado correctamente.';
										$response['otro'] = $usuario->enviarCorreo($_REQUEST['correo'],'../plantillas/confirmacion.tpl',$response['msg'],$nombre_usuario);
										break;
									
									case 1:
										$response['status'] = 'error';
										$response['msg'] = 'Ha ocurrido un error al registrar al usuario.';
										break;

									case 2:
										$response['status'] = 'error';
										$response['msg'] = 'El correo electrónico ya se encuentra registrado.';
										break;
								}*/
			//https://diego.com.es/seguridad-web-en-php*/
			break;

			case 'iniciar':

					if(!empty($_REQUEST['correo']) && !empty($_REQUEST['contrasena']))
					{
						$resultado = $usuario->iniciarSesion($_REQUEST['correo'],$_REQUEST['contrasena']);
						switch ($resultado) 
						{
							case 0:
								$response['status'] = 'ok';
								$usr = $usuario->obtenerDatosUsuario($_REQUEST['correo']);
								
								$session = new Session();
								$session->setSession('id',$usr['id_alumno']);
								$session->setSession('nombre',$usr['nombre_completo']);
								$session->setSession('avatar',$usr['avatar']);	
								break;
							case 1:
								$response['status'] = 'error';
								$response['msg'] = 'La cuenta no se encuentra activa. Espere correo electrónico o algo asi';
								break;
							case 2:
								$response['status'] = 'error';
								$response['msg'] = 'Usuario y/o contraseña incorrectos.';
							break;
						}
					}else
					{
						$response['status'] = 'error';
						$response['msg'] = 'No ha escrito nada en Usuario y/o contraseña.'; 
					}
			break;

			case 'actualizar': 
								$resultado = $usuario->actualizaPerfil(
									$_REQUEST['id'],
									$_REQUEST['correo'],
									$_REQUEST['contacto'],
									$_REQUEST['avatar'],
									$_REQUEST['contrasena']);
								if($resultado == true)
								{
									$response['status'] = 'ok';
									$response['msg'] = 'Los datos se han actualizado correctamente'; 
								}else
								{
									$response['status'] = 'error';
									$response['msg'] = 'Ha ocurrido un error al actualizar los datos. Intente nuevamente mas tarde.'; 
								}
			break;	
		}
	} else 
	{
		$response['status'] = "error";
		$response['msg'] = 'Solicitud no permitida';	
	}
	

	/**/
	function filtrar_entrada($dato,$filtro) 
	{
	 	return filter_var($dato,$filtro);
	}

	echo json_encode($response);

 ?>