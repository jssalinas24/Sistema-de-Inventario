<?php
include("../controlador/controladorLogin.php");
?>

<?php
$obj = new ingresar();
if($_POST){
        $obj->nombre_usuario = $_POST['nombre_usuario'];
        $obj->clave_usuario = $_POST['clave_usuario'];

    if(isset($_POST['sesion'])){
            $obj->ingreso();
    }

}
?>