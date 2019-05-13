<?php 
	require 'db_conection.php';
	require 'funcs.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$response = array();
		$nombre = $descripcion = $link = "";

		$nombre = filtrar_entrada($_REQUEST['nombre'],FILTER_SANITIZE_STRING);
		$descripcion = filtrar_entrada($_REQUEST['descripcion'], FILTER_SANITIZE_STRING);
		$link = filtrar_entrada($_REQUEST['link'],FILTER_SANITIZE_URL);
		
		
		$pdo->beginTransaction();
		$stmt = $pdo->prepare('INSERT INTO recursos_electronicos(nombre_recurso,descripcion_recurso,link_recurso,id_modulo)VALUES(:nombre,:descripcion,:link,:modulo)');
			$stmt->bindParam(':nombre',$nombre);
			$stmt->bindParam(':descripcion',$descripcion);
			$stmt->bindParam(':link',$link);
			$stmt->bindParam(':modulo',$_REQUEST['id_modulo']); 
		if($stmt->execute())
		{
			$response['status'] = 'ok';
			$response['msg'] = 'Se ha ingresado correctamente el recurso';
			$pdo->commit();
		}else
		{
			$response['status'] = 'error';
			$response['msg'] = 'Ha ocurrido un error al realizar la operación. Intente nuevamente más tarde.';
			$pdo->rollBack(); 
		}
		echo json_encode($response);
	}


 ?>