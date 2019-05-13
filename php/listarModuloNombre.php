<?php 
include 'db_conection.php';
	$stmt = $pdo->prepare('SELECT id_modulo,nombre_modulo FROM modulo;'); 
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($result);

 ?>