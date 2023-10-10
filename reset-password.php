
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="public/img/content/logo.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/style.css">
  <title>Login - Clientes</title>
</head>

<body class="bg__login">
  <div class="bg-gradient-blue">
    <div class="container h100">
      <div class="row justify-content-center align-items-lg-center">
        <div class="col-8">
          <div class="card p-3 mt-5">
            <div class="row justify-content-start">
              <div class="col-5 mt-4 mb-5 mx-3">
              <a href="../index.php" class="d-inlineblock btn btn-outline-info">
              Volver a inicio de sesión
            </a>
              </div>
            </div>
            <h2 class="fs-4 text-center"> INGRESE SU CORREO ELECTRONICO </h2>
            <form class="mx-3" action="./validar_correo.php" method="post">
              <br>
              <br>
              <label for="usu_correo">CORREO</label>
              <input type="text" class="form-control" id="usu_correo" name="usu_correo">
              <button class="btn btn-primary mt-3">
                Enviar contraseña
              </button>
      
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>