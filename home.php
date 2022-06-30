<?php
include("conexion/conectar.php");
session_start();
?>

<?php 
//session_start();

    $varsesion = $_SESSION['nombre_usuario'];
    

if($varsesion == null ||$varsesion == ''){
    
    header("location:index.php");
       echo 'UD NO TIENE AUTORIZACION ';
     
    die();
}
?>
<?php
                                            $c = new Conexion();
                                            $cone = $c->conectando();	
                                            $sql1 = "select nivel.nombre_nivel from usuario INNER JOIN nivel on usuario.id_nivel = nivel.id_nivel where usuario.nombre_usuario = '$varsesion' ";
                                            $rs1 = mysqli_query($cone,$sql1);
                                            $arreglo1 = mysqli_fetch_row($rs1);
 ?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx60PgommxjnSiaxkE7NLDG-fQLwnltAC9Tw&usqp=CAU">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Inventario</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="css/application.min.css">
    <!-- endinject -->

</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <div class="mdl-layout-spacer"></div>

            <div class="avatar-dropdown" id="icon">
                <span>Administrador</span>
            </div>

            <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
                for="icon">
                <li class="mdl-list__item mdl-list__item--two-line">
                    <span class="mdl-list__item-primary-content">
                        <span > <img src="https://elhorror.com.mx/wp-content/uploads/2020/07/El-contenido-de-Lolis-esta-prohibido-en-Corea-del-Sur.jpg" width="30%" height="90%"></span>
                        <span>Administrador</span>
                    </span>
                </li>
                <a href="../proyecto/index.php">
                    <li class="mdl-menu__item mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                            Cerrar sesión
                        </span>
                    </li>
                </a>
            </ul>
        </div>
    </header>

    <div class="mdl-layout__drawer">
    <header>Sistema de Inventario</header>
        <div class="scroll__wrapper" id="scroll__wrapper">
            <div class="scroller" id="scroller">
                <div class="scroll__container" id="scroll__container">
                    <nav class="mdl-navigation">
                        
                        <a class="mdl-navigation__link mdl-navigation__link--current" href="vistas/consultarCliente.php" target="marco">
                            <i class="material-icons" role="presentation">C</i>
                            Cliente
                        </a>
                        <a class="mdl-navigation__link" href="vistas/consultarFactura.php" target="marco">
                            <i class="material-icons" role="presentation">F</i>
                            Factura
                        </a>
                        <a class="mdl-navigation__link" href="vistas/consultarDetalle.php" target="marco">
                            <i class="material-icons" role="presentation">D</i>
                            Detalle
                        </a>
                        <a class="mdl-navigation__link" href="vistas/consultarProducto.php" target="marco">
                            <i class="material-icons" role="presentation">P</i>
                            Producto
                        </a>
                        <a class="mdl-navigation__link" href="vistas/consultarProveedor.php" target="marco">
                            <i class="material-icons">P</i>
                            Proveedor
                        </a>
                        <a class="mdl-navigation__link" href="vistas/consultarTipDoc.php" target="marco">
                            <i class="material-icons">T</i>
                            Tipo Documento
                        </a>
                        <a class="mdl-navigation__link" href="vistas/consultarCategoria.php" target="marco">
                            <i class="material-icons" role="presentation">C</i>
                            Categoría
                        </a>
                        <a class="mdl-navigation__link" href="vistas/consultarClasificacion.php" target="marco">
                            <i class="material-icons" role="presentation">C</i>
                            Clasificación
                        </a>
                        <a class="mdl-navigation__link" href="vistas/consultarUsuario.php" target="marco">
                            <i class="material-icons" role="presentation">U</i>
                            Usuario
                        </a>
                        
                        <div class="mdl-layout-spacer"></div>
                        <hr>
                        <a class="mdl-navigation__link" href="manuales/Manual Usuario.pdf" target="marco">
                            <i class="material-icons" role="presentation">A</i>
                            Ayuda
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <main class="mdl-layout__content">
        <div>
               <iframe src="../proyecto/menu/home.html" frameborder="1" name="marco" width="100%" height="900"></iframe>
        </div>
    </main>

</div>

<script src="js/d3.min.js"></script>
<script src="js/getmdl-select.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/nv.d3.min.js"></script>
<script src="js/layout/layout.min.js"></script>
<script src="js/scroll/scroll.min.js"></script>
<script src="js/widgets/charts/discreteBarChart.min.js"></script>
<script src="js/widgets/charts/linePlusBarChart.min.js"></script>
<script src="js/widgets/charts/stackedBarChart.min.js"></script>
<script src="js/widgets/employer-form/employer-form.min.js"></script>
<script src="js/widgets/line-chart/line-charts-nvd3.min.js"></script>
<script src="js/widgets/map/maps.min.js"></script>
<script src="js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
<script src="js/widgets/table/table.min.js"></script>
<script src="js/widgets/todo/todo.min.js"></script>

</body>
</html>
