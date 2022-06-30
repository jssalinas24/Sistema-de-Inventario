<?php
 include('../conexion/conectar.php');
 include("../modelo/clasificacionModelo.php");
?>
<?php
$obj = new clasificacion();
if($_POST){
    $obj->id_clasificacion = $_POST['id_clasificacion'];
    $obj->clasificacion = $_POST['clasificacion'];
}
?>

<?php
$llave = $_GET['key'];
$c = new Conexion();
$cone = $c->conectando();
$sql = "select * from clasificacion where id_clasificacion = '$llave'";
$resultado = mysqli_query($cone,$sql);
if($arreglo = mysqli_fetch_row($resultado)){
    $obj->id_clasificacion= $arreglo[0];
    $obj->clasificacion = $arreglo[1];
}
else{
    $obj->id_clasificacion= null;
    $obj->clasificacion = null;
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
         	
        <title>Eliminar Clasificación</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="clasificación" method="POST">
                <table border="1">
                        <tr>
                            <td colspan="2"><center>Eliminar Clasificación</center></td>
                        </tr>
                        <tr>
                            <td>Código Clasificación</td>
                            <td><input readOnly size="40" type="number" name="id_clasificacion" id="id_clasificacion" value="<?php echo $obj->id_clasificacion?>"></td>
                        </tr>
                        <tr>
                            <td>Clasificación</td>
                            <td><input readOnly size="20" type="text" name="clasificacion" id="clasificacion" value="<?php echo $obj->clasificacion?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center>
                                    <button type="submit" name="elimina">Eliminar</button>
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