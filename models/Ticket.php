<?php
    class Ticket extends Conectar{
        
        public function insert_ticket($usu_id, $cat_id, $subcat_id, $tick_titulo, $tick_descrip){
            
            $fecha_actual = date("Y-m-d");
            if ($cat_id == 1) {
                $resolutor = "Dulce Mendoza";
                $ffinal = date("Y-m-d",strtotime($fecha_actual."+ 3 days"));
            }
            else{
                $resolutor = "Katia Aguilar";
                $ffinal = date("Y-m-d",strtotime($fecha_actual."+ 10 days"));
            }

            $conectar = parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_ticket (usu_id, cat_id,subcat_id, tick_titulo, tick_descrip, tick_estado, fech_crea, resolutor, est, fecha_final) VALUES ($usu_id, $cat_id, $subcat_id, '$tick_titulo', '$tick_descrip','Abierto',now(), '$resolutor', 1, '$ffinal');";
            $sql=$conectar->prepare($sql);
            // $sql->bindValue(1, $usu_id);
            // $sql->bindValue(2, $cat_id);
            // $sql->bindValue(3, $subcat_id);
            // $sql->bindValue(4, $tick_titulo);
            // $sql->bindValue(5, $tick_descrip);
            // $sql->bindValue(6, $resolutor);
            // $sql->bindValue(7, $ffinal);
            // var_dump('SQL:',$sql);

            $sql->execute();
            return $resultado=$sql->fetchALL();

        }

        public function test(){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_ticket (tick_id, usu_id, cat_id,subcat_id, tick_titulo, tick_descrip, tick_estado, fech_crea, resolutor, est) VALUES (NULL, ?, ?, ?, ?, ?,'Abierto',now(), NULL, 1);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->bindValue(2, $cat_id);
            $sql->bindValue(3, $subcat_id);
            $sql->bindValue(4, $tick_titulo);
            $sql->bindValue(5, $tick_descrip);
            $sql->execute();
            return $resultado=$sql->fetchALL();
        }





        public function listar_ticket_x_usu($usu_id){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="SELECT
            tm_ticket.tick_id,
            tm_ticket.usu_id,
            tm_ticket.cat_id,
            tm_ticket.tick_titulo,
            tm_ticket.email,
            tm_ticket.telefono,
            tm_ticket.tick_descrip,
            tm_ticket.mesa,
            tm_ticket.tick_estado,
            tm_ticket.fech_crea,
            tm_ticket.resolutor,
            tm_usuario.usu_nom,
            tm_usuario.usu_ape,
            tm_categoria.cat_nom
            FROM
            tm_ticket
            LEFT join tm_categoria on tm_ticket.cat_id = tm_categoria.cat_id
            LEFT join tm_usuario on tm_ticket.usu_id = tm_usuario.usu_id
            LEFT join clientes on clientes.id_cliente = tm_ticket.usu_id
            WHERE
            tm_ticket.est=1
            AND tm_usuario.usu_id = $usu_id OR  clientes.id_cliente = $usu_id";
            $sql=$conectar->prepare($sql);
            // $sql->bindValue(1, $usu_id);
            // var_dump('$usu_id',$usu_id);
            $sql->execute();
            return $resultado=$sql->fetchALL();
        }

        public function listar_ticket_x_id($tick_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT 
                tm_ticket.tick_id,
                tm_ticket.usu_id,
                tm_ticket.cat_id,
                tm_ticket.tick_titulo,
                tm_ticket.tick_descrip,
                tm_ticket.tick_estado,
                tm_ticket.fech_crea,
                tm_usuario.usu_nom,
                tm_usuario.usu_ape,
                tm_usuario.usu_correo,
                tm_categoria.cat_nom,
                tm_subcategoria.subcat_nom
                FROM 
                tm_ticket
                INNER join tm_categoria on tm_ticket.cat_id = tm_categoria.cat_id
                INNER join tm_subcategoria on tm_ticket.subcat_id = tm_subcategoria.subcat_id
                INNER join tm_usuario on tm_ticket.usu_id = tm_usuario.usu_id
                WHERE
                tm_ticket.est = 1
                AND tm_ticket.tick_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $tick_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function listar_ticket(){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="SELECT
                tm_ticket.tick_id,
                tm_ticket.usu_id,
                tm_ticket.cat_id,
                tm_ticket.tick_titulo,
                tm_ticket.email,
                tm_ticket.telefono,
                tm_ticket.tick_descrip,
                tm_ticket.mesa,
                tm_ticket.tick_estado,
                tm_ticket.fech_crea,
                tm_ticket.resolutor,
                tm_usuario.usu_nom,
                tm_usuario.usu_ape,
                tm_categoria.cat_nom
                FROM
                tm_ticket
                INNER join tm_categoria on tm_ticket.cat_id = tm_categoria.cat_id
                INNER join tm_usuario on tm_ticket.usu_id = tm_usuario.usu_id
                WHERE
                tm_ticket.est=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchALL();
        }

        public function listar_ticketdetalle_x_ticket($tick_id){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="SELECT
                td_ticketdetalle.tickd_id,
                td_ticketdetalle.tickd_descrip,
                td_ticketdetalle.fech_crea,
                tm_usuario.usu_nom,
                tm_usuario.usu_ape,
                tm_usuario.rol_id
                FROM
                td_ticketdetalle
                INNER join tm_usuario on td_ticketdetalle.usu_id = tm_usuario.usu_id
                WHERE
                tick_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $tick_id);
            $sql->execute();
            return $resultado=$sql->fetchALL();
        }

        public function edit_ticket($tick_id, $cat_id, $tick_titulo, $tick_descrip, $tick_estado, $tick_resolutor){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "UPDATE
                    tm_ticket
                    SET
                    tm_ticket.cat_id = ?,
                    tm_ticket.tick_titulo = ?,
                    tm_ticket.tick_descrip = ?,
                    tm_ticket.tick_estado = ?,
                    tm_ticket.resolutor = ?
                    WHERE
                    tm_ticket.tick_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cat_id);
            $sql->bindValue(2, $tick_titulo);
            $sql->bindValue(3, $tick_descrip);
            $sql->bindValue(4, $tick_estado);
            $sql->bindValue(5, $tick_resolutor);
            $sql->bindValue(6, $tick_id);

            $sql->execute();
            return $resultado=$sql->fetchALL();
        }

        public function delete_ticket($tick_id){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "UPDATE
                    tm_ticket
                    SET
                    est = 0
                    WHERE
                    tick_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$tick_id);
            $sql->execute();
            return $resultado=$sql->fetchALL();
        }

        public function insert_ticket_detalle($tick_id, $usu_id, $tickd_descrip){
            $conectar = parent::conexion();
            parent::set_names();

            $sql="INSERT INTO td_ticketdetalle (tickd_id, tick_id, usu_id, tickd_descrip, fech_crea, est) VALUES (NULL, ?, ?, ?, now(), '1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $tick_id);
            $sql->bindValue(2, $usu_id);
            $sql->bindValue(3, $tickd_descrip);
            $sql->execute();
            return $resultado=$sql->fetchALL();
        }
     
    }
?>