<?php 
	require 'db_conection.php';

	/**
	 * 
	 */
	class Usuario
	{
		private $conectar;
		function __construct(argument)
		{
			$this->conectar = $pdo;
		}


		public function CrearUsuario($nombre,$apP,$apM,$correo,$numero_contacto,$contrasena,$semestre,$status,$id_carrera)
		{
			if (!$this->existeUsuario($correo)) 
			{
				//Insertar usuario
			}else
			{
				//usuario ya existe
			}
		}


		/*
		* Metodo que nos indica si un usuario ya se encuentra registrado
		*/
		public function existeUsuario($email)
	    {
	    	$stmt = $this->connX->prepare("SELECT id_alumno FROM alumno WHERE correo_electronico = :email");
	    	$stmt->bindParam(':email',$email);
	    	$stmt->execute();
			return $stmt->rowCount() > 0;
	    }
	}







 ?>