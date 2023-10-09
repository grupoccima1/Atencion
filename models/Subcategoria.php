<?php
    class Subcategoria extends Conectar{
         
        public function get_subcategoria(){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_subcategoria WHERE est=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchALL();
        }
     
    }
?>