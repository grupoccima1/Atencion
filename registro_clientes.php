<?php
include ('config/config.php');
$conexion = mysqli_connect($servidor, $usuario, $password, $basedatos);

if (!$conexion) {
  die("Error de conexión: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = mysqli_real_escape_string($conexion, $_POST["username"]);
  $password = mysqli_real_escape_string($conexion, $_POST["password"]);
  $apellido = mysqli_real_escape_string($conexion, $_POST["apellido"]);
  $correo = mysqli_real_escape_string($conexion, $_POST["correo"]);
  $telefono = mysqli_real_escape_string($conexion, $_POST["telefono"]);
  $desarrollo = mysqli_real_escape_string($conexion, $_POST["desarrollo"]);

  $password_cifrado = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO clientes (username, password, apellido, correo, telefono, desarrollo, rol_id) VALUES ('$username', '$password_cifrado','$apellido','$correo', '$telefono', '$desarrollo', 1)";

  if (mysqli_query($conexion, $sql)) {

    header("Location: login.html");
  } else {
    echo "Error al registrar: " . mysqli_error($conexion);
  }
}

mysqli_close($conexion);
?>