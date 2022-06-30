<?php
class producto{
                public $id_producto;
                public $id_proveedor;
                public $id_clasificacion;
                public $id_categoria;
                public $nombre;
                public $precio;
                public $stock;

                function agregar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from producto where id_producto = '$this->id_producto'";
                                    $resultado = mysqli_query($cone,$sql);
                                    if(mysqli_fetch_row($resultado)){

                                        echo"<script> alert('El producto ya existe en el sistema');</script>";

                                    }else{
                                        $insertar ="insert into producto values('$this->id_producto','$this->id_proveedor','$this->id_clasificacion','$this->id_categoria','$this->nombre','$this->precio','$this->stock')";
                                        mysqli_query($cone,$insertar);
                                        echo"<script> alert('El producto fue creado en el sistema');</script>";

                                    }

                }
                function modificar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from producto where id_producto = '$this->id_producto'";
                                    $resultado = mysqli_query($cone,$sql);
                                    if(!mysqli_fetch_row($resultado)){

                                        echo"<script> alert('El producto ya existe en el sistema');</script>";
                                    
                                    }else{
                                        $update = "update producto set id_producto = '$this->id_producto',
                                                                        id_proveedor = '$this->id_proveedor',
                                                                        id_clasificacion = '$this->id_clasificacion',
                                                                        id_categoria = '$this->id_categoria',
                                                                        nombre = '$this->nombre',
                                                                        precio = '$this->precio',
                                                                        stock = '$this->stock'
                                                                        where id_producto = '$this->id_producto';
                                                                        ";
                                        //echo $update;
                                        mysqli_query($cone,$update);
                                        echo"<script> alert('El producto fue modificado en el sistema');</script>";
                                    }

                }
                function eliminar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $delete = "delete from producto where nombre ='$this->nombre'";
                                    if(mysqli_query($cone,$delete)){
                                            echo"<script> alert('El producto fue eliminado del sistema');</script>";
                                    }else{
                                        echo"<script> alert('El producto no se puede eliminar porque tiene registros relacionados en el sistema');</script>";
                                    }       

                }

}
?>