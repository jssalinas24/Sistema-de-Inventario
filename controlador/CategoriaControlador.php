<?php
class categoria{
                public $id_categoria;
                public $categoria;


                function agregar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from categoria where id_categoria = '$this->id_categoria';";
                                    $resultado = mysqli_query($cone,$sql);
                                    if(mysqli_fetch_row($resultado)){

                                        echo"<script> alert('La categoría ya existe en el sistema');</script>";

                                    }else{
                                        $insertar ="insert into categoria values('$this->id_categoria','$this->categoria')";
                                        mysqli_query($cone,$insertar);
                                        echo"<script> alert('La categoría fue creada en el sistema');</script>";

                                    }

                }
                function modificar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from categoria where id_categoria ='$this->id_categoria';";
                                    $resultado = mysqli_query($cone,$sql);
                                    if(!mysqli_fetch_row($resultado)){

                                        echo"<script> alert('La categoráa ya existe en el sistema');</script>";
                                    
                                    }else{
                                        $update = "update categoria set id_categoria = '$this->id_categoria',
                                                                        categoria = '$this->categoria'
                                                                        where id_categoria = '$this->id_categoria';
                                                                        ";
                                        //echo $update;
                                        mysqli_query($cone,$update);
                                        echo"<script> alert('La categoría fue modificada en el sistema');</script>";
                                    }

                }
                function eliminar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $delete = "delete from categoria where categoria ='$this->categoria';";
                                    if(mysqli_query($cone,$delete)){
                                            echo"<script> alert('La categoría fue eliminada del sistema');</script>";
                                    }else{
                                        echo"<script> alert('La categoría no se puede eliminar porque tiene registros relacionados en el sistema');</script>";
                                    }       

                }

}
?>