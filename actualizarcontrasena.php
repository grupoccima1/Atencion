
<?php
require_once("config/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe el token desde el formulario
    $token = $_POST["token"];

    // Recibe los datos del formulario
    $nueva_contrasena = $_POST["usu_contrasena"];
    $confirmar_contrasena = $_POST["confirmar_contrasena"];

    // Verifica si las contraseñas coinciden
    if ($nueva_contrasena === $confirmar_contrasena) {
        try {
            // Conecta a la base de datos
            $conectar = new PDO("mysql:host=localhost;dbname=tickbq", "root", "");
            $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Verifica si el token existe y no ha sido utilizado
            $sql = "SELECT * FROM password_reset_tokens WHERE token = ? AND used = 0";
            $stmt = $conectar->prepare($sql);
            $stmt->bindParam(1, $token, PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->rowCount() == 1) {
                // Token válido, actualiza la contraseña
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $hashed_password = password_hash($nueva_contrasena, PASSWORD_DEFAULT);

                // Actualiza la contraseña en la tabla de usuarios
                $sql = "UPDATE tm_usuario SET usu_pass = ? WHERE usu_id = ?";
                $stmt = $conectar->prepare($sql);
                $stmt->bindParam(1, $hashed_password, PDO::PARAM_STR);
                $stmt->bindParam(2, $row["user_id"], PDO::PARAM_INT);
                $stmt->execute();

                // Marca el token como utilizado
                $sql = "UPDATE password_reset_tokens SET used = 1 WHERE id = ?";
                $stmt = $conectar->prepare($sql);
                $stmt->bindParam(1, $row["id"], PDO::PARAM_INT);
                $stmt->execute();

                // Contraseña actualizada exitosamente
                header("Location: index.php?password_updated=true");
                exit();
            } else {
                // Token inválido o ya utilizado
                header("Location: createnewpassword.php?error=invalid_token");
                exit();
            }
        } catch (PDOException $e) {
            // Manejo de errores de la base de datos
            echo "Error en la base de datos: " . $e->getMessage();
        }
    } else {
        // Las contraseñas no coinciden
        header("Location: createnewpassword.php?error=password_mismatch");
        exit();
    }
} else {
    // El token no está presente en el formulario
    echo "Token no encontrado en el formulario.";
    exit();
}
?>
