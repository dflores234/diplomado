<?php 

	
class Session 
{

    //Inicia una session sino existe
    function __construct()
    {
        if(!isset($_SESSION))
        {
            session_start();
        }
    }

    //Setea un valor en una session
    public function setSession($key, $value) 
    {
        $_SESSION[$key] = $value;
    }

    //Obtiene el valor de una sesión por medio del nombre.
    public function getSession($key) 
    {
        $result = NULL;
        if ($this->checkSession($key)) 
        {
            $result = $_SESSION[$key];
        }
        
        return $result;
    }

	//Verifica si una clase está seteada por su nombre.
    public function checkSession($key) 
    {
        $result = FALSE;
        if (isset($_SESSION[$key])) 
        {
            $result = TRUE;
        }
        
        return $result;
    }

    public function destroySession()
    {
        if(isset($_SESSION))
        { 
            session_destroy();
        }
    }
}
    //https://phpocean.com/tutorials/back-end/learn-how-to-use-php-sessions/56`
    //https://www.tutorialspoint.com/php/index.htm
?>
