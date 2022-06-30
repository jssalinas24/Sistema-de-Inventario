<?php
session_start();
require_once('class/Catalogo.php');

$isbn=$_GET['isbn'];

unset($_SESSION['cart'][$isbn]);


//Calculamos la cantidad  de items, que el usuarios va a comprar
// mediante el metodo estatico calcular_items y dicho valor lo almacenamos en la variable de sesion
//item. ($_SESSION['items'])
$_SESSION['items']=	Catalogo::calcular_items($_SESSION['cart']);
		
//Calculamos el total a pagar por el usuario, mediante el metodo estatico calcular_total,
//dicho valor obtenido lo almacenamos en la variable de sesion total ($_SESSION['total'])
$_SESSION['total']= Catalogo::calcular_total($_SESSION['cart']);

header("Location:ver_carrito.php");
?>