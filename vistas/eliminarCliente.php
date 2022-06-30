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
if ($arreglo = mysqli_fetch_row($resultado)){
    $obj->id_cliente = $arreglo[0];
    $obj->id_tipo_documento = $arreglo[1];
    $obj->numero_documento = $arreglo[2];
    $obj->nombre = $arreglo[3];
    $obj->direccion = $arreglo[4];
    $obj->telefono = $arreglo[5];
}
else{
    $obj->id_cliente = null;
    $obj->id_tipo_documento = null;
    $obj->numero_documento = null;
    $obj->nombre = null;
    $obj->direccion = null;
    $obj->telefono = null;
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
         	
        <title>Eliminar Cliente</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="factura" method="POST">
                <table border="1">
                        <tr>
                            <td colspan="2"><center>Eliminar Cliente</center></td>
                        </tr>
                        <tr>
                            <td>Código Cliente</td>
                            <td><input readOnly size="30" type="number" name="id_cliente" id="id_cliente" value="<?php echo $obj->id_cliente?>"></td>
                        </tr> 
                        <tr>   
                            <td>Tipo Documento</td>
                            <td><input readOnly size="30" type="hidden" name="id_tipo_documento" id="id_tipo_documento" value="<?php echo $obj->id_tipo_documento?>">
                            
                                     <?php   
                                            $c = new Conexion();
                                            $cone = $c->conectando();
                                            $p2 = "select descripcion from tipo_documento where id_tipo_documento='$obj->id_tipo_documento'";
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
                            <td>Número Documento</td>
                            <td><input readOnly size="30" type="number" name="numero_documento" id="numero_documento" value="<?php echo $obj->numero_documento?>"></td>
                        </tr>
                        <tr>                        
                            <td>Nombre</td>
                            <td><input readOnly size="30" type="text" name="nombre" id="nombre" value="<?php echo $obj->nombre?>"></td>
                        </tr>
                        <tr>                        
                            <td>Dirección</td>
                            <td><input readOnly size="30" type="text" name="direccion" id="direccion" value="<?php echo $obj->direccion?>"></td>
                        </tr>
                        <tr>                        
                            <td>Teléfono</td>
                            <td><input readOnly size="30" type="number" name="telefono" id="telefono" value="<?php echo $obj->telefono?>"></td>
                        </tr>
                            <td colspan="2">
                                <center>
                                    <button type="submit" name="elimina" onClick="retorna()">Eliminar</button>
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



