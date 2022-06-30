<?php
session_start();
require_once 'class/Catalogo.php';
require_once 'class/Generales.php';

$obj= new Catalogo();

$key=$_GET['llave'];
echo $key;
$llaveCategoria=$obj->get_nombre_cat($key);
?>
<html>
<head>
    <title>Carrito de Compras</title>
	<link href="css/estilos.css" type="text/css" rel="stylesheet"> 
</head>

<body>
<?php include('includes/header.php'); ?>

<h2><?php echo $llaveCategoria;?></h2>

<?php

$libro_array=$obj->get_libros_cat($key);

if (is_array($libro_array) && count($libro_array)>0)
{
	
?>

<table width ="100%">
<?php
	foreach ($libro_array as $row)
	{
		$url="detalles_libro.php?idProductos=". $row['idProductos'];
?>
	<tr>
		
	<td width="100">
		<a href="<?php echo $url;?>">
			<img src="<?php echo $row['imagenProductos']; ?>" border="0">		
		</a>
	</td>
	
	<td>	
	<?php
	
		$title= $row['nombreProductos'];
		Generales::do_html_URL($url,$title); 
	?>	
	</td>
			
	</tr>

<?php
	}
}
else
{
	echo "<strong>No Hay Libros para esta categoria.</strong><br><br>";
	echo "<a href='index.php'>
			<img src='images/back.gif' border=0>
		 </a>";
	exit;
}
?>
</table>
<hr>
</body>
</html>
