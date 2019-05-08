<?php 
	require 'db_conection.php'; 
	require 'funcs.php';
	include 'sesion.class.php';
		$ids = array();
		$session = new Session();

		$stmt = $pdo->prepare('SELECT id_modulo, fecha_inicio,fecha_fin FROM modulo;'); 
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		foreach ($result as $valor) 
		{
			if(check_in_range($valor['fecha_inicio'],$valor['fecha_fin'],date('Y-m-d')))
			{
			
				array_push($ids, $valor['id_modulo']);
				$session->setSession('id_modulo',$valor['id_modulo']);
			}
		}

	$response['ids'] = $ids;
	echo json_encode($response);
		


 ?>