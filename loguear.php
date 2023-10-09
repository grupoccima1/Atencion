<?php
include('./config/config.php');


$conexion = mysqli_connect($servidor, $usuario, $password, $basedatos);


if (!$conexion) {
  die("Error de conexión: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $correo = mysqli_real_escape_string($conexion, $_POST["correo"]);
  $password = mysqli_real_escape_string($conexion, $_POST["password"]);

  $sql = "SELECT id_cliente, username, password, apellido, rol_id FROM clientes WHERE correo='$correo'";

  $resultado = mysqli_query($conexion, $sql);

  if (mysqli_num_rows($resultado) == 1) {
    $fila = mysqli_fetch_assoc($resultado);
    $password_cifrado = $fila["password"];

    if (password_verify($password, $password_cifrado)) {
      session_start();
      $_SESSION["usu_id"]=  $fila["id_cliente"];
      $_SESSION["usu_nom"]= $fila["username"];
      $_SESSION["usu_ape"]= $fila["apellido"];
      $_SESSION["rol_id"]= $fila["rol_id"];
      header("Location: ".$rootPath."view/Home");
      
    } else {
      echo "Contraseña incorrecta";
    }
  } else {
    echo "Usuario no encontrado";
  }
}

mysqli_close($conexion);
?>
