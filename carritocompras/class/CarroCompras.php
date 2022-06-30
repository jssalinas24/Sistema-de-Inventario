<?php

require_once 'class/Conexion.php';
require_once 'class/Catalogo.php';

class CarroCompras
{

	public function insertar_pedido()
	{
		$conn= Conexion::db_connect();
		
		$sql="insert into pedidos values (null,'luis',now(),now())";
		$result=mysql_query($sql);
		echo $result;
		
		if (!$result)
			return false;
					
		$sql="select id_pedido from pedidos  where usuario='luis' and fecha=now() and hora=now()";					

		
		$result2=mysql_query($sql);
			
		$pedido=mysql_fetch_object($result2);
				
		$cod=$id_pedido;	
		
		echo $cod;	

		//Obtengo el IdPedido para pasarselo a detalles mediante el metodo insert_id, 
		//este metodo lo que hace es recuperar el ultimo id autoincrementable que se registro en la BD.

		$id_pedido=$insert_id();


				
	/*	$sql="select max(id_pedido) from pedidos";
		
		$result=$conn->query($sql);
		
		if ($result->num_rows>0)
		{
			$pedido=$result->fetch_object();
			$idpedido=$pedido->id_pedido;	
		}
		else
		{
			return false;
		}*/
		
		$obj=new Catalogo();
		
		foreach ($_SESSION['cart'] as $isbn=>$cant)
		{
			$detail=$obj->get_detalles_libro($isbn);
			
		/*	$sql="delete from detalle_pedido where id_pedido=$cod and isbn='$isbn'";
			$result=$conn->query($sql);*/
			
			//$precio=$detail[0]['precio'];	
		
			$sql="insert into detalle_pedido values ($id_pedido, '$isbn', ".$detail[0]['precio'].", $cant)";
			$result1=mysql_query($sql);
			echo $result1;
			if (!$result)
				return false;			
		}
		
		//Si LLega hasta Aquí, se grabo OK el pedido, devolvemos TRUE.
		return true;	
	}

}



?>