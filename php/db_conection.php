<?php 
	require 'constantes.php';
	
	/*Creación de la conexión con la BD*/
		$pdo = new PDO('mysql:host='.LOCALHOST.';dbname='.DBNAME.';charset='.DEFAULT_CHARSET.'', USERDB, PASSWORD);
 ?>
