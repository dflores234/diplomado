<?php 
	require 'db_conection.php';

		$stmt = $pdo->prepare('SELECT id_alumno, nombre_completo from alumno where status = 1'); 
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($result);
 ?>