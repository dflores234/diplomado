<?php 
			use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

			require 'PHPMailer/PHPMailer.php';
			require 'PHPMailer/Exception.php';
			require 'PHPMailer/SMTP.php';

			include 'class.TemplatePower.inc.php';

			$tpl = new TemplatePower('../plantillas/confirmacion.tpl');
			$tpl->prepare();
			$tpl->assign('usuario', 'JDF');

			//Creamos la instancia de la clase PHPMAiler
				$mail = new PHPMailer(TRUE);
			
			try{

			//El método que usaremos es por SMTP
				//$mail->SMTPDebug = 2;
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
    			$mail->addAddress('dflores234@gmail.com', 'Joe User');     // Add a recipient
    			//$mail->addAddress('ellen@example.com');

			//Asignamos el subject, el cuerpo del mensaje y el correo alternativo
    			$mail->isHTML(true);
				$mail->Subject = "REGISTRO EXITOSO!";
				$mail->Body = $tpl->getOutputContent();
				$mail->send();
				echo "El mensaje ha sido enviado";
			}catch(Exception $e)
			{

				echo "El mensaje no ha sido enviado. Codigo de error: {$mail->ErrorInfo}";
			}

 ?>