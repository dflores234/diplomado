<?php 
	include 'sesion.class.php';
	
	$session = new Session();
	$session->destroySession()
	header('Refresh:2; URL=index.html');


 ?>