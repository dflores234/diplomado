<?php 
	include_once 'usuario.class.php';
	include_once 'sesion.class.php';
	include_once 'funcs.php';

	$response = array();

	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$usuario = new Usuario();
		switch ($_REQUEST['opcion']) 
		{
			case 'registrar':
							$datos_registro = json_decode($_REQUEST['datos']);

							$nombre = $apellido = $correo = $empresa = $contrasena = $semestre = $carrera = "";


							/**/
							$nombre = filtrar_entrada($datos_registro->nombre,FILTER_SANITIZE_STRING);
							$apellido = filtrar_entrada($datos_registro->apellido,FILTER_SANITIZE_STRING);
							$correo = filtrar_entrada($datos_registro->correo,FILTER_SANITIZE_EMAIL);
							$empresa = filtrar_entrada($datos_registro->empresa, FILTER_SANITIZE_STRING);
							$semestre = filtrar_entrada($datos_registro->semestre,FILTER_VALIDATE_INT);
							$carrera = filtrar_entrada($datos_registro->carrera,FILTER_VALIDATE_INT);
							$nombre_usuario = $nombre.' '.$apellido;

							$resultado = $usuario->registrarUsuario(
																		$nombre,
																		$apellido,
																		'',
																		$correo,
																		$datos_registro->contacto,
																		$empresa,
																		$datos_registro->ccontrasena,
																		$semestre,
																		$carrera
																	);

								switch ($resultado) 
								{
									case 0: 
										$response['status'] = 'ok';
										$response['msg'] = 'El usuario ha sido registrado correctamente. Se ha enviado un correo electronico confirmando su registro';
										$usuario->enviarCorreo($correo,'../plantillas/confirmacion.tpl',$response['msg'],$nombre_usuario);
										break;
									
									case 1:
										$response['status'] = 'error';
										$response['msg'] = 'Ha ocurrido un error al registrar al usuario.';
										break;

									case 2:
										$response['status'] = 'error';
										$response['msg'] = 'El correo electrónico ya se encuentra registrado.';
										break;
								}
			
			break;

			case 'iniciar':
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
								$session->setSession('correo',$usr['correo_electronico']);
								$session->setSession('telefono',$usr['numero_contacto']);		
								break;
							case 1:
								$response['status'] = 'error';
								$response['msg'] = 'La cuenta no se encuentra activa. Espere correo electrónico confirmando que ya puede acceder a la plataforma.';
								break;
							case 2:
								$response['status'] = 'error';
								$response['msg'] = 'Usuario y/o contraseña incorrectos.';
							break;
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

			case 'recuperar':
				$res = $usuario->cambiarContrasena($_REQUEST['correo']);
				switch ($res['opcion']) 
				{
					case 1:
						$response['status']='ok';
						$response['msg'] = 'Accede a tu correo electrónico para recuperar la contraseña.';
						$response['otro'] = $usuario->enviarCorreoContrasena($_REQUEST['correo'],'../plantillas/recuperarcontrasena.tpl','Recuperación de contraseña',$_REQUEST['correo'],$res['pass']);
						break;
					
					case 2:
						$response['status']='error';
						$response['msg'] = 'Ha ocurrido un error al realizar la operación. Intente nuevamente más tarde.';
						break;
				}
			break;

			case 'cambiar_status':
				$resultado = $usuario->cambiarStatus($_REQUEST['id_alumno']);
				if ($resultado) 
				{
					$datos = $usuario->obtenerNombreCorreo($_REQUEST['id_alumno']);
					$response['status'] = 'ok';
					$response['msg'] = "Se ha activado la cuenta";
					//Enviar correo de cuenta activa
					$response['otro'] = $usuario->enviarCorreo($datos['correo_electronico'],'../plantillas/activacion.tpl',$response['msg'],$datos['nombre_completo']);
				} else 
				{
					$response['status'] = 'error';
					$response['msg'] = 'Ha ocurrido un error al activar la cuenta';
				}
			break;	
		}
	} else 
	{
		$response['status'] = "error";
		$response['msg'] = 'Solicitud no permitida';	
	}


	echo json_encode($response);

 ?>