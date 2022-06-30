<?php
 include('../controlador/controladorProducto.php');
?>

<?php
$obj = new producto();
if($_POST){
        $obj->id_producto = $_POST['id_producto'];
        $obj->id_proveedor = $_POST['id_proveedor'];
        $obj->id_clasificacion = $_POST['id_clasificacion'];
        $obj->id_categoria = $_POST['id_categoria'];
        $obj->nombre = $_POST['nombre'];
        $obj->precio = $_POST['precio'];
        $obj->stock = $_POST['stock'];

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