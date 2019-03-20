<?php 
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

	class Usuario
	{
		private $conexion;
		private $password;
		private $defaultStatus = '0';
		private $avatarDefault = 'img/avatar.jpg';
		
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
																	id_carrera,
																	avatar
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
																	:carrera,
																	:avatar
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
				$stmt->bindParam(':avatar', $this->avatarDefault);


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
			$stmt = $this->conexion->prepare("SELECT id_alumno, nombre_completo,avatar FROM alumno WHERE correo_electronico = :correo");
			$stmt->bindParam(':correo', $email);
	    	$stmt->execute();
	    	$res = $stmt->fetch(PDO::FETCH_ASSOC);
	    	return $res;
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


	    public function actualizaPerfil($id,$correo,$contacto,$avatar,$contrasena)
	    {
	    	$stmt = $this->conexion->prepare("UPDATE alumno SET correo_electronico = :correo, numero_contacto = :contacto,avatar = :avatar, contrasena = :contrasena  WHERE id = :id");

	    	$contraseña = $this->password->encriptar($contrasena);

			$stmt->bindParam(':correo', $email);
			$stmt->bindParam(':contacto', $contacto);
	    	$stmt->bindParam(':avatar',$avatar);
	    	$stmt->bindParam(':contrasena', $contraseña);
	    	$stmt->bindParam(':id',$id);

	    	if($stmt->execute())
	    	{
	    		$this->conexion->commit();
	    		return true;
	    	}else
	    	{
	    		$this->conexion->rollBack();
	    		return false;
	    	}
	    }

	    function enviarCorreo($email,$tpl,$subject='Holi')
	    {
			
			require 'PHPMailer/PHPMailer.php';
			require 'PHPMailer/Exception.php';
			require 'PHPMailer/SMTP.php';

			include 'class.TemplatePower.inc.php';

			$tpl = new TemplatePower($tpl);
			$tpl->prepare();
			$tpl->assign('usuario', 'JDF');

			//Creamos la instancia de la clase PHPMAiler
				$mail = new PHPMailer(TRUE);
			
			try{

			//El método que usaremos es por SMTP
				$mail->SMTPDebug = 2;
				$mail->isSMTP();
			// Los datos necesarios para enviar mediante SMTP
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPAuth = true;
				$mail->Username = 'codecampapp@gmail.com';
				$mail->Password = '@Sefuerte365';
				$mail->SMTPSecure = 'tls';
				$mail->Port = 587;


			// Asignamos el From y el FromName para que el destinatario sepa quien envía el correo
			
				$mail->setFrom('contacto@centroist.org', 'Centro IST');
    			$mail->addAddress($email, 'Joe User');     // Add a recipient
    			//$mail->addAddress('ellen@example.com');

			//Asignamos el subject, el cuerpo del mensaje y el correo alternativo
    			$mail->isHTML(true);
				$mail->Subject = $subject;
				$mail->Body = $tpl->getOutputContent();
				$mail->send();
				return "El mensaje ha sido enviado";
			}catch(Exception $e)
			{

				return "El mensaje no ha sido enviado. Codigo de error: {$mail->ErrorInfo}";
			}
			
	    }
	}
 ?>