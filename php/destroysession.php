<?php 

	include 'sesion.class.php';
	$session = new Session();

	$session->destructSession();

	header("Location: ../index.html");


 ?>