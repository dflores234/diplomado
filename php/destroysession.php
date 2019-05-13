<?php 
	include 'sesion.class.php';
	
	$session = new Session();
	$session->destroySession();
	echo "<link rel='stylesheet' href='../css/bootstrap.min.css'>";
	echo "<div class='alert alert-info' role='alert'><strong>Cerrando sesión, por favor espere</strong>
			<div class='spinner-grow spinner-border-sm text-info' role='status'></div>
			<div class='spinner-grow spinner-border-sm text-info' role='status'></div>
			<div class='spinner-grow spinner-border-sm text-info' role='status'></div>
		</div>";
	header('Refresh:1; URL=..\login.php');

 ?>