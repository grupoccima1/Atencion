<?php
include "conexion.php"; 

    class Auth extends Conectar {
        public function registrar ($usuario,$apellido, $correo, $password){
            
            $conectar = parent::conexion();
            parent::set_names();

            $sql =  "INSERT INTO tm_usuario (usu_id, usu_nom, usu_ape, usu_correo, usu_pass, rol_id, fecha_crea, est) 
                                VALUE (NULL, ?, ?, ?, ?, 3, now(), 1)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usuario);
            $sql->bindValue(2, $apellido);
            $sql->bindValue(3, $correo);
            $sql->bindValue(4, $password);
            $sql->execute();
            return $resultado=$sql->fetchALL();
        }
 
    }
?>