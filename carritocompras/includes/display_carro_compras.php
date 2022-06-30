<?php
if ($_SESSION['cart']&&array_count_values($_SESSION['cart']))
{
?>


<table border = 0 width = 100% cellspacing = 0>
<tr>

<th colspan="2" bgcolor="#cccccc">Item</th>
<th bgcolor="#cccccc">Precio</th><th bgcolor="#cccccc">Cantidad</th>
<th bgcolor="#cccccc">Total</th>
<th bgcolor="#cccccc">Borrar</th>
<th bgcolor="#cccccc">Actualizar</th>


</tr>

<?php

  foreach ($_SESSION['cart'] as $isbn => $qty)//Empieza Bucle ForEach
  {
  	//Para Cada Libro en el Carro obtenemos su detalle.
    $libro = $obj->get_detalles_libro($isbn);	
?>

	<form name="form" action="actualizar_carrito.php" method="post">
	
	<tr>
	
	<td align="left"> 
	    <img src=<?php echo $libro[0]['imagenProductos']; ?> border="0" height="35" width="35"> 
    </td>   
	 
    <td align = left>
	
    <a href="detalles_libro.php?idProductos=<?php echo $libro[0]['idProductos'];?>">
	<?php echo $libro[0]['nombreProductos'];?>				
	</a> 
	
    </td>
	
	<td align=center>
	<?php echo number_format($libro[0]['valorProductos'],2); ?>
    </td>
	
	<td align = center>
    <input type="text" name="cantidad" size="3" value="<?php echo $qty; ?> " />   
	</td>
		
	<td align = center>
	<?php echo number_format($libro[0]["valorProductos"] * $qty,2);?>
	</td>
		
	<td align = center>	
	<a href="elimina_item.php?isbn=<?php echo $isbn;?>" title="elimina item">
	<img src="images/trash.gif" width="20" height="20" border="0"/>	
	</a>
	</td>
	
	<td align = center>
		<input type="hidden" name="isbn" value="<?php echo $isbn; ?>"
		<input type="image" name="image" src="images/actualizar.gif" />
	</td>			
</tr>
</form>

<?php
  }//Termina Bucle ForEach
?> 
  
<tr>
          <th colspan="3" bgcolor="#cccccc">&nbsp;</td>
          
		  <th align = center bgcolor="#cccccc">
           <?php
			   echo  $_SESSION['items'];
			?>
          </th>
		  
          <th align = center bgcolor="#cccccc">
              <?php echo number_format($_SESSION['total'],2);?>
          </th>
		  
		  <th align = center bgcolor="#cccccc">
             
          </th>
		  
		  <th align = center bgcolor="#cccccc">
          
          </th>		  
</tr>

</table>

<?php
}
else
{
   echo "<p>No hay art�culos en tu carro";
   echo "<hr>";
}
?>