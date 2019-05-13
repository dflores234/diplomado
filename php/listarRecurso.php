<?php 
	include 'db_conection.php';

	$stmt = $pdo->prepare('SELECT nombre_recurso, descripcion_recurso,link_recurso,id_modulo from recursos_electronicos'); 
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($result);
 ?>