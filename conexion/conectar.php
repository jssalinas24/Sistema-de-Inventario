<?php

class conexion{
                private $servidor = "localhost";
                private $usuario = "root";
                private $password = "";
                private $db = "proyecto";

                public function conectando(){
                                            $con = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->db) or die ("Error al conectar con el servidor, por favor comuníquese con el administrador");
                                            
                                            return $con;
                                        }
}
$obj = new conexion();
if($obj->conectando())
?>