<?php 
include ('../conexion/conectar.php');
include ('../modelo/CategoriaModelo.php');
?> 

<?php
$obj = new categoria();
if($_POST){
    $obj->id_categoria = $_POST['id_categoria'];
    $obj->categoria = $_POST['categoria'];
}
?>

<!Doctype html> 
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="idth=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
         	
        <title>Agregar Categoría</title>
    </head>
    <br>
    <br>
    <body>
        <center>
            <form action="" name="categoria" method="POST">
                <table border="1">
                        <tr>
                            <td colspan="2"><center>Agregar Categoría</center></td>
                        </tr>
                        <tr>
                            <td>Código Categoría</td>
                            <td><input size="36" type="number" name="id_categoria" id="id_categoria" placeholder="Código automático"></td>
                        </tr>
                        <tr>
                            <td>Categoría</td>
                            <td><input size="20" type="text" name="categoria" id="categoria" placeholder="Ingrese categoría" required></td>
                        </tr>
        
                        <tr>
                            <td colspan="2">
                                <center>
                                    <button type="submit" name="guarda">Guardar</button>
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