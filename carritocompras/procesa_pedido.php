<?php
session_start();
require_once 'class/CarroCompras.php';

$obj= new CarroCompras();


if($_SESSION['cart'] && $_SESSION['items'] && $_SESSION['total'])
{
		
	if ($obj->insertar_pedido())
	{
		echo estoy;
		session_destroy();
		echo "<script type='text/javascript'>
		alert('Su Pedido Ha Sido Procesado con Exito, Haremos la Entrega de Su Pedido en las proximas 24 Horas.');
		window.location='index.php';
		</script>";
	}
	else
	{
 	session_destroy();
 	echo "Pedido Fallido.";
	}
}
else
{
	echo "<script type='text/javascript'>
		alert('No hay Articulos en el Carrito.');
		window.location='index.php';
		</script>";
}
?>