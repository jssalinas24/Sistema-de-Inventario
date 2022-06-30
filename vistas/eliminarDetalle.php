<?php
 include('../conexion/conectar.php');
 include('../modelo/modeloDetalle.php');
?>
<?php
$obj = new detalle();
if($_POST){
        $obj->id_detalle = $_POST['id_detalle'];
        $obj->id_factura = $_POST['id_factura'];
        $obj->id_producto = $_POST['id_producto'];
        $obj->precio_unidad_producto = $_POST['precio_unidad_producto'];
        $obj->cantidad_venta_producto = $_POST['cantidad_venta_producto'];
        $obj->monto_total_producto = $_POST['monto_total_producto'];
}
?>
<?php
$llave = $_GET['key'];
$c = new Conexion();
$cone = $c->conectando();
$sql = "select * from detalle where id_detalle = '$llave'";
$resultado = mysqli_query($cone,$sql);
if($arreglo = mysqli_fetch_row($resultado)){
    $obj->id_detalle = $arreglo[0];
    $obj->id_factura = $arreglo[1];
    $obj->id_producto = $arreglo[2];
    $obj->precio_unidad_producto = $arreglo[3];
    $obj->cantidad_venta_producto = $arreglo[4];
    $obj->monto_total_producto = $arreglo[5];
}
else{
    $obj->id_detalle = null;
    $obj->id_factura = null;
    $obj->id_producto = null;
    $obj->precio_unidad_producto = null;
    $obj->cantidad_venta_producto = null;
    $obj->monto_total_producto = null;
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="idth=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../vistas/css/bootstrap.min.css">
        <link rel="stylesheet" href="../vistas/css1/font-awesome.min.css">
         	
        <title>Eliminar Detalle</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="detalle" method="POST">
                <table border="1">
                        <tr>
                            <td colspan="2"><center>Eliminar Detalle</center></td>
                        </tr>
                        <tr>
                            <td>Código Detalle</td>
                            <td><input readOnly size="45" type="number" name="id_detalle" id="id_detalle" value="<?php echo $obj->id_detalle?>"></td>
                        </tr>
                        <tr>
                            <td>Factura</td>
                            <td><input readOnly size="20" type="hidden" name="id_factura" id="id_factura" value="<?php echo $obj->id_factura?>">
                                    <?php   
                                            $c = new Conexion();
                                            $cone = $c->conectando();
                                            $p2 = "select id_factura from factura where id_factura='$obj->id_factura'";
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
                            <td>Producto</td>
                            <td><input readOnly size="20" type="hidden" name="id_producto" id="id_producto" value="<?php echo $obj->id_producto?>">
                                    <?php   
                                            $c = new Conexion();
                                            $cone = $c->conectando();
                                            $p = "select nombre from producto where id_producto='$obj->id_producto'";
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
                            <td>Precio Unidad</td>
                            <td><input readOnly size="45" type="number" name="precio_unidad_producto" value="<?php echo $obj->precio_unidad_producto?>"></td>
                        </tr>
                        <tr>
                            <td>Cantidad Venta</td>
                            <td><input readOnly size="20" type="text" name="cantidad_venta_producto" value="<?php echo $obj->cantidad_venta_producto?>"></td>
                        </tr>
                        <tr>
                            <td>Monto Total</td>
                            <td><input readOnly size="20" type="number" name="monto_total_producto" value="<?php echo $obj->monto_total_producto?>"></td>
                        </tr>
                            <td colspan="2">
                                <center>
                                    <button type="submit" name="elimina">Eliminar</button>
                                    <a href="consultarDetalle.php">
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