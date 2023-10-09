<?php
require_once("../../config/conexion.php");
require_once("../../config/config.php");
session_destroy();
header("Location:".$rootPath."index.php");
exit();
?>