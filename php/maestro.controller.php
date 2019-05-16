<?php 
	include_once 'maestro.class.php';
	include_once 'sesion.class.php';
	include_once 'funcs.php';

	$response = array();

	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$maestro = new Maestro();
		switch ($_REQUEST['opcion']) 
		{
			case 'registrar':
							$datos_maestro = json_decode($_REQUEST['datos']);

							$nombre = $apellido = $correo = $contrasena = "";


							
							$nombre = filtrar_entrada($datos_maestro->nombre,FILTER_SANITIZE_STRING);
							$apellido = filtrar_entrada($datos_maestro->apellido,FILTER_SANITIZE_STRING);
							$correo = filtrar_entrada($datos_maestro->correo,FILTER_SANITIZE_EMAIL);
							$nombre_usuario = $nombre.' '.$apellido;

							$resultado = $maestro->registrarMaestro(
																		$nombre,
																		$apellido,
																		'',
																		$correo,
																		$datos_maestro->contacto,
																		$datos_maestro->contrasena,
																		$datos_maestro->modulo
																	);

								switch ($resultado) 
								{
									case 0: 
										$response['status'] = 'ok';
										$response['msg'] = 'El maestro ha sido registrado correctamente.';
										//Enviar correo maestro
										break;
									
									case 1:
										$response['status'] = 'error';
										$response['msg'] = 'Ha ocurrido un error al registrar al maestro.'.$nombre_usuario;
										break;

									case 2:
										$response['status'] = 'error';
										$response['msg'] = 'El correo electrónico ya se encuentra registrado.';
										break;
								}

								
			break;

			case 'iniciar':
							$resultado = $maestro->iniciarSesionMaestros($_REQUEST['correo'],$_REQUEST['contrasena']);
							switch ($resultado) 
							{
								case 0:
									$response['status'] = 'ok';
									$mst = $maestro->obtenerDatosMaestro($_REQUEST['correo']);
									
									$session = new Session();
									$session->setSession('id',$mst['id_instructor']);
									$session->setSession('nombre',$mst['nombre_completo']);
									$session->setSession('id_modulo',$mst['id_modulo']);	
									break;
								case 1:
									$response['status'] = 'error';
									$response['msg'] = 'Usuario y/o contraseña incorrectos.';
								break;
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