<?php 
	

	class Usuario
	{
		private $conexion;
		private $password;
		private $defaultStatus = '0';
		
		function __construct()
		{
			require 'db_conection.php';
			require 'password.class.php';
			$this->conexion = $pdo;
			$this->password = new Password();
		}


		public function registrarUsuario($nombre,$apP,$apM,$correo,$numero_contacto,$contrasena,$semestre,$id_carrera)
		{
			if (!$this->existeUsuario($correo)) 
			{
				$this->conexion->beginTransaction();
				$stmt = $this->conexion->prepare("INSERT INTO alumno(	nombre,
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

				$contraseña = $this->password->encriptar($contrasena);

				$stmt->bindParam(':nombre',$nombre);
				$stmt->bindParam(':apellidop',$apP);
				$stmt->bindParam(':apellidom',$apM);
				$stmt->bindParam(':correo',$correo);
				$stmt->bindParam(':contacto',$numero_contacto);
				$stmt->bindParam(':contrasena', $contraseña);
				$stmt->bindParam(':semestre',$semestre);
				$stmt->bindParam(':status', $this->defaultStatus);
				$stmt->bindParam(':carrera',$id_carrera);

				if ($stmt->execute()) 
				{
					$status = 0;
					$this->conexion->commit();
				} else
				{
					$status = 1;
					$this->conexion->rollBack();
				}
				
			}else
			{
				$status = 2;
			}

			return $status;
		}

		public function iniciarSesion($email,$contrasena)
		{

			if ($this->existeUsuario($email)) 
			{
				
				$stmt = $this->conexion->prepare('SELECT contrasena,status FROM alumno WHERE correo_electronico = :correo');
				$stmt->bindParam(':correo', $email);
	    		$stmt->execute();
	    		$res = $stmt->fetch();
	    		if($this->password->verify($contrasena,$res['contrasena']))
	    		{
	    			if($res['status'] == 1)
	    			{
	    				$status = 0; //Email y contrasena correctos. Cuenta Activa
	    			}else
	    			{
	    				$status = 1; //Email y contrasena correctos. Cuenta inactiva
	    			}
	    		}else
	    		{
  					$status = 2; //contrasenas no coinciden
	    		}

			} else 
			{
				$status = 2; //No existe usuario
			}
			
			return $status;
		}


		public function obtenerDatosUsuario($email)
		{
			
		}

		/*
		* Metodo que nos indica si un usuario ya se encuentra registrado
		*/
		public function existeUsuario($email)
	    {
	    	$stmt = $this->conexion->prepare("SELECT id_alumno FROM alumno WHERE correo_electronico = :email");
	    	$stmt->bindParam(':email',$email);
	    	$stmt->execute();
			return $stmt->rowCount() > 0;
	    }

	}
 ?>