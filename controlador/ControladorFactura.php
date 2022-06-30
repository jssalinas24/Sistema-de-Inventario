<?php
class factura{
                public $id_factura;
                public $id_cliente;
                public $descuento;
                public $fecha;

                function agregar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from factura where id_factura = '$this->id_factura'";
                                    $resultado = mysqli_query($cone,$sql);
                                    if(mysqli_fetch_row($resultado)){

                                        echo"<script> alert('La factura ya existe en el sistema');</script>";

                                    }else{
                                        $insertar ="insert into factura values('$this->id_factura','$this->id_cliente','$this->descuento','$this->fecha')";
                                        mysqli_query($cone,$insertar);
                                        echo"<script> alert('La factura fue creada en el sistema');</script>";

                                    }

                }
                function modificar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $sql = "select * from factura where id_factura = '$this->id_factura'";
                                    $resultado = mysqli_query($cone,$sql);
                                    if(!mysqli_fetch_row($resultado)){

                                        echo"<script> alert('La factura ya existe en el sistema');</script>";
                                    
                                    }else{
                                        $update = "update factura set id_factura = '$this->id_factura',
                                                                        id_cliente = '$this->id_cliente',
                                                                        descuento = '$this->descuento',
                                                                        fecha = '$this->fecha'
                                                                        where id_factura = '$this->id_factura';
                                                                        ";
                                        //echo $update;
                                        mysqli_query($cone,$update);
                                        echo"<script> alert('La factura fue modificada en el sistema');</script>";
                                    }

                }
                function eliminar(){
                                    $c = new Conexion();
                                    $cone = $c->conectando();
                                    $delete = "delete from factura where id_factura ='$this->id_factura'";
                                    if(mysqli_query($cone,$delete)){
                                            echo"<script> alert('La factura fue eliminada del sistema');</script>";
                                    }else{
                                        echo"<script> alert('La factura no se puede eliminar porque tiene registros relacionados en el sistema');</script>";
                                    }       

                }

}
?>