<?php
 include('../controlador/controladorUsuario.php');
?>

<?php
$obj = new usuario();
if($_POST){
        $obj->id_usuario = $_POST['id_usuario'];
        $obj->id_nivel = $_POST['id_nivel'];
        $obj->nombre_usuario = $_POST['nombre_usuario'];
        $obj->clave = $_POST['clave'];


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