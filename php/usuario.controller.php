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
							$resultado = $usuario->registrarUsuario(
									$_REQUEST['nombre'],
									$_REQUEST['apellidop'],
									$_REQUEST['apellidom'],
									$_REQUEST['correo'],
									$_REQUEST['contacto'],
									$_REQUEST['contrasena'],
									$_REQUEST['semestre'],
									$_REQUEST['carrera']
								);

							switch ($resultado) 
							{
								case 0:
									$response['status'] = 'ok';
									$response['msg'] = 'El usuario ha sido registrado correctamente.';
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



			
		}
	} else 
	{
		$response['msg'] = 'Solicitud no permitida';	
	}
	

	echo json_encode($response);

 ?>