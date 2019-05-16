<?php 
	include 'db_conection.php';
	include 'sesion.class.php';

	$session = new Session();
	

  	$id_alumno = $session->getSession('id');
  	$response = array();
		if (($_FILES["file"]["type"] == "image/pjpeg")
		    || ($_FILES["file"]["type"] == "image/jpeg")
		    || ($_FILES["file"]["type"] == "image/png")
		    || ($_FILES["file"]["type"] == "image/gif")) 
			{
				$rutaSubida = "../img/perfiles/".$_FILES['file']['name'];
			    if (move_uploaded_file($_FILES["file"]["tmp_name"], $rutaSubida))
			    {
			        $foto = "./img/perfiles/".$_FILES['file']['name'];
			        try
			        {
			        		$pdo->beginTransaction();
					        $stmt = $pdo->prepare("UPDATE alumno SET avatar = :avatar WHERE id_alumno = :id");
					        $stmt->bindParam(':avatar', $foto);
					        $stmt->bindParam(':id',$id_alumno);
					        
					        if($stmt->execute())
					        {
					        	$response['status'] = 'ok';
					        	$response['msg'] = 'Se ha actualizado correctamente la foto de perfil';
					        	$response['src'] = $foto;
					        	$session->setSession('avatar',$foto); 
					        	$pdo->commit();
					        }else
					        {
					        	$response['status'] = 'error';
					        	$response['msg'] = 'Ha ocurrido un error al actualizar la foto de perfil. Intente nuevamente más tarde.'; 
					        	$pdo->rollBack();
					        }
					}catch(PDOException $e)
					{
						$response['error'] = $e->getMessage();
					}
			    }else 
			    {
			       $response['status'] = 'error';
			       $response['msg'] = 'Ha ocurrido un error al subir la foto al servidor. Intente nuevamente más tarde.'; 
			    } 
		} 
		else 
		{
		    $response['status'] = 'error';
			$response['msg'] = 'El archivo seleccionado no es un formato de imagen'; 
		}

	echo json_encode($response);
 ?>