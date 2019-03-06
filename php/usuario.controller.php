<?php 
	include_once 'usuario.class.php';
	$response = array();

	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		
		$usuario = new Usuario();
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
			case '0':
				$response['status'] = 'ok';
				$response['msg'] = 'El usuario ha sido registrado correctamente.';
				break;
			
			case '1':
				$response['status'] = 'error';
				$response['msg'] = 'Ha ocurrido un error al registrar al usuario.';
				break;

			case '2':
				$response['status'] = 'error';
				$response['msg'] = 'El correo electrónico ya se encuentra registrado.';
				break;
		}





	} else 
	{
		$response['msg'] = 'Solicitud no permitida';	
	}
	

	echo json_encode($response);

 ?>