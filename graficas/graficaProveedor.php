<?php 
include("../conexion/conectar.php");
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../Vista/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Vista/css1/font-awesome.min.css">
    <link rel="stylesheet" href="../librerias/jquery-3.6.0.min.js">
    
    <title>Proveedor</title>
    <style>
        body{
            font-family: "Century Gothic";
        }
    </style>
  </head>
  <body>
      <div class="col-lg-12" style="padding-top: 20px;">
      <div class="row">
      <div class="col-lg-6">
    <canvas id="resultado" width="1000" height="800"></canvas>
    </div>
    </div>
    </div>

  </body>
</html>
<script src="chart.min.js"></script>
<script>
    new Chart(document.getElementById("resultado"), {
    type: 'pie',
    data: {
      labels: [
          <?php
          $c = new conexion();
          $cone = $c->conectando();
          $sql ="SELECT * FROM proveedor";
          $consulta = mysqli_query($cone,$sql);
          while ($arreglo = mysqli_fetch_array($consulta)) {
          ?>
          '<?php echo $arreglo ['nombre'];?>',
          <?php
          }
          ?>
      ],
      datasets: [{
        label: "Total de proveedores en el sistema",
        backgroundColor: ["#FFA833", "#46FF33","#7133FF","#2D7FBF","#c45850"],
        data: [
            <?php
          $c = new conexion();
          $cone = $c->conectando();
          $sql ="SELECT * FROM proveedor";
          $consulta = mysqli_query($cone,$sql);
          while ($arreglo = mysqli_fetch_array($consulta)) {
          ?>
          '<?php echo $arreglo ['id_proveedor'];?>',
          <?php
          }
          ?> 
        ]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Resultados por cada proveedor'
      }
    }
});
</script>
   