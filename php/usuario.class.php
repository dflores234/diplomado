<?php 
	require 'db_conection.php';
	require 'password.class.php';

	class Usuario
	{
		private $conectar;
		private $password;

		
		function __construct()
		{
			$this->conectar = $pdo;
			$this->password = new Password();
		}


		public function registrarUsuario($nombre,$apP,$apM,$correo,$numero_contacto,$contrasena,$semestre,$id_carrera)
		{
			if (!$this->existeUsuario($correo)) 
			{
				$stmt = $this->connX->prepare("INSERT INTO alumno(	nombre,
																	apellido_paterno,
																	apellido_materno,
																	correo_electronico,
																	numero_contacto,
																	contrasena,
																	semestre,
																	status,
																	id_carrera
																) VALUES
																(
																	:nombre,
																	:apellidop,
																	:apellidom,
																	:correo,
																	:contacto,
																	:contrasena,
																	:semestre,
																	:status,
																	:carrera
																)");
				$stmt->bindParam(':nombre',$nombre);
				$stmt->bindParam(':apellidop',$apP);
				$stmt->bindParam(':apellidom',$apM);
				$stmt->bindParam(':correo',$correo);
				$stmt->bindParam(':contacto',$apP);
				$stmt->bindParam(':contrasena',$password->encriptar($contraseña));
				$stmt->bindParam(':semestre',$semestre);
				$stmt->bindParam(':status', '0');
				$stmt->bindParam(':carrera',$id_carrera);

				if ($stmt->execute()) 
				{
					$status = 0;
				} else
				{
					$status = 1;
				}
				
			}else
			{
				$status = 2;
			}

			return $status;
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