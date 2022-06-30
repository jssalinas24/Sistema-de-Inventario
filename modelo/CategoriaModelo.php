<?php
include("../controlador/CategoriaControlador.php");
?>

<?php
$obj = new categoria();
if($_POST){
        $obj->id_categoria = $_POST['id_categoria'];
        $obj->categoria = $_POST['categoria'];

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