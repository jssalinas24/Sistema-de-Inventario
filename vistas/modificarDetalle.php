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
$arreglo = mysqli_fetch_row($resultado);
    $obj->id_detalle = $arreglo[0];
    $obj->id_factura = $arreglo[1];
    $obj->id_producto = $arreglo[2];
    $obj->precio_unidad_producto = $arreglo[3];
    $obj->cantidad_venta_producto = $arreglo[4];
    $obj->monto_total_producto = $arreglo[5];

$c = new Conexion();
$cone = $c->conectando();
$p = "select * from producto";
$res = mysqli_query($cone,$p);
$arreglo = mysqli_fetch_assoc($res);
    
$p2 = "select * from factura";
$res2 = mysqli_query($cone,$p2);
$arreglo2 = mysqli_fetch_assoc($res2);
?>

<!DOCTYPE html> 
<html lang="es">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="idth=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../vistas/css/bootstrap.min.css">
        <link rel="stylesheet" href="../vistas/css1/font-awesome.min.css">
         	
        <title>Modificar Detalle</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="detalle" method="POST">
                <table border="1">
                        <tr>
                            <td colspan="2"><center>Modificar Detalle</center></td>
                        </tr>
                        <tr>
                            <td>Código Detalle</td>
                            <td><input readOnly size="45" type="number" name="id_detalle" id="id_detalle" value="<?php echo $obj->id_detalle?>" placeholder="Código automático"></td>
                        </tr>
                        <tr>
                            <td>Factura</td>
                            <td>
                            <select name="id_factura" id="$obj->id_factura">
                                
                                        <?php
                                            do{
                                                $codigo2 = $arreglo2['id_factura'];
                                                $nombre2 = $arreglo2['id_factura'];
                                                if($codigo2 == $obj->id_factura){
                                                    echo "<option value=$codigo2=>$nombre2";
                                                }else{
                                                    echo "<option value=$codigo2>$nombre2";
                                                }
                                            }while($arreglo2 = mysqli_fetch_assoc($res2));
									        $row2 = mysqli_num_rows($res2);
									        $rows2=0;
									        if($rows2>0)
									                {
										            mysqli_data_seek($arreglo2, 0);
										            $arreglo2 = mysqli_fetch_assoc($res2);
									                }
                                        ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Producto</td>
                            <td>
                            <select name="id_producto" id="$obj->id_producto">

                                        <?php
                                            do{
                                                $codigo = $arreglo['id_producto'];
                                                $nombre = $arreglo['nombre'];
                                                if($codigo == $obj->id_producto){
                                                    echo "<option value=$codigo=>$nombre";
                                                }else{
                                                    echo "<option value=$codigo>$nombre";
                                                }
                                            }while($arreglo = mysqli_fetch_assoc($res));
									        $row = mysqli_num_rows($res2);
									        $rows=0;
									        if($rows>0)
									                {
										            mysqli_data_seek($arreglo, 0);
										            $arreglo = mysqli_fetch_assoc($res);
									                }
                                        ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Precio Unidad</td>
                            <td><input size="45" type="number" name="precio_unidad_producto" value="<?php echo $obj->precio_unidad_producto?>" placeholder="Ingrese precio"></td>
                        </tr>
                        <tr>
                            <td>Cantidad Venta</td>
                            <td><input size="20" type="text" name="cantidad_venta_producto" value="<?php echo $obj->cantidad_venta_producto?>" placeholder="Ingrese cantidad"></td>
                        </tr>
                        <tr>
                            <td>Monto Total</td>
                            <td><input size="20" type="number" name="monto_total_producto" value="<?php echo $obj->monto_total_producto?>" placeholder="Ingrese total"></td>
                        </tr>
                            <td colspan="2">
                                <center>
                                    <button type="submit" name="modifica">Modificar</button>
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