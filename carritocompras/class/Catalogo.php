<?php

require_once 'class/Conexion.php';

class Catalogo
{

	public function get_categorias()
	{
		$conn= Conexion::db_connect();
		
		$sql="select * from categoria";
		$result=$conn->query($sql);
		
		if (!$result)
			return false;
		
		$cat_array=array();
		
		while ($reg= $result->fetch_assoc())
		{
			$cat_array[]=$reg;
		}
		return $cat_array;
	}
	
	public function get_nombre_cat($llaveCategoria)
	{
		$conn= Conexion::db_connect();
		
		$sql="select categoria from categoria where id_categoria='$llaveCategoria'";
		
		$result=$conn->query($sql);
		
		if (! $result)
			return false;
		
		$num_cats=$result->num_rows;
		
		if ($num_cats ==0)
			return false;
			
		$row=$result->fetch_object();
		return $row->categoria;	
	}
	
	public function get_libros_cat($llaveCategoria)
	{
		$conn= Conexion::db_connect();
		
		$sql="select * from producto where id_categoria='$llaveCategoria'";
		$result=$conn->query($sql);
		
		if (!$result)
			return false;
		
		$prod_array=array();
		
		while ($reg= $result->fetch_assoc())
		{
			$prod_array[]=$reg;
		}
		return $prod_array;	
	}	
	
	public function get_detalles_libro($idProductos)
	{
		$conn= Conexion::db_connect();
		
		$sql="select * from producto where id_producto='$id_producto'";
		$result=$conn->query($sql);
		
		if (!$result)
			return false;
		
		$prod=array();

		if ($reg=$result->fetch_array())
		{
			$prod[]=$reg;
		}
		return $prod;		
	}	
	
	
	public static function calcular_items($cart)
	{
		$items=0;
		
		if (is_array($cart))
		{
			$items=array_sum($cart);
		}
		return $items;
	} 
	
	public static function calcular_total($cart)
	{
		$precio=0.0;
	
		if (is_array($cart))
		{
			$conn= Conexion::db_connect();
			
			foreach ($cart as $isbn=>$cant)
			{
				$sql="select precio from producto where id_producto='$isbn'";
				$result=$conn->query($sql);
			
				if ($result)
				{
					$item=$result->fetch_object();
				
					$item_precio=$item->precio;
					
					$precio += $item_precio * $cant;
				}	
			}
		}
		return $precio;	
	}		
}
?>