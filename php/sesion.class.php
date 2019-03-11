<?php 

	
class Session 
{

    


	//Verifica si una clase está seteada por su nombre.
    public static function check($key) 
    {
        $result = FALSE;
        if (isset($_SESSION[$key])) 
        {
            $result = TRUE;
        }
        
        return $result;
    }
    //Obtiene el valor de una sesión por medio del nombre.
    public static function get($key) 
    {
        $result = NULL;
        if (self::check($key)) 
        {
            $result = $_SESSION[$key];
        }
        
        return $result;
    }
    //Elimina la sesión luego de obtener su valor.
    public static function getNdelete($key) {
        $result = self::get($key);
        self::delete($key);
        return $result;
    }
    //Setea una nueva sesión.
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }
    //Elimina por completo una sesión.
    public static function delete($key) {
        if (self::check($key)) {
            unset($_SESSION[$key]);
        }
    }
}
/*
	
	

<?php
Session::set('Saludo', 'Hola mundo');  // Seteamos una sesión
if (Session::check('Saludo')) {
    echo Session::get('Saludo'); // "Hola mundo"
}
Session::getNdelete('Saludo');
echo Session::get('Saludo'); //    (no se obtuvo nada)
?>
*/
?>


