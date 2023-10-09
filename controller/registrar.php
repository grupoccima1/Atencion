<?php
  include "../config/Auth.php";

  $usuario = $_POST['usuario'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $password = password_hash($_POST['password'],PASSWORD_DEFAULT);


  $Auth = new Auth(); 

  if ($Auth->registrar($usuario, $apellido, $correo, $password)) {
    header("location:../index.php");
  }
  else{
    header("location:../index.php");
  }
?>