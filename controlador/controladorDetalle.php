<?php
class detalle{
                public $id_detalle;
                public $id_factura;
                public $id_producto;
                public $precio_unidad_producto;
                public $cantidad_venta_producto;
                public $monto_total_producto;

                function agregar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from detalle where id_detalle = '$this->id_detalle'";
                                    $resultado = mysqli_query($cone,$sql);
                                    if(mysqli_fetch_row($resultado)){

                                        echo"<script> alert('El detalle ya existe en el sistema');</script>";

                                    }else{
                                        $insertar ="insert into detalle values('$this->id_detalle','$this->id_factura','$this->id_producto','$this->precio_unidad_producto','$this->cantidad_venta_producto','$this->monto_total_producto')";
                                        mysqli_query($cone,$insertar);
                                        echo"<script> alert('El detalle fue creado en el sistema');</script>";

                                    }

                }
                function modificar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from detalle where id_detalle = '$this->id_detalle'";
                                    $resultado = mysqli_query($cone,$sql);
                                    if(!mysqli_fetch_row($resultado)){

                                        echo"<script> alert('El detalle ya existe en el sistema');</script>";
                                    
                                    }else{
                                        $update = "update detalle set id_detalle = '$this->id_detalle',
                                                                        id_factura = '$this->id_factura',
                                                                        id_producto = '$this->id_producto',
                                                                        precio_unidad_producto = '$this->precio_unidad_producto',
                                                                        cantidad_venta_producto = '$this->cantidad_venta_producto',
                                                                        monto_total_producto = '$this->monto_total_producto'
                                                                        where id_detalle = '$this->id_detalle';
                                                                        ";
                                        mysqli_query($cone,$update);
                                        echo"<script> alert('El detalle fue modificado en el sistema');</script>";
                                    }

                }
                function eliminar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $delete = "delete from detalle where id_detalle ='$this->id_detalle'; ";
                                    if(mysqli_query($cone,$delete)){
                                            echo"<script> alert('El detalle fue eliminado del sistema');</script>";
                                    }else{
                                        echo"<script> alert('El detalle no se puede eliminar porque tiene registros relacionados en el sistema');</script>";
                                    }       

                }

}
?>