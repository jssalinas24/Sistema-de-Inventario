<?php
class tipo_documento{
                public $id_tipo_documento;
                public $descripcion;
                

                function agregar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from tipo_documento where descripcion = '$this->descripcion'";
                                    $resultado = mysqli_query($cone,$sql);
                                    if($arreglo = mysqli_fetch_row($resultado)){

                                        echo"<script> alert('El tipo de documento ya existe en el sistema');</script>";

                                    }else{
                                        $insertar ="insert into tipo_documento values('$this->id_tipo_documento','$this->descripcion')";
                                
                                        mysqli_query($cone,$insertar);
                                        echo"<script> alert('El tipo de documento fue creado exitosamente');</script>";

                                    }


                }
                function modificar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from tipo_documento where descripcion = '$this->descripcion'";
                                    $resultado = mysqli_query($cone,$sql);
                                    if(mysqli_fetch_row($resultado)){

                                        echo"<script> alert('El tipo de documento ya existe en el sistema');</script>";

                                    }else{
                                        $update ="update tipo_documento set id_tipo_documento = '$this->id_tipo_documento',
                                                                            descripcion ='$this->descripcion'
                                                                        where id_tipo_documento ='$this->id_tipo_documento';
                                                                         ";
                                        
                                        mysqli_query($cone,$update);
                                        echo"<script> alert('El tipo de documento fue modificado exitosamente');</script>";

                                    }



                }
                function eliminar(){
                            $c = new Conexion();
                            $cone = $c->conectando();
                            $delete = "delete from tipo_documento where id_tipo_documento ='$this->id_tipo_documento'; ";
                            if(mysqli_query($cone,$delete)){
                                    echo"<script> alert('El tipo de documento fue eliminado exitosamente');</script>";
                            }else{
                                echo"<script> alert('El tipo de documento no se puede eliminar porque tiene registros relacionados en el Sistema');</script>";
                            }       
                }

}





?>