<div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card mt-4">
                        <div class="card-body">
                            <a href="reset-password.php" class="btn btn-outline-info">
                                Volver a inicio de sesión
                            </a>
                            <h2> CREAR NUEVA CONTRASEÑA </h2>
                            <!-- Agrega el campo oculto para el token -->
                            <form action="./actualizarcontrasena.php" method="post">
                                <div class="form-group">
                                    <label for="usu_contrasena">Nueva Contraseña</label>
                                    <input type="password" class="form-control" id="usu_contrasena" name="usu_contrasena" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirmar_contrasena">Confirmar Contraseña</label>
                                    <input type="password" class="form-control" id="confirmar_contrasena" name="confirmar_contrasena" required>
                                </div>
                                <?php
                                    // Recuperar el token de la URL
                                    $token = isset($_GET["token"]) ? $_GET["token"] : "";
                                ?>
                                <!-- Agrega el campo oculto para el token -->
                                <input type="hidden" name="token" value="<?php echo $token; ?>">

                                <button class="btn btn-primary mt-3" type="submit">
                                    Guardar Contraseña
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





