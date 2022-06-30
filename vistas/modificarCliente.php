<?php
 include('../conexion/conectar.php');
 include("../modelo/modeloCliente.php");
?>
<?php
$obj = new cliente();
if($_POST){
        $obj->id_cliente = $_POST['id_cliente'];
        $obj->id_tipo_documento = $_POST['id_tipo_documento'];
        $obj->numero_documento = $_POST['numero_documento'];
        $obj->nombre = $_POST['nombre'];
        $obj->direccion = $_POST['direccion'];
        $obj->telefono = $_POST['telefono'];
}
?>
<?php
$llave = $_GET['key'];
$c = new Conexion();
$cone = $c->conectando();
$sql = "select * from cliente where id_cliente = '$llave'";
$resultado = mysqli_query($cone,$sql);
$arreglo = mysqli_fetch_row($resultado);
        $obj->id_cliente = $arreglo[0];
        $obj->id_tipo_documento = $arreglo[1];
        $obj->numero_documento = $arreglo[2];
        $obj->nombre = $arreglo[3];
        $obj->direccion = $arreglo[4];
        $obj->telefono = $arreglo[5];
?>
<?php
$c = new Conexion();
$cone = $c->conectando();
$p = "select * from tipo_documento";
$res = mysqli_query($cone,$p);
$arreglo = mysqli_fetch_assoc($res);
?>

<!Doctype html> 
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="idth=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/.css">
         	
        <title>Modificar Cliente</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="Tipo_documento" method="POST">
                <table border="1">
                        <tr>
                            <td colspan="2"><center>Modificar Cliente</center></td>
                        </tr>
                        <tr>
                            <td>Código Ciente</td>
                            <td><input readOnly size="30" type="number" name="id_cliente" id="id_cliente" value="<?php echo $obj->id_cliente?>" placeholder="Código automático"></td>
                        </tr>
                        <tr>
                        <tr>
                            <td>Tipo Documento</td>
                            <td> 
                                <select name="id_tipo_documento" id="$obj->id_tipo_documento">
                                     <?php   
                                            $c = new Conexion();
                                            $cone = $c->conectando();
                                            $p2 = "select id_tipo_documento, descripcion from tipo_documento where id_tipo_documento='$obj->id_tipo_documento'";
                                            $res2 = mysqli_query($cone,$p2);
                                            $arreglo2 = mysqli_fetch_array($res2);
                                            echo $arreglo2[0];
                                            echo $arreglo2[1];
                                    ?>
                                        <?php
                                            do{
                                                $codigo = $arreglo['id_tipo_documento'];
                                                $nombre = $arreglo['descripcion'];
                                                if($codigo == $obj->id_tipo_documento){
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
                            </td>
                        <tr>
                            <td>Número Documento</td>
                            <td><input size="30" type="number" name="numero_documento" id="numero_documento" value="<?php echo $obj->numero_documento?>"placeholder="Ingrese número documento"></td>
                        </tr>
                        <tr>
                            <td>Nombre</td>
                            <td><input size="30" type="text" name="nombre" id="nombre" value="<?php echo $obj->nombre?>" placeholder="Ingrese nombre"></td>
                        </tr>
                        <tr>
                            <td>Dirección</td>
                            <td><input size="30" type="text" name="direccion" id="direccion" value="<?php echo $obj->direccion?>" placeholder="Ingrese dirección"></td>
                        <tr>
                        <tr>
                            <td>Teléfono</td>
                            <td><input size="30" type="text" name="telefono" id="telefono" value="<?php echo $obj->telefono?>"placeholder="Ingrese teléfono"></td>
                        </tr>
                </select>   
            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center>
                                    <button type="submit" name="modifica"> Modificar</button>
                                    <a href="consultarCliente.php">
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