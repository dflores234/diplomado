<?php 
	require 'db_conection.php'; 
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{

		$response = array();

		$id_modulo = $_REQUEST['id_modulo'];
		$fecha_inicio = $_REQUEST['fecha_inicio'];
		$fecha_fin = $_REQUEST['fecha_fin'];
	
		$stmt = $pdo->prepare('UPDATE modulo SET fecha_inicio = :fecha_inicio,fecha_fin = :fecha_fin  WHERE id_modulo = :id_modulo'); 
		$stmt->bindParam(':fecha_inicio',$fecha_inicio);
		$stmt->bindParam(':fecha_fin',$fecha_fin);
		$stmt->bindParam(':id_modulo',$id_modulo);
		
		if($stmt->execute())
		{
			$response['status'] = 'ok';
			$response['msg'] = "Se ha actualizado correctamente";
		}else
		{
			$response['status'] = 'error';
			$response['msg'] = "Ha ocurrido un error al modificar las fechas";
		}
		

		echo json_encode($response);
	}



 ?>