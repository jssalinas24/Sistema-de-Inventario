<?php
 include('../controlador/controladorCliente.php');
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

    if(isset($_POST['guarda'])){
            $obj->agregar();
    }

    if(isset($_POST['modifica'])){
            $obj->modificar();
    }
    
    if(isset($_POST['elimina'])){
            $obj->eliminar();
    }

}
?>