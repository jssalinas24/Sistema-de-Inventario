<?php
class cliente{
                public $id_cliente;
                public $id_tipo_documento;
                public $numero_documento;
                public $nombre;
                public $direccion;
                public $telefono;

                function agregar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from cliente where id_cliente = '$this->id_cliente'";
                                    $resultado = mysqli_query($cone,$sql);
                                    if(mysqli_fetch_row($resultado)){

                                        echo"<script> alert('El cliente ya existe en el sistema');</script>";

                                    }else{
                                        $insertar ="insert into cliente values('$this->id_cliente','$this->id_tipo_documento','$this->numero_documento','$this->nombre','$this->direccion','$this->telefono')";
                                        mysqli_query($cone,$insertar);
                                        echo"<script> alert('El cliente fue creado en el sistema');</script>";

                                    }

                }
                function modificar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from cliente where id_cliente = '$this->id_cliente'";
                                    $resultado = mysqli_query($cone,$sql);
                                    if(!mysqli_fetch_row($resultado)){

                                        echo"<script> alert('El cliente ya existe en el sistema');</script>";
                                    
                                    }else{
                                        $update = "update cliente set id_cliente = '$this->id_cliente',
                                                                      id_tipo_documento = '$this->id_tipo_documento',
                                                                      numero_documento = '$this->numero_documento',   
                                                                      nombre = '$this->nombre',  
                                                                      direccion = '$this->direccion', 
                                                                      telefono = '$this->telefono'  
                                                                      where id_cliente = '$this->id_cliente';
                                                                        ";
                                        //echo $update;
                                        mysqli_query($cone,$update);
                                        echo"<script> alert('El cliente fue modificado en el sistema');</script>";
                                    }

                }
                function eliminar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $delete = "delete from cliente where id_cliente ='$this->id_cliente'; ";
                                    if(mysqli_query($cone,$delete)){
                                            echo"<script> alert('El cliente fue eliminado del sistema');</script>";
                                    }else{
                                        echo"<script> alert('El cliente no se puede eliminar porque tiene registros relacionados en el sistema');</script>";
                                    }       

                }

}
?>