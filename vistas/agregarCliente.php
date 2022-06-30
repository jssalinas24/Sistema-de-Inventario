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
         	
        <title>Agregar Cliente</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="cliente" method="POST">
                <table border="1">
                        <tr>
                            <td colspan="2"><center>Agregar Cliente</center></td>
                        </tr>
                        <tr>
                            <td>Código Cliente</td>
                            <td><input size="30" type="number" name="id_cliente" id="id_cliente" placeholder="Código automático"></td>
                        </tr>
                        <tr>
                            <td>Tipo Documento</td>
                            <td>
                            <select name="id_tipo_documento" id="$obj->id_tipo_documento">
                                    <option>[Seleccione el tipo de documento]</option>
                                    <option>
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
                                    </option>    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Numero Documento</td>
                            <td><input size="30" type="text" name="numero_documento" id="numero_documento" placeholder="Ingrese número de documento" required></td>
                        </tr>
                        <tr>
                            <td>Nombre</td>
                            <td><input size="30" type="text" name="nombre" id="nombre" placeholder="Ingrese nombre" required></td>
                        </tr>
                        <tr>
                            <td>Dirección</td>
                            <td><input size="30" type="text" name="direccion" id="direccion" placeholder="Ingrese dirección" required></td>
                        </tr>
                        <tr>
                            <td>Teléfono</td>
                            <td><input size="30" type="number" name="telefono" id="telefono" placeholder="Ingrese teléfono" required></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center>
                                    <button type="submit" name="guarda">Guardar</button>
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