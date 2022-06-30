<?php
 include('../conexion/conectar.php');
 include("../modelo/FacturaModelo.php");
?>
<?php
$obj = new factura();
if($_POST){
    $obj->id_factura = $_POST['id_factura'];
    $obj->id_cliente = $_POST['id_cliente'];
    $obj->descuento = $_POST['descuento'];
    $obj->fecha = $_POST['fecha'];
}
?>
<?php
$llave = $_GET['key'];
$c = new Conexion();
$cone = $c->conectando();
$sql = "select * from factura where id_factura = '$llave'";
$resultado = mysqli_query($cone,$sql);
if ($arreglo = mysqli_fetch_row($resultado)){
    $obj->id_factura = $arreglo[0];
    $obj->id_cliente = $arreglo[1];
    $obj->descuento = $arreglo[2];
    $obj->fecha = $arreglo[3];
}else{
    $obj->id_factura = null;
    $obj->id_cliente = null;
    $obj->descuento = null;
    $obj->fecha = null;
}
?>

<!Doctype html> 
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="idth=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
         	
        <title>Eliminar Factura</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="factura" method="POST">
                <table border="1">
                        <tr>
                            <td colspan="2"><center>Eliminar Factura</center></td>
                        </tr>
                        <tr>
                            <td>Código Factura</td>
                            <td><input readOnly size="25" type="number" name="id_factura" id="id_factura" value="<?php echo $obj->id_factura?>"></td>
                        </tr>
                        <tr>
                            <td>Cliente</td>
                            <td><input readOnly size="20" type="hidden" name="id_cliente" id="id_cliente" value="<?php echo $obj->id_cliente?>">
                                    <?php   
                                            $c = new Conexion();
                                            $cone = $c->conectando();
                                            $p = "select nombre from cliente where id_cliente='$obj->id_cliente'";
                                            $res = mysqli_query($cone,$p);
                                            if ($arreglo = mysqli_fetch_row($res)){
                                                echo $arreglo[0];
                                            }else{
                                                $arreglo[0]=null;
                                            }
                                    ?>
                        <tr>
                            <td>Descuento</td>
                            <td><input readOnly size="25" type="text" name="descuento" id="descuento" value="<?php echo $obj->descuento?>"></td>
                        </tr>
                        <tr>
                            <td>Fecha</td>
                        <td><input readOnly size="25" type="date" name="fecha" id="fecha" value="<?php echo $obj->fecha?>"></td>
                     </tr>
                        <tr>
                            <td colspan="2">
                                <center>
                                    <button type="submit" name="elimina">Eliminar</button>
                                    <a href="consultarFactura.php">
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