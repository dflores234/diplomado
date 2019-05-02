<?php 
	require 'db_conection.php';

	
		$stmt = $pdo->prepare('SELECT nombre_completo, correo_electronico, numero_contacto, nombre_carrera,status 
								from alumno inner join carrera where status = 0 and alumno.id_carrera = carrera.id_carrera;'); 
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($result);
 ?>