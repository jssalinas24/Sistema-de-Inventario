<?php
 include('../conexion/conectar.php');
 include('../modelo/TipDocModelo.php');
?>
<?php
$obj = new tipo_documento();
if($_POST){
        $obj->id_tipo_documento = $_POST['id_tipo_documento'];
        $obj->descripcion = $_POST['descripcion'];
       
}
?>
<?php
$llave = $_GET['key'];
$c = new Conexion();
$cone = $c->conectando();
$sql = "select * from tipo_documento where id_tipo_documento = '$llave'";
$resultado = mysqli_query($cone,$sql);
$arreglo = mysqli_fetch_row($resultado);
    $obj->id_tipo_documento = $arreglo[0];
    $obj->descripcion = $arreglo[1];
   
?>


<!DOCTYPE html> 
<html lang="es">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="idth=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/.css">
         	
        <title>Modificar Tipo Documento</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="tipo_documento" method="POST">
                <table border="1">
                        <tr>
                            <td colspan="2"><center>Modificar Tipo Documento</center></td>
                        </tr>
                        <tr>
                            <td>Código TipDocumento</td>
                            <td><input readOnly size="40" type="number" name="id_tipo_documento" id="id_tipo_documento" value="<?php echo $obj->id_tipo_documento?>" placeholder="Código automático"></td>
                        </tr>
                        <tr>
                            <td>Tipo Documento</td>
                            <td><input size="20" type="text" name="descripcion" id="descripcion" value="<?php echo $obj->descripcion?>" placeholder="Ingrese tipo documento"></td>
                       
                        <tr>
                            <td colspan="2">
                                <center>
                                    <button type="submit" name="modifica">Modificar</button>
                                    <a href="consultarTipDoc.php">
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