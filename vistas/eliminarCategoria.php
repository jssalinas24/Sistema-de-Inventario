<?php
 include('../conexion/conectar.php');
 include("../modelo/CategoriaModelo.php");
?>
<?php
$obj = new categoria();
if($_POST){
        $obj->id_categoria = $_POST['id_categoria'];
        $obj->categoria = $_POST['categoria'];
}
?>
<?php
$llave = $_GET['key'];
$c = new Conexion();
$cone = $c->conectando();
$sql = "select * from categoria where id_categoria = '$llave'";
$resultado = mysqli_query($cone,$sql);
if ($arreglo = mysqli_fetch_row($resultado)){
    $obj->id_categoria = $arreglo[0];
    $obj->categoria = $arreglo[1];
}
else{
    $obj->id_categoria = null;
    $obj->categoria = null;
}
?>

<!Doctype html> 
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="idth=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/.css">
         	
        <title>Eliminar Categoría</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="factura" method="POST">
                <table border="1">
                        <tr>
                            <td colspan="2"><center>Eliminar Categoría</center></td>
                        </tr>
                        <tr>
                            <td>Código Categoría</td>
                            <td><input readOnly size="36" type="number" name="id_categoria" id="id_categoria" value="<?php echo $obj->id_categoria?>"></td>
                        </tr>
                        <tr>
                            <td>Categoría</td>
                            <td><input readOnly size="20" type="text" name="categoria" value="<?php echo $obj->categoria?>"></td>

                            <td colspan="2">
                                <center>
                                    <button type="submit" name="elimina">Eliminar</button>
                                    <a href="consultarCategoria.php">
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