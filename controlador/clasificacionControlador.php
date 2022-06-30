<?php
class clasificacion{
                public $id_clasificacion;
                public $clasificacion;
                  
                function agregar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from clasificacion where id_clasificacion = '$this->id_clasificacion'";
                                    $resultado = mysqli_query($cone,$sql);
                                    if($arreglo = mysqli_fetch_row($resultado)){

                                        echo"<script> alert('La clasificación ya existe en el sistema');</script>";

                                    }else{
                                        $insertar ="insert into clasificacion values('$this->id_clasificacion','$this->clasificacion')";
                                        //echo $insertar;
                                        mysqli_query($cone,$insertar);
                                        echo"<script> alert('La clasificación fue creada en el sistema');</script>";

                                    }


                }
                function modificar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from clasificacion where id_clasificacion = '$this->id_clasificacion'";
                                    $resultado = mysqli_query($cone,$sql);
                                    if(!mysqli_fetch_row($resultado)){

                                        echo"<script> alert('La clasificación ya existe en el sistema');</script>";

                                    }else{
                                        $update ="update clasificacion set id_clasificacion ='$this->id_clasificacion',
                                                                        clasificacion = '$this->clasificacion'
                                                                        where id_clasificacion ='$this->id_clasificacion';
                                                                         ";
                                        //echo $update;
                                        mysqli_query($cone,$update);
                                        echo"<script> alert('La clasificación fue modificada en el sistema');</script>";

                                    }



                }
                function eliminar(){
                            $c = new Conexion();
                            $cone = $c->conectando();
                            $delete = "delete from clasificacion where clasificacion ='$this->clasificacion'; ";
                            if(mysqli_query($cone,$delete)){
                                    echo"<script> alert('La clasificación fue eliminada  en el sistema');</script>";
                            }else{
                                echo"<script> alert('La clasificación no se puede eliminar porque tiene registros relacionados en el sistema');</script>";
                            }       
                }

}
?>



