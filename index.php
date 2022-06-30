<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../proyecto/vistas/css/bootstrap.min.css">
    <link rel="stylesheet" href="../proyecto/vistas/css2/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Sistema de Inventario</title>
  </head>
  <body>
  
  
   <header class="container-fluid bg-black d-flex justify-content-center">
     <p class="text-light mb-0 p-2">Distribuidora de Dulces & Licores La Candelaria</p>
   </header>
   
   <nav class="navbar navbar-expand-lg navbar-light bg-light p-3" id="menu">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#"><span class="text-primary">DD&LLC</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../proyecto/index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portafolio">Productos</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#intro">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#equipo">Nuestro Equipo</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#contenedor-formulario">Contáctenos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cuenta
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../proyecto/login.php">Iniciar sesión</a></li>
<<<<<<< HEAD
=======
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Ayuda</a></li>
>>>>>>> aa6a8d8076579338bed8673c3a875d5d8223f2e6
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../proyecto/img/Dulce1.jpg" class="d-block w-100" alt="dulce">
    </div>
    <div class="carousel-item">
      <img src="../proyecto/img/Licores.jpg" class="d-block w-100" alt="licor">
    </div>
    <div class="carousel-item">
      <img src="../proyecto/img/M&M.jpg" class="d-block w-100" alt="dulce">
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <main>
        </section>
        <section class="gallery" id="portafolio">
        <div class="contenedor">
       <h2 class="subtitulo p-3 text-center">Nuestros Productos</h2>
       <div class="contenedor-galeria">
           <img src="../proyecto/img/Alchohol.jpg" alt="" class="imagen-galeria">
           <img src="../proyecto/img/Wiskey.jpg" alt="" class="imagen-galeria">
           <img src="../proyecto/img/Vino.jpg" alt="" class="imagen-galeria">
           <img src="../proyecto/img/halloween.jpg" alt="" class="imagen-galeria">
           <img src="../proyecto/img/niños.jpg" alt="" class="imagen-galeria">
           <img src="../proyecto/img/saboreo.jpg" alt="" class="imagen-galeria">
         
       </div>
        </div>
        </section>
        <section class="imagen-light">
        <img src="../proyecto/img/cerrarLight.svg" alt="" class="cerrar">
        <img src="../proyecto/img/Corazones De Caramelo.jpg" alt="" class="agregar-imagen">
        </section>
        
    </main>
   
    <section class="w-50 mx-auto text-center pt-5" id="intro">
      <h1 class="p-3 fs-2 boder border-top-3"> Un sistema completo con todo lo que puedas imaginar
        <span class="text-primary">Sistema de Inventario</span>
      </h1>
      <p class="p-3 fs-4"> es la Distribuidora de Dulces & Licores La Candelaria donde se comercializa todo tipo de dulces y licores 
        <span class="text-primary">DD&LLC</span>
        para cada necesidad del cliente desde los más sencillos hasta los más sofisticados
      </p>
    </section>

<section>
    <div class="container w-50 m-auto text-center" id="equipo">
        <h1 class="mb-5 fs-2">Un sistema <span class="text-primary">con alto estándar</span>.</h1>
        <p class="fs-4 ">Para darte la mejor experiencia navegando y conociendo todo acerca de los productos que conecializamos para tu bienestar y el compartir con los que más quieres.</p>
    </div>

    <div class="mt-5 text-center">
        <img id="img-equipo" src="../proyecto/img/equipo.jpg" alt="equipo">
    </div>

    <div id="local" class="border-top border-2">
        <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3976.9846999727615!2d-74.11222302037737!3d4.5967633433268515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1635106949420!5m2!1ses!2sco" width="803" height="541" style="border:0;" allowfullscreen="" loading="lazy"></iframe> </div>
        <div>
            <div class="wrapper-local ">
                <h2 class="text-dark">Ubicado en Bogotá</h2>
                <h2 class="text-primary mb-4 " id="typewriter"></h2>
                <p class="fs-5 text-dark">Bogotá es la extensa capital en altura de Colombia. La Candelaria, su centro con adoquines, cuenta con sitios coloniales como el Teatro Colón neoclásico y la Iglesia de San Francisco del siglo XVII. También alberga museos populares, incluido el Museo Botero, que exhibe arte de Fernando Botero, y el Museo del Oro, con piezas de oro precolombinas.</p>
                <section class="d-flex  justify-content-start text-light" id="numeros-local">
                </section>
            </div>
        </div>
    </div>

</section>


<section id="seccion-contacto" class="border-bottom border-dark border-2">
  <div id="bg-contactos">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
  </div>


  <div class="container border-top border-dark " style="max-width: 500px" id="contenedor-formulario">
      <div class="text-center mb-4" id="titulo-formulario">
        <div><img src="../proyecto/img/support.png" alt="" class="img-fluid ps-5"></div>
        <h2>Contáctanos</h2>
        <p class="fs-5">Distribuidoradedulcesylicores@candelaria.com</p>
<<<<<<< HEAD
        <hr class="dropdown-divider">
=======
>>>>>>> aa6a8d8076579338bed8673c3a875d5d8223f2e6
        <p class="fs-5">Estamos aquí para aporyarte en lo que necesites</p>
      </div>

  </div>
</section>

<footer class="w-100 d-flex align-items-center justify-content-center flex-wrap">
  <p class="fs-5 px-3  pt-3">&copy; Todos Los Derechos Reservados 2022.</p>
  <div id="iconos" >
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-twitter"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>  
  </div>
</footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="../proyecto/js/main.js"></script>
  </body>
</html>

    <script src="../proyecto/js/menu.js"></script>
    <script src="../proyecto/js/lightbox.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
  </body>
</html>