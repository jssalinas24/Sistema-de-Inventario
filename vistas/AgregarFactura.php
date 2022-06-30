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

$c = new Conexion();
$cone = $c->conectando();
$p = "select * from cliente";
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
         	
        <title>Agregar Factura</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="factura" method="POST">
                <table border="1">
                        <tr>
                            <td colspan="2"><center>Agregar Factura</center></td>
                        </tr>
                        <tr>
                            <td>Código Factura</td>
                            <td><input size="25" type="number" name="id_factura" id="id_factura" placeholder="Código automatico"></td>
                        </tr>
                        <tr>
                            <td>Cliente</td>
                            <td>
                            <select name="id_cliente" id="$obj->id_cliente">
                                    <option>[Seleccione el cliente]</option>
                                    <option>
                                        <?php
                                            do{
                                                $codigo = $arreglo['id_cliente'];
                                                $nombre = $arreglo['nombre'];
                                                if($codigo == $obj->id_cliente){
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
                            <td>Descuento</td>
                            <td><input size="25" type="text" name="descuento" id="descuento" placeholder="Ingrese descuento" required></td>
                        </tr>
                        <tr>
                            <td>Fecha</td>
                            <td><input size="25" type="date" name="fecha" id="fecha" placeholder="Ingrese fecha" required></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center>
                                    <button type="submit" name="guarda">Guardar</button>
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