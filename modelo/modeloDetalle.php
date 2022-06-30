<?php
 include('../controlador/controladorDetalle.php');
?>

<?php
$obj = new detalle();
if($_POST){
        $obj->id_detalle = $_POST['id_detalle'];
        $obj->id_factura = $_POST['id_factura'];
        $obj->id_producto = $_POST['id_producto'];
        $obj->precio_unidad_producto = $_POST['precio_unidad_producto'];
        $obj->cantidad_venta_producto = $_POST['cantidad_venta_producto'];
        $obj->monto_total_producto = $_POST['monto_total_producto'];

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