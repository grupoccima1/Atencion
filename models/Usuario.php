<?php
require_once("./config/conexion.php");
    class Usuario extends Conectar{

        public function login(){
            $conectar = parent::conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["usu_correo"];
                $pass = $_POST["usu_pass"];
        
                // Consulta para verificar si es un usuario administrador
                $sql = "SELECT * FROM tm_usuario WHERE usu_correo=? AND usu_pass =? AND rol_id = 2 AND est = 1";
                $stmt = $conectar->prepare($sql);
                $stmt->bindValue(1, $correo);
                $stmt->bindValue(2, $pass);
                $stmt->execute();
                $resultado_admin = $stmt->fetch();
        
                // Consulta para verificar si es un cliente
                $sql = "SELECT * FROM clientes WHERE correo=? AND password =?";
                $stmt = $conectar->prepare($sql);
                $stmt->bindValue(1, $correo);
                $stmt->bindValue(2, $pass);
                $stmt->execute();
                $resultado_cliente = $stmt->fetch();
        
                if (is_array($resultado_admin) && count($resultado_admin) > 0) {
                    // Es un administrador
                    $_SESSION["usu_id"] = $resultado_admin["usu_id"];
                    $_SESSION["usu_nom"] = $resultado_admin["usu_nom"];
                    $_SESSION["usu_ape"] = $resultado_admin["usu_ape"];
                    $_SESSION["rol_id"] = $resultado_admin["rol_id"];
                    header("Location:".Conectar::ruta()."view/Home");
                    exit();
                } elseif (is_array($resultado_cliente) && count($resultado_cliente) > 0) {
                    // Es un cliente
                    $_SESSION["usu_id"] = $resultado_cliente["id_cliente"];
                    $_SESSION["usu_nom"] = $resultado_cliente["username"];
                    $_SESSION["usu_ape"] = $resultado_cliente["apellido"];
                    $_SESSION["rol_id"] = 1; // Rol de cliente
                    header("Location:".Conectar::ruta()."view/Home");
                    exit();
                } else {
                    header("Location:".Conectar::ruta()."index.php?m=1");
                    exit();
                }
            }
        }
        

        public function verificarCorreoExistente($correo) {
            $conectar = parent::conexion();
            parent::set_names();
    
            $sql = "SELECT usu_id FROM tm_usuario WHERE usu_correo = ? AND est = 1";
            $stmt = $conectar->prepare($sql);
            $stmt->bindValue(1, $correo);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // Si encuentra un resultado, significa que el correo existe
            return $resultado !== false;
        }

        public function obtenerCorreo($usu_id) {
            $conectar = $this->conexion();
            parent::set_names();
    
            $sql = "SELECT usu_correo FROM tm_usuario WHERE usu_id = ?";
            $stmt = $conectar->prepare($sql);
            $stmt->bindValue(1, $usu_id);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($resultado) {
                return $resultado['usu_correo'];
            } else {
                return false;
            }
        }
        public function obtenerIdPorCorreo($correo) {
            $conectar = $this->conexion();
            parent::set_names();
        
            $sql = "SELECT usu_id FROM tm_usuario WHERE usu_correo = ?";
            $stmt = $conectar->prepare($sql);
            $stmt->bindValue(1, $correo);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        
            if ($resultado) {
                return $resultado['usu_id'];
            } else {
                return false;
            }
        }
        public function insertarToken($usu_id, $token) {
            $conectar = parent::conexion();
            parent::set_names();
    
            $sql = "INSERT INTO password_reset_tokens (user_id, token) VALUES (?, ?)";
            $stmt = $conectar->prepare($sql);
            $stmt->bindValue(1, $usu_id);
            $stmt->bindValue(2, $token);
            
            return $stmt->execute();
        }



        
    }
?>