<?php

class Ticket extends Conectar{

    public function delete_ticket($tick_id){
        $conectar = parent::conexion();
                    parent::set_names();
        $id = $_GET['id'];
        $eliminar = "DELETE
                    FROM
                    tm_ticket
                    WHERE
                    tm_ticket.tick_id=?";
        $resultadoEliminar = mysqli_query($conectar, $eliminar);

        if ($resultadoEliminar) {
            header("Location:" .$rootPath."view/ConsultarTicket/");
        } else {
            echo "<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
        }
    }
}
?>