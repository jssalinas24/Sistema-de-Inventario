<?php
 include("../controlador/clasificacionControlador.php");

$obj = new clasificacion();
if($_POST){
    $obj->id_clasificacion = $_POST['id_clasificacion'];
    $obj->clasificacion = $_POST['clasificacion'];
  
    
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