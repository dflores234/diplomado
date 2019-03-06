<?php 

	/**
	 * Clase que nos permitirá encriptar y verificar las contraseñas
	 */
	class Password 
	{
		
		public static function encriptar($password)
		{
			return password_hash($password, PASSWORD_DEFAULT, ['cost' => 15]);
		}

		public static function verify($password, $hash) 
		{
        	return password_verify($password, $hash);
    	}
	}



 ?>