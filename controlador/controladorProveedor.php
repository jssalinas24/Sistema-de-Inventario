<?php
class proveedor{
                public $id_proveedor ;
                public $nombre;
                public $NIT;
                public $ciudad;
                public $direccion;

                function agregar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from proveedor where nombre = '$this->nombre'";
                                    $resultado = mysqli_query($cone,$sql);
                                    if(mysqli_fetch_row($resultado)){

                                        echo"<script> alert('El proveedor ya existe en el sistema');</script>";

                                    }else{
                                        $insertar ="insert into proveedor values('$this->id_proveedor','$this->nombre','$this->NIT','$this->ciudad','$this->direccion')";
                                        mysqli_query($cone,$insertar);
                                        echo"<script> alert('El proveedor fue creado en el sistema');</script>";

                                    }

                }
                function modificar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from proveedor where id_proveedor = '$this->id_proveedor'";
                                    $resultado = mysqli_query($cone,$sql);
                                    if(!mysqli_fetch_row($resultado)){

                                        echo"<script> alert('El proveedor ya existe en el sistema');</script>";
                                    
                                    }else{
                                        $update = "update proveedor set id_proveedor = '$this->id_proveedor',
                                                                        nombre = '$this->nombre',
                                                                        NIT = '$this->NIT',
                                                                        ciudad = '$this->ciudad',
                                                                        direccion = '$this->direccion'
                                                                        where id_proveedor = '$this->id_proveedor';
                                                                        ";
                                        mysqli_query($cone,$update);
                                        echo"<script> alert('El proveedor fue modificado en el sistema');</script>";
                                    }

                }
                function eliminar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $delete = "delete from proveedor where id_proveedor ='$this->id_proveedor'; ";
                                    if(mysqli_query($cone,$delete)){
                                            echo"<script> alert('El proveedor fue eliminado del sistema');</script>";
                                    }else{
                                        echo"<script> alert('El proveedor no se puede eliminar porque tiene registros relacionados en el sistema');</script>";
                                    }       

                }

}
?>