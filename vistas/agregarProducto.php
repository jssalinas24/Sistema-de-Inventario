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
$c = new Conexion();
$cone = $c->conectando();
$p = "select * from categoria";
$res = mysqli_query($cone,$p);
$arreglo = mysqli_fetch_assoc($res);

$p2 = "select * from clasificacion";
$res2 = mysqli_query($cone,$p2);
$arreglo2 = mysqli_fetch_assoc($res2);

$p3 = "select * from proveedor";
$res3 = mysqli_query($cone,$p3);
$arreglo3 = mysqli_fetch_assoc($res3);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="idth=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../vistas/css/bootstrap.min.css">
        <link rel="stylesheet" href="../vistas/css1/font-awesome.min.css">

        <title>Agregar Producto</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="producto" method="POST">
                <table border="1">
                    <tr>
                        <td colspan="2"><center>Agregar Producto</center></td>
                    </tr>
                    <tr>
                        <td>Código Producto</td>
                        <td><input size="50" type="number" name="id_producto" id="id_producto" placeholder="Código automático"></td>
                    </tr>
                    <tr>
                        <td>Proveedor</td>
                        <td>
                            <select name="id_proveedor" id="$obj->id_proveedor">
                                    <option>[Seleccione el proveedor]</option>
                                    <option>
                                        <?php
                                            do{
                                                $codigo3 = $arreglo3['id_proveedor'];
                                                $nombre3 = $arreglo3['nombre'];
                                                if($codigo3 == $obj->id_proveedor){
                                                    echo "<option value=$codigo3=>$nombre3";
                                                }else{
                                                    echo "<option value=$codigo3>$nombre3";
                                                }
                                            }while($arreglo3 = mysqli_fetch_assoc($res3));
									        $row3 = mysqli_num_rows($res3);
									        $rows3=0;
									        if($rows3>0)
									                {
										            mysqli_data_seek($arreglo3 ,0);
										            $arreglo3 = mysqli_fetch_assoc($res3);
									                }
                                        ?>
                                    </option>    
                                </select>
                            </td>
                    </tr>
                    <tr>
                        <td>Clasificación</td>
                        <td>
                            <select name="id_clasificacion" id="$obj->id_clasificacion">
                                    <option>[Seleccione la clasificación]</option>
                                    <option>
                                        <?php
                                            do{
                                                $codigo2 = $arreglo2['id_clasificacion'];
                                                $nombre2 = $arreglo2['clasificacion'];
                                                if($codigo2 == $obj->id_clasificacion){
                                                    echo "<option value=$codigo2=>$nombre2";
                                                }else{
                                                    echo "<option value=$codigo2>$nombre2";
                                                }
                                            }while($arreglo2 = mysqli_fetch_assoc($res2));
									        $row2 = mysqli_num_rows($res2);
									        $rows2=0;
									        if($rows2>0)
									                {
										            mysqli_data_seek($arreglo2 ,0);
										            $arreglo2 = mysqli_fetch_assoc($res2);
									                }
                                        ?>
                                    </option>    
                                </select>
                            </td>
                    </tr>
                    <tr>
                        <td>Categoría</td>
                        <td>
                            <select name="id_categoria" id="$obj->id_categoria">
                                    <option>[Seleccione la categoría]</option>
                                    <option>
                                        <?php
                                            do{
                                                $codigo = $arreglo['id_categoria'];
                                                $nombre = $arreglo['categoria'];
                                                if($codigo == $obj->id_categoria){
                                                    echo "<option value=$codigo=>$nombre";
                                                }else{
                                                    echo "<option value=$codigo>$nombre";
                                                }
                                            }while($arreglo = mysqli_fetch_assoc($res));
									        $row = mysqli_num_rows($res);
									        $rows=0;
									        if($rows>0)
									                {
										            mysqli_data_seek($arreglo ,0);
										            $arreglo = mysqli_fetch_assoc($res);
									                }
                                        ?>
                                    </option>    
                                </select>
                            </td>
                    </tr>
                    <tr>
                        <td>Producto</td>
                        <td><input size="20" type="text" name="nombre" id="nombre" placeholder="Ingrese nombre" required></td>
                    </tr>
                    <tr>
                        <td>Precio</td>
                        <td><input size="50" type="number" name="precio" id="precio" placeholder="Ingrese precio" required></td>
                    </tr>
                    <tr>
                        <td>Cantidad</td>
                        <td><input size="50" type="number" name="stock" id="stock" placeholder="Ingrese cantidad" required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center>
                            <button type="submit" name="guarda">Guardar</button>
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