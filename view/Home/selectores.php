<?php 

include('../../config/config.php');
$conexion = mysqli_connect($servidor, $usuario, $password, $basedatos);

// totales de Tickets
$sql = "SELECT COUNT(*) as cantidad FROM tm_ticket WHERE est = 1";
$resultado = $conexion->query($sql);


if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $ticket_total = $fila["cantidad"];
} else {
    $ticket_total = 0;
}


// Tickets Abiertos
$sql = "SELECT COUNT(*) as cantidad FROM tm_ticket WHERE est = 1 and tick_estado = 'Abierto' ";
$resultado = $conexion->query($sql);


if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $ticket_abierto = $fila["cantidad"];
} else {
    $ticket_abierto = 0;
}
// tickts Cerrados
$sql = "SELECT COUNT(*) as cantidad FROM tm_ticket WHERE est = 1 and tick_estado = 'Cerrado' ";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $ticket_cerrado = $fila["cantidad"];
} else {
    $ticket_cerrado = 0;
}

// tickts Cerrados
$sql = "SELECT COUNT(*) as cantidad FROM tm_ticket WHERE est = 1 and cat_id = 3 ";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $categoria_cancelados = $fila["cantidad"];
} else {
    $categoria_cancelados = 0;
}

 

?>