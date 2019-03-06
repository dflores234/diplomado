<?php 
	require 'db_conection.php';

	/**
	 * 
	 */
	class Usuario
	{
		private $conectar;
		private $response = array('status' => null, 'msg' => null );
		
		function __construct(argument)
		{
			$this->conectar = $pdo;
		}


		public function registrarUsuario($nombre,$apP,$apM,$correo,$numero_contacto,$contrasena,$semestre,$status,$id_carrera)
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
																	
																)");
				$stmt->bindParam



			}else
			{
				$this->response['status'] = 'error';
				$this->response['msg'] = 'El correo electrónico ingresado ya existe';
			}

			return $response;
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


	    public function registrarCarrera()
	    {
	    	$stmt = $this->connX->prepare();
	    }
	}







 ?>