<?php 
	
	
	class Maestro
	{
		
		private $conexion;
		private $password;

		function __construct()
		{
			require 'db_conection.php';
			require 'password.class.php';
			$this->conexion = $pdo;
			$this->password = new Password();
		}

		public function registrarMaestro($nombre,$apP,$apM,$correo,$numero_contacto,$contrasena,$id_modulo)
		{
			if (!$this->existeMaestro($correo)) 
			{
				$this->conexion->beginTransaction();
				$stmt = $this->conexion->prepare("INSERT INTO instructor
												(
													nombre,
													apellido_paterno,
													apellido_materno,
													correo_electronico,
													numero_contacto,
													contrasena,
													id_modulo
												)VALUES
												(
													:nombre,
													:apellidop,
													:apellidom,
													:correo,
													:contacto,
													:contrasena,
													:modulo
												)");

				$contraseña = $this->password->encriptar($contrasena);

				$stmt->bindParam(':nombre',$nombre);
				$stmt->bindParam(':apellidop',$apP);
				$stmt->bindParam(':apellidom',$apM);
				$stmt->bindParam(':correo',$correo);
				$stmt->bindParam(':contacto',$numero_contacto);
				$stmt->bindParam(':contrasena', $contraseña);
				$stmt->bindParam(':modulo',$id_modulo);

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


		public function existeMaestro($email)
	    {
	    	$stmt = $this->conexion->prepare("SELECT id_instructor FROM instructor WHERE correo_electronico = :email");
	    	$stmt->bindParam(':email',$email);
	    	$stmt->execute();
			return $stmt->rowCount() > 0;
	    }

	    public function iniciarSesion($email,$contrasena)
		{
			if ($this->existeMaestro($email)) 
			{
				
				$stmt = $this->conexion->prepare('SELECT contrasena FROM instructor WHERE correo_electronico = :correo');
				$stmt->bindParam(':correo', $email);
	    		$stmt->execute();
	    		$res = $stmt->fetch();
	    		if($this->password->verify($contrasena,$res['contrasena']))
	    		{
	    			
	    			$status = 0; //Email y contrasena correctos. Cuenta Activa
	    		}else
	    		{
  					$status = 1; //contrasenas no coinciden
	    		}

			} else 
			{
				$status = 1; //No existe maestro
			}
			
			return $status;
		}

		public function obtenerDatosMaestro($email)
		{
			$stmt = $this->conexion->prepare("SELECT id_instructor, nombre_completo, id_modulo FROM instructor WHERE correo_electronico = :correo");
			$stmt->bindParam(':correo', $email);
	    	$stmt->execute();
	    	$res = $stmt->fetch(PDO::FETCH_ASSOC);
	    	return $res;
		}


		
	}





 ?>