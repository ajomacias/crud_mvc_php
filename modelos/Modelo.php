<?php

class Modelo{
    private $Modelo;
    private $db;
    private $datos;
    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=tphpcurso',"root","");
    }

        public function insertar ($tabla, $data){
            $consulta = "insert into ".$tabla." values(null,".$data.");";
            $resultado = $this->db->query($consulta);
            if($resultado){
                return true;
            }
                        
            else{
                return false;
            }
        }
        
        public function mostrar($tabla, $condicion ){
            $consulta = "select * from ".$tabla." where ".$condicion.";";
            $resu = $this->db->query($consulta);
            $personas = array();
            while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)){
                $this->datos[]=$filas;

            }
            return $this->datos;

        }

        public function editar($tabla, $data, $condicion){
            $consulta = "update ".$tabla." set ".$data." where ".$condicion.";";
            $resultado = $this->db->query($consulta);
            if($resultado){
                return true;
            }
            else{
                return false;
            }

        }
        public function eliminar($tabla, $condicion){
            $consulta = "delete from ".$tabla." where ".$condicion.";";
            $this->db->query($consulta);

        }
    
}  

?>