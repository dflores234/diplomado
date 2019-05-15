<?php 
	require 'db_conection.php'; 
	
		$stmt = $pdo->prepare('SELECT id_modulo FROM modulo WHERE '); 
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($result);

?>