<?php
 include('../conexion/conectar.php');
?>

<?php

                                $c = new Conexion();
                                $cone = $c->conectando();
                                $sql = "select usuario.id_usuario,nivel.nombre_nivel,usuario.id_nivel,usuario.nombre_usuario,usuario.clave_usuario from usuario inner join nivel on usuario.id_nivel = nivel.id_nivel";

                                $resultado = mysqli_query($cone,$sql);
                                $arreglo = mysqli_fetch_row($resultado);

?>

<!Doctype html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="html, css, bootstrap y php">
    <link rel="stylesheet" href="../vistas/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vistas/css1/font-awesome.min.css">
        <title>Módulo Usuarios</title>
    </head>
    <body> 
        
    <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
  <table class="table" style="width: 98%">
                    <caption><small>Lista Usuarios</small></caption>
                    <thead>
                    <tr class="bg-danger">
                    <th scope="col" style="width:10%"  class="text-light letra">Código Usuario</th>
                    <th scope="col" style="width:10%"  class="text-light letra">Rol</th>
                    <th scope="col" style="width:10%"  class="text-light letra">Username</th>
                    <th scope="col" style="width:15%" class="text-light letra">Clave</th>
                    </tr>
                    </thead>

                    <?php 
                    if ($arreglo>0){
                        do{

                        

                    
                    ?>

                    <tbody>

                    <tr>
                    <td><?php echo $arreglo[0] ?></td>
                    <td><?php echo $arreglo[1] ?></td>
                    <td><?php echo $arreglo[3] ?></td>
                    <td><?php echo $arreglo[4] ?></td>
                    </tr>
                    </tbody>
                    
                    <?php  }while($arreglo = mysqli_fetch_array($resultado));
                    }else{
                        echo"No existen registros";
                    } 
                    ?>

</table>

  </div>
</div>


      <button name="imprimir" id="desaparece" onclick="imprima()">Imprimir</button>
</body>
</html>

<script>
    function imprima(){
        var obj = document.getElementById("desaparece");
            obj.style.visibility = 'hidden';
            window.close();
            window.focus();
            window.print();
    }

</script>