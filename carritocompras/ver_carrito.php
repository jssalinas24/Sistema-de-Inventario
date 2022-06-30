<?php
//Iniciamos una sesion
session_start();

//Cargamos la Libreria Catalogo para poder tener aceso a sus metodos.
require_once 'class/Catalogo.php';


//Instanciamos Objeto de  la Clase Catalogo
$obj= new Catalogo();


//Capturamos el parametro new que viene via Get, que indica un nuevo elemento seleccionado.
$new= $_GET['new'];

if ($new)
{
	//Si no existe la variable de sesion cart, inicializamos los valores de las variables de sesion.
	 if(!isset($_SESSION['cart']))
	 {	
	 	$_SESSION['cart']=array();//Variable de sesion cart, va ser un array.	 
		$_SESSION['items']=0;//la variable de sesion items, igual a cero
		$_SESSION['total']='0.00';//variable de sesion total, igual a 0.00
	 }
	 
	 //si existe un libro en el carrito, incrementamos la cantidad cantidad existente en uno.
	if (isset($_SESSION['cart'][$new]))
		$_SESSION['cart'][$new]++;									
	else
	{		//Si no existe el libro en el carrito
		$_SESSION['cart'][$new]=1;	//a�adimos el articulo	
	}	
		
		
	//Calculamos la cantidad  de items, que el usuarios va a comprar
	// mediante el metodo estatico calcular_items y dicho valor lo almacenamos en la variable de sesion
	//item. ($_SESSION['items'])
	$_SESSION['items']=	Catalogo::calcular_items($_SESSION['cart']);
		
	//Calculamos el total a pagar por el usuario, mediante el metodo estatico calcular_total,
	//dicho valor obtenido lo almacenamos en la variable de sesion total ($_SESSION['total'])
	$_SESSION['total']= Catalogo::calcular_total($_SESSION['cart']);	
}
?>

<html>
<head>
    <title>Carrito de Compras</title>
  	<link href="css/estilos.css" type="text/css" rel="stylesheet"> 
</head>

<body>

<?php
//Cabecera de Nuestro Sitio 
include('includes/header.php');
?>
<h2>Tu carro de compra</h2>

<?php
//Mostramos el Carrito de Compras.
//EL formulario de carrito de compras se ha realizado en otro archivo
//debido a su mediana complejidad, y tambien para que el codigo resulte ams entendible
include('includes/display_carro_compras.php');


$target='index.php';

$details=$obj->get_detalles_libro($new);

if ($details[0]['idProductos'])
	$target='libros_cat.php?key='. $details[0]['idProductos'];
?>
<br>
<br>
<center>
<a href="<?php echo $target; ?>">
<img src="images/continue-shopping.gif" border="0" title="Continuar Comprando">
</a>
<br>
<a href="procesa_pedido.php">
<img src="images/place_order.gif" border="0" title="Hacer el Pedido">
</a>
</center>

</body>  
</html>