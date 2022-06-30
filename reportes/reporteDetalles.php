<?php
 include('../conexion/conectar.php');
?>

<?php

                                $c = new Conexion();
                                $cone = $c->conectando();
                                $sql = "select detalle.id_detalle,producto.nombre,detalle.id_factura,detalle.precio_unidad_producto,detalle.cantidad_venta_producto,detalle.monto_total_producto from detalle inner join producto on detalle.id_detalle = producto.id_producto";

                                $resultado = mysqli_query($cone,$sql);
                                $arreglo = mysqli_fetch_row($resultado);

?>

<!Doctype html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="html, css, bootstrap y php">
    <link rel="stylesheet" href="../vistas/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vistas/css1/font-awesome.min.css">
        <title>Módulo Detalle</title>
    </head>
    <body> 
        
    <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
  <table class="table" style="width: 98%">
                    <caption><small>Venta Detalle</small></caption>
                    <thead>
                    <tr class="bg-danger">
                    <th scope="col" style="width:10%" class="text-light letra">Código Detalle</th>
                    <th scope="col" style="width:15%" class="text-light letra">Producto</th>
                    <th scope="col" style="width:15%" class="text-light letra">Precio Unidad</th>
                    <th scope="col" style="width:15%" class="text-light letra">Cantidad Venta</th>
                    <th scope="col" style="width:15%" class="text-light letra">Monto Total</th>
                    </tr>
                    </thead>

                    <?php 
                    if ($arreglo>0){
                        do{

                        

                    
                    ?>

                    <tbody>

                    <tr>
                    <td><?php echo $arreglo[0]  ?></td>
                    <td><?php echo $arreglo[1]  ?></td>
                    <td>$<?php echo number_format ($arreglo[3])  ?></td>
                    <td><?php echo $arreglo[4]  ?></td>
                    <td>$<?php echo number_format ($arreglo[5])  ?></td>
                    </tr>
                    </tbody>
                    
                    <?php  }while($arreglo = mysqli_fetch_array($resultado));
                    }else{
                        echo"No existen registros";
                    } 
                    ?>

</table>

  </div>
</div>


      <button name="imprimir" id="desaparece" onclick="imprima()">Imprimir</button>
</body>
</html>

<script>
    function imprima(){
        var obj = document.getElementById("desaparece");
            obj.style.visibility = 'hidden';
            window.close();
            window.focus();
            window.print();
    }

</script>