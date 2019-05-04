<?php
require 'db_conection.php'; 
	
		$stmt = $pdo->prepare('SELECT id_modulo,nombre_modulo,fecha_inicio,fecha_fin FROM modulo;'); 
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($result);
 ?>