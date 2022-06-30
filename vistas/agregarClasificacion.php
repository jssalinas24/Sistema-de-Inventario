<?php
 include('../conexion/conectar.php');
 include('../modelo/clasificacionModelo.php');
?>
<?php
$obj = new clasificacion();
if($_POST){
    $obj->id_clasificacion = $_POST['id_clasificacion'];
    $obj->clasificacion = $_POST['clasificacion'];
}
?>

<!Doctype html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="html, css, bootstrap y php">
    <link rel="stylesheet" href="../vistas/css/bootstrap.min.css">
        <link rel="stylesheet" href="../vistas/css1/font-awesome.min.css">
        <title>Agregar Clasificación</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="clasificación" method="POST">
                <table border="1">
                        <tr>
                            <td colspan="2"><center>Agregar Clasificación</center></td>
                        </tr>
                        <tr>
                            <td>Código Clasificación</td>
                            <td><input size="30" type="number" name="id_clasificacion" id="id_clasificacion" placeholder="Código automático"></td>
                        </tr>
                        <tr>
                            <td>Clasificación</td>
                            <td><input size="30" type="text" name="clasificacion" id="clasificacion" placeholder="Ingrese clasificación" required></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center>
                                    <button type="submit" name="guarda">Guardar</button>
                                    <a href="consultarClasificacion.php">
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