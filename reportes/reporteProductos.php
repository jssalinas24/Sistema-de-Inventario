<?php
 include('../conexion/conectar.php');
?>

<?php

                                $c = new Conexion();
                                $cone = $c->conectando();
                                $sql = "select producto.id_producto,proveedor.nombre,producto.id_proveedor,producto.nombre,clasificacion.clasificacion,categoria.categoria,producto.precio,producto.stock from producto inner join proveedor on producto.id_proveedor = proveedor.id_proveedor inner join clasificacion on producto.id_clasificacion = clasificacion.id_clasificacion inner join categoria on producto.id_categoria = categoria.id_categoria";

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
        <title>Módulo Producto</title>
    </head>
    <body> 
        
    <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
  <table class="table" style="width: 98%">
                    <caption><small>Lista Producto</small></caption>
                    <thead>
                    <tr class="bg-danger">
                    <th scope="col" style="width:10%" class="text-light letra">Código Producto</th>
                    <th scope="col" style="width:15%" class="text-light letra">Proveedor</th>
                    <th scope="col" style="width:15%" class="text-light letra">Producto</th>
                    <th scope="col" style="width:15%" class="text-light letra">Clasificación</th>
                    <th scope="col" style="width:15%" class="text-light letra">Categoría</th>
                    <th scope="col" style="width:15%" class="text-light letra">Precio Producto</th>
                    <th scope="col" style="width:15%" class="text-light letra">Cantidad Producto</th>
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
                    <td><?php echo $arreglo[3]  ?></td>
                    <td><?php echo $arreglo[4]  ?></td>
                    <td><?php echo $arreglo[5]  ?></td>
                    <td>$<?php echo number_format ($arreglo[6])  ?></td>
                    <td><?php echo $arreglo[7]  ?></td>
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