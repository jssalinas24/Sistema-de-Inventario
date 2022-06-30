<?php
 include('../controlador/ControladorFactura.php');
?>

<?php
$obj = new factura();
if($_POST){
        $obj->id_factura = $_POST['id_factura'];
        $obj->id_cliente = $_POST['id_cliente'];
        $obj->descuento = $_POST['descuento'];
        $obj->fecha = $_POST['fecha'];

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