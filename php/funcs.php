<?php 
		
	/* Función */
	function check_in_range($fecha_inicio, $fecha_fin, $fecha)
	{
		
		$fecha_inicio = strtotime($fecha_inicio);
	    $fecha_fin = strtotime($fecha_fin);
	    $fecha = strtotime($fecha);

	    if(($fecha >= $fecha_inicio) && ($fecha <= $fecha_fin)) 
	    {
	    	return true;
		}else 
		{
	         return false;
	    }
 	}


 	function filtrar_entrada($dato,$filtro) 
	{
			$dato = strip_tags($dato);
		 	return filter_var($dato,$filtro);
	}

 ?>