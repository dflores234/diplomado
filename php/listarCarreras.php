<?php 
	require 'db_conection.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$stmt = $pdo->prepare('SELECT id_carrera, nombre_carrera FROM carrera'); 
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($result);
	}else
	{
		echo "<h1>Eror 403 Prohibido</h1><br><p>Acceso denegado. No tiene permiso para acceder.</p>";
	}
 ?>