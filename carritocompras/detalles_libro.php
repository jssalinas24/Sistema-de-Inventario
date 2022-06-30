<?php session_start();?>
<html>
<head>
    <title>Carrito de Compras</title>
	<link href="css/estilos.css" type="text/css" rel="stylesheet"> 
</head>

<body>

<?php

//Agregamos la Cabecera ala Pagina
 include('includes/header.php');
 require_once('class/Catalogo.php');
 
 $id_producto=$_GET['id_producto'];
 
 $obj= new Catalogo();
 $libro=$obj->get_detalles_libro($id_producto);
?>

<h2><?php echo $libro[0]['nombre'];?></h2>

<?php
if (is_array($libro))
{	
?>
<table>

<tr>

<td>
<img src="<?php echo $libro[0]['imagenProductos']; ?>" border="0"/>
</td>

<td>

<ul>

<li><b>Producto:</b> <?php echo $libro[0]['nombre'];?> 
<li><b>Codigo:</b> <?php echo $libro[0]['id_producto'];?>
<li><b>Precio:</b> <?php echo $libro[0]['precio'];?>


</ul>

</td>

</tr>

</table>
<?php
}
else
  echo "Los detalles de este libro no pueden ser mostrados en este momento.";
  echo "<hr>"; 
?>


<a href="ver_carrito.php?new=<?php echo $libro[0]['id_producto']; ?>">
<img src="images/icono-carrito-de-compras.jpg" border="0">
</a>

</body>

</html>