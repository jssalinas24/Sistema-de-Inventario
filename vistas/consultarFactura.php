<?php
 include('../conexion/conectar.php');
?>

<?php 
session_start();

    $varsesion = $_SESSION['nombre_usuario'];
    $c = new Conexion();
    $cone = $c->conectando();	
    $sql1 = "select nivel.id_nivel from usuario INNER JOIN nivel on usuario.id_nivel = nivel.id_nivel where usuario.nombre_usuario = '$varsesion' ";
    $rs1 = mysqli_query($cone,$sql1);
    $arreglo1 = mysqli_fetch_row($rs1);
    
    if( $arreglo1[0]!=1 and $arreglo1[0]!=2){
        
        echo 'UD NO TIENE AUTORIZACION';
    
    die();
    }
    if($varsesion=="")
    {
        header("location:login.php");
    }
?>

<?php
if($_POST){
            $obj->id_factura = $_POST['id_factura'];
            
}
?>
<?php
$correrPagina = $_SERVER["PHP_SELF"]; /* es una variable súper global que retorna el nombre del archivo que actualmente está ejecutando el script. Así que, $_SERVER[“PHP_SELF”] envía los datos del formulario a la misma página, en vez de saltar a una página distinta*/
$maximoDatos = 5;
$paginaNumero = 0;

if(isset($_GET['paginaNumero'])){
   $paginaNumero = $_GET['paginaNumero'];
}
$inicia = $paginaNumero * $maximoDatos;

?>

<?php
if(isset($_POST['consulta'])){
   
    $c = new Conexion();
    $cone = $c->conectando();
    $sql = "select factura.id_factura,cliente.nombre,factura.descuento,factura.fecha from factura inner join cliente on factura.id_cliente = cliente.id_cliente where id_factura  like '%$obj->id_factura%'";
    $limite =sprintf("%s limit %d, %d",$sql, $inicia, $maximoDatos);
    $resultado = mysqli_query($cone,$limite);
    $arreglo = mysqli_fetch_row($resultado);
}
else{
    $c = new Conexion();
    $cone = $c->conectando();
    $sql = "select factura.id_factura,cliente.nombre,factura.descuento,factura.fecha from factura inner join cliente on factura.id_cliente = cliente.id_cliente";
    $limite =sprintf("%s limit %d, %d",$sql, $inicia, $maximoDatos);
    $resultado = mysqli_query($cone,$limite);
    $arreglo = mysqli_fetch_row($resultado);
}
?>
<?php
if(isset($_GET['totalArreglo'])){
	$totalArreglo = $_GET['totalArreglo'];
	
}
	else{
		$lista = mysqli_query($cone,$sql);
		$totalArreglo = mysqli_num_rows($lista);
	}
$totalPagina = ceil($totalArreglo/$maximoDatos)-1;

?>
<?php
$cargarPagina = "";
if(!empty($_SERVER['QUERY_STRING'])){ /* Consulta una cadena de la base de datos empty(vacio) */
	$parametro1 = explode("&", $_SERVER['QUERY_STRING']); /* Divide la consulta para meterla en un arreglo */
	$nuevoParametro = array();
	foreach($parametro1 as $parametro2){
			if(stristr($parametro2, "paginaNumero")==false && stristr($parametro2, "totalArreglo")==false){ //Compara una cadena dentro de otra cadena
				 array_push($nuevoParametro, $parametro2);
			}
	}
	if(count($nuevoParametro)!=0){
		$cargarPagina = "&". htmlentities(implode("&", $nuevoParametro));
	}
}
$cargarPagina = sprintf("&totalArreglo=%d%s", $totalArreglo, $cargarPagina);
?>

<!Doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="idth=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link rel="stylesheet" href="../vistas/css/bootstrap.min.css">
        <link rel="stylesheet" href="../vistas/css1/font-awesome.min.css">
        	
        <title>Módulo Factura</title>
    </head>
    <body>
        <center>
          <br>   
            <h3 class="font-weight-normal">Factura</h3> 
            <hr style="height:1px;border:none;color:#333;background-color:#333;">
            <form name="factura" action="" method="POST">
            <table >
                 <tr>
                    <td>
                             <a  href="AgregarFactura.php">
                                    <button type="button" class="btn btn-primary btn-sm "><i class="fa fa-file-text-o" aria-hidden="true"></i> Agregar</button>
                              </a>
                    </td>
                </tr>
                <tr>
                        <td>
                            <a href="../reportes/reporteFacturas.php"><button type="button" class="btn btn-dark btn-sm "><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Generar reporte</button></a>
                        <td>
                    </tr>
                 <tr>
		                <th><label for="idcliente">Buscar</label></th>
		                <th><input style="font-size:12px" type="text" id="id_factura" name="id_factura"   placeholder="Digite la factura para Consultar" size="50" >
                            <button type="submit" name="consulta" class="btn btn-warning btn-sm" ><i class="fa fa-search" aria-hidden="true"></i> Consultar</button>
		                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-undo" aria-hidden="true"></i> Refrescar</button>
		                </th>
                        <th><a href="../graficas/graficaFactura.php"><button type="button" class="btn btn-light btn-sm "><i class="fa fa-pie-chart" aria-hidden="true"></i> Ver gráfica</button></a></th>
		                <th><a href="../menu/home.html"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-sign-out" aria-hidden="true"></i> Salir</button></a> </th>
                </tr>

            </table>
        </center>  
            <br>  
            <center>
                <table class="table table-dark table-striped table-hover" style="width:95%">
                        <caption><small>Lista Factura</small></caption>  
                        <thead>
                            <tr class="bg-danger">
                                <th scope="col" style="width:10%"  class="text-light letra">Código Factura</th>
                                <th scope="col" style="width:10%"  class="text-light letra">Cliente</th>
                                <th scope="col" style="width:15%" class="text-light letra">Descuento</th>
                                <th scope="col" style="width:15%" class="text-light letra">Fecha</th>
                                <th scope="col" style="width:5%"  class="text-light letra">Modificar</th>
                                <th scope="col" style="width:5%"  class="text-light letra">Eliminar</th>
                            </tr>
                        </thead>
                        <?php
                            do{
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $arreglo[0] ?></td>
                                <td><?php echo $arreglo[1] ?></td>
                                <td><?php echo $arreglo[2] ?></td>
                                <td><?php echo $arreglo[3] ?></td>
                                <td class="letra">
                                    <a href="<?php if($arreglo[0] <> ""){
                                            echo "ModificarFactura.php?key=".urlencode($arreglo[0]);
                                    }else{
                                        echo"<script> alert('Debe de consultar primero')</sccript>";
                                    }
                                    
                                    ?>">
                                    <button name="modi" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Modificar</button>
                                    </a> 
                                </td>
                                <td class="letra">
                                <a href="<?php if($arreglo[0]<>""){
                                            echo "EliminarFactura.php?key=".urlencode($arreglo[0]);
                                    }else{
                                        echo"<script> alert('Debe de consultar primero')</sccript>";
                                    }
                                

                                ?>">
                                    <button name="elim" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i>Eliminar</button>
                                </a> 
                                </td>
                            </tr>
                        </tbody>
                        <?php
                            }while($arreglo = mysqli_fetch_row($resultado));
                        ?>
                </table> 
                <h6><?php printf("Total de Registros Encontrados %d", $totalArreglo) ?></h6>
                <table border=0>
  	           
                <tr>
                <td> 
                    <?php  
                        if($paginaNumero > 0){
                    ?> 
                     <a href="<?php printf("%s?paginaNumero=%d%s",$correrPagina,0,$cargarPagina) ?>" id="paginador"> < Inicio </a> <?php }?>
                </td>
                <td>
                    <?php  
                    if($paginaNumero > 0){
                ?> 
                    <a href="<?php printf("%s?paginaNumero=%d%s",$correrPagina, max(0,$paginaNumero-1),$cargarPagina) ?>" id="paginador" > << Anterior </a> <?php }?></td>
                <td>
                    <?php 
                    if($paginaNumero < $totalPagina ){
                    ?>
                     <a href="<?php printf("%s?paginaNumero=%d%s",$correrPagina, min($totalPagina,$paginaNumero+1),$cargarPagina) ?>" id="paginador"> Siguiente >>  </a> <?php }?></td>
                <td>
                <?php 
                    if($paginaNumero < $totalPagina ){
                ?> 
                <a href="<?php printf("%s?paginaNumero=%d%s",$correrPagina, $totalPagina,$cargarPagina) ?>" id="paginador"> Ultima ></a> <?php } ?></td>
            
                </tr>
				</table>            


	        </center>
         </form>
    </body> 
</html>