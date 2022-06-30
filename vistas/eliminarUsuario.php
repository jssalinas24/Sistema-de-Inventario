<?php
 include('../conexion/conectar.php');
 include('../modelo/modeloUsuario.php');
?>
<?php
$obj = new usuario();
if($_POST){
    $obj->id_usuario = $_POST['id_usuario'];
    $obj->id_nivel = $_POST['id_nivel'];
    $obj->nombre_usuario = $_POST['nombre_usuario'];
    $obj->Clave = $_POST['Clave'];
}
?>
<?php
$llave = $_GET['key'];
$c = new Conexion();
$cone = $c->conectando();
$sql = "select * from usuario where id_usuario = '$llave'";
$resultado = mysqli_query($cone,$sql);
if($arreglo = mysqli_fetch_row($resultado)){
    $obj->id_usuario = $arreglo[0];
    $obj->id_nivel = $arreglo[1];
    $obj->nombre_usuario = $arreglo[2];
    $obj->clave = $arreglo[3];
}
else{
    $obj->id_producto = null;
    $obj->id_nivel = null;
    $obj->nombre_usuario = null;
    $obj->Clave = null;
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
         	
        <title>Eliminar Usuario</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="usuario" method="POST">
                <table border="1">
                        <tr>
                            <td colspan="2"><center>Eliminar Usuario</center></td>
                        </tr>
                        <tr>
                            <td>Código Usuario</td>
                            <td><input readOnly size="50" type="number" name="id_usuario" id="id_usuario" value="<?php echo $obj->id_usuario?>"></td>
                        </tr>
                        <tr>
                            <td>Rol</td>
                            <td><input readOnly size="20" type="hidden" name="id_nivel" id="id_nivel" value="<?php echo $obj->id_nivel?>">
                                    <?php   
                                            $c = new Conexion();
                                            $cone = $c->conectando();
                                            $p = "select id_nivel from usuario where id_nivel='$obj->id_nivel'";
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
                            <td>Username</td>
                            <td><input readOnly size="20" type="text" name="nombre_usuario" id="nombre_usuario" value="<?php echo $obj->nombre_usuario?>"></td>
                        </tr>
                        <tr>
                            <td>Clave</td>
                            <td><input readOnly size="50" type="number" name="Clave" id="Clave" value="<?php echo $obj->clave_usuario?>"></td>
                        </tr>
                        
                        <tr>
                            <td colspan="2">
                                <center>
                                    <button type="submit" name="elimina">Eliminar</button>
                                    <a href="consultarUsuario.php">
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