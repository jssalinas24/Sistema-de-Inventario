<?php
 include('../conexion/conectar.php');
 include('../modelo/modeloProveedor.php');
?>

<?php
 $obj = new proveedor();
if($_POST){
    $obj->id_proveedor = $_POST['id_proveedor'];
    $obj->nombre = $_POST['nombre'];
    $obj->NIT = $_POST['NIT'];
    $obj->ciudad = $_POST['ciudad'];
    $obj->direccion = $_POST['direccion'];
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="idth=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../vistas/css/bootstrap.min.css">
        <link rel="stylesheet" href="../vistas/css1/font-awesome.min.css">

        <title>Agregar Proveedor</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="proveedor" method="POST">
                <table border="1">
                    <tr>
                        <td colspan="2"><center>Agregar Proveedor</center></td>
                    </tr>
                    <tr>
                        <td>Código Proveedor</td>
                        <td><input size="40" type="number" name="id_proveedor" id="id_proveedor" placeholder="Código automático"></td>
                    </tr>
                    <tr>
                        <td>Nombre Proveedor</td>
                        <td><input size="20" type="text" name="nombre" id="nombre" placeholder="Ingrese nombre" required></td>
                    </tr>
                    <tr>
                        <td>NIT</td>
                        <td><input size="20" type="text" name="NIT" id="NIT" placeholder="Ingrese NIT" required></td>
                    </tr>
                    <tr>
                        <td>Ciudad</td>
                        <td><input size="20" type="text" name="ciudad" id="ciudad" placeholder="Ingrese ciudad" required></td>
                    </tr>
                    <tr>
                        <td>Dirección</td>
                        <td><input size="20" type="text" name="direccion" id="direccion" placeholder="Ingrese direccion" required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center>
                            <button type="submit" name="guarda">Guardar</button>
                            <a href="consultarProveedor.php">
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