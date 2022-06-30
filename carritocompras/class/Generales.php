<?php

//Esta clase contiene los metodos que basicamente no tienen nada que ver con el acceso a datos.
//Contienen metodos como validaciones, pequeños calculos, mostrar campos obtenidos de base de datos
//como enlaces, entre otros metodos.


class Generales
{	
	//Metodo estatico que muestra en forma de enlaces lo que se le pase como parametro.
	public static function do_html_URL($url, $name)
	{
	?>
 	 <a href="<?php echo $url;?>"><?php echo $name; ?></a><br>
	<?php
	}
}
?>
