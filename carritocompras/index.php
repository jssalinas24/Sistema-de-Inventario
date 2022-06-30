<?php 
session_start();
?>
<html>
  <head>
    <title>Carrito de Compras</title>
 	<link href="css/estilos.css" type="text/css" rel="stylesheet"> 
  </head>
  
  <body>
  	
<?php include('includes/header.php'); ?>
<h2>Bienvenido a la Librer�a Online</h2>
	
<p>Por favor elija una categor�a:</p>
	
<?php
require_once 'class/Catalogo.php';
require_once 'class/Generales.php';

$obj= new Catalogo();


$cat_array= $obj->get_categorias();
	
if (!is_array($cat_array))
{
	echo "No hay Categorias actualmente disponibles<br>";
	exit;	
}
	
echo "<ul>";
	
foreach ($cat_array as $cat)
{
		
	$url="libros_cat.php?llave=". $cat['id_categoria'];
	$title=$cat['categoria'];
	
	echo "<li>";
	Generales::do_html_URL($url,$title);		
}
echo "</ul>";
echo "<hr>";
?>
</body>
</html>
