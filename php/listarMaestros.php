<?php 
	include 'db_conection.php';

	$stmt = $pdo->prepare('SELECT nombre_completo, numero_contacto, correo_electronico, nombre_modulo FROM instructor INNER JOIN modulo WHERE instructor.id_modulo = modulo.id_modulo'); 
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($result);
 ?>