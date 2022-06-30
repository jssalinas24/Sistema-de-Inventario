<?php
 include('../conexion/conectar.php');
 include('../modelo/modeloProducto.php');
?>
<?php
$obj = new producto();
if($_POST){
        $obj->id_producto = $_POST['id_producto'];
        $obj->id_proveedor = $_POST['id_proveedor'];
        $obj->id_clasificacion = $_POST['id_clasificacion'];
        $obj->id_categoria = $_POST['id_categoria'];
        $obj->nombre = $_POST['nombre'];
        $obj->precio = $_POST['precio'];
        $obj->stock = $_POST['stock'];
}
?>
<?php
$llave = $_GET['key'];
$c = new Conexion();
$cone = $c->conectando();
$sql = "select * from producto where id_producto = '$llave'";
$resultado = mysqli_query($cone,$sql);
if($arreglo = mysqli_fetch_row($resultado)){
    $obj->id_producto = $arreglo[0];
    $obj->id_proveedor = $arreglo[1];
    $obj->id_clasificacion = $arreglo[2];
    $obj->id_categoria = $arreglo[3];
    $obj->nombre = $arreglo[4];
    $obj->precio = $arreglo[5];
    $obj->stock = $arreglo[6];
}
else{
    $obj->id_producto = null;
    $obj->id_proveedor = null;
    $obj->id_clasificacion = null;
    $obj->id_categoria = null;
    $obj->nombre = null;
    $obj->precio = null;
    $obj->stock = null;
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="idth=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/.css">
         	
        <title>Eliminar Producto</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="producto" method="POST">
                <table border="1">
                        <tr>
                            <td colspan="2"><center>Eliminar Producto</center></td>
                        </tr>
                        <tr>
                            <td>Código Producto</td>
                            <td><input readOnly size="20" type="number" name="id_producto" id="id_producto" value="<?php echo $obj->id_producto?>"></td>
                        </tr>
                        <tr>
                            <td>Proveedor</td>
                            <td><input readOnly size="20" type="hidden" name="id_proveedor" id="id_proveedor" value="<?php echo $obj->id_proveedor?>">
                                    <?php   
                                            $c = new Conexion();
                                            $cone = $c->conectando();
                                            $p3 = "select nombre from proveedor where id_proveedor='$obj->id_proveedor'";
                                            $res3 = mysqli_query($cone,$p3);
                                            if ($arreglo3 = mysqli_fetch_row($res3)){
                                                echo $arreglo3[0];
                                            }else{
                                                $arreglo3[0]=null;
                                            }
                                    ?>
                        </tr>
                        <tr>
                            <td>Clasificación</td>
                            <td><input readOnly size="20" type="hidden" name="id_clasificacion" id="id_clasificacion" value="<?php echo $obj->id_clasificacion?>">
                                    <?php   
                                            $c = new Conexion();
                                            $cone = $c->conectando();
                                            $p2 = "select clasificacion from clasificacion where id_clasificacion='$obj->id_clasificacion'";
                                            $res2 = mysqli_query($cone,$p2);
                                            if ($arreglo2 = mysqli_fetch_row($res2)){
                                                echo $arreglo2[0];
                                            }else{
                                                $arreglo2[0]=null;
                                            }
                                    ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Categoría</td>
                            <td><input readOnly size="20" type="hidden" name="id_categoria" id="id_categoria" value="<?php echo $obj->id_categoria?>">
                                    <?php   
                                            $c = new Conexion();
                                            $cone = $c->conectando();
                                            $p = "select categoria from categoria where id_categoria='$obj->id_categoria'";
                                            $res = mysqli_query($cone,$p);
                                            if ($arreglo = mysqli_fetch_row($res)){
                                                echo $arreglo[0];
                                            }else{
                                                $arreglo[0]=null;
                                            }
                                    ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Producto</td>
                            <td><input readOnly size="20" type="text" name="nombre" id="nombre" value="<?php echo $obj->nombre?>"></td>
                        </tr>
                        <tr>
                            <td>Precio</td>
                            <td><input readOnly size="50" type="number" name="precio" id="precio" value="<?php echo $obj->precio?>"></td>
                        </tr>
                        <tr>
                            <td>Cantidad</td>
                            <td><input readOnly size="50" type="number" name="stock" id="stock" value="<?php echo $obj->stock?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center>
                                    <button type="submit" name="elimina">Eliminar</button>
                                    <a href="consultarProducto.php">
                                             <button type="button" name="salir">Salir</button>
                                    </a>
                                </center>
                            </td>
                        </tr>
                </table>
            </form>
        </center>  
    </body> 
</html>