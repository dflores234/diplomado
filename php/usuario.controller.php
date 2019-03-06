<?php 
	require 'usuario.class.php';

	switch ($_POST['option']) 
	{
		$usuario = new Usuario();
		case 'registrar':
			$usuario->CrearUsuario();
			break;
		
		default:
			# code...
			break;
	}


 ?>