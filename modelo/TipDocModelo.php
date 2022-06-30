<?php
include("../controlador/TipDocControlador.php");

$obj = new tipo_documento();
if($_POST){
$obj->id_tipo_documento = $_POST['id_tipo_documento'];
$obj->descripcion= $_POST['descripcion'];
    
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