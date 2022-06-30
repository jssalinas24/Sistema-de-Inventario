<?php
 include('../controlador/controladorProveedor.php');
?>

<?php
$obj = new proveedor();
if($_POST){
        $obj->id_proveedor = $_POST['id_proveedor'];
        $obj->nombre = $_POST['nombre'];
        $obj->NIT = $_POST['NIT'];
        $obj->ciudad = $_POST['ciudad'];
        $obj->direccion = $_POST['direccion'];

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