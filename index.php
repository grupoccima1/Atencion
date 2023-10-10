<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/img/content/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Login - Clientes</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-sm bg-light fixed-top">
      <div class="container">
          <div class="">
              <a class="navbar-brand" href="#">
                <img class="logo-navetec" src="public/img/content/logo.png" alt="">
              </a>
              <span class="navbar-text futura_medium fs_22 text-blue-900">Customer Service</span>
          </div>
          <div class="">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link futura_medium text-blue-900 fs_19"  href="registro.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link futura_medium text-blue-900 fs_19"  href="#">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link futura_medium text-blue-900 fs_19"  href="#testimoniales">Testimonios</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link futura_medium text-blue-900 fs_19"  href="#preguntas">Preguntas Frecuentes</a>
                    </li>
                   
                  </ul>
                </div>
          </div>
      </div>
  </nav>

  <header class="">
      <div id="hero" class="bg__login">
          <div class="bg-gradient-blue">
              <div class="container h100">
                <div class="row h-100">
                  <div class="col-3 login__icons">
                      <div class="row h-100">
                          <div class="col-6 d-flex flex-column justify-content-around h-100">
                              <img src="public/img/content/capital-ccima_w.svg" alt="">
                              <img src="public/img/content/construye_w.svg" alt="">
                          </div>
                          <div class="col-6 d-flex flex-column justify-content-center h-100" >
                              <img src="public/img/content/capital-ccima_w.svg" alt="">
                          </div>
                      </div>
                  </div>
                  <div class="col-6 d-flex justify-content-center flex-column">
                    <div class="card mx-5">
                      <div class="card-body">
                        <h3 class="login-heading mt-3 mb-5 text-center">Bienvenido de Regreso</h3>
      
                    <!-- Sign In Form -->
                    <form action="loguear.php" method="POST">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="correo" name ="correo" placeholder="name@example.com">
                        <label for="correo">Correo</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <label for="password">Contraseña</label>
                      </div>
      
                      <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                        <label class="form-check-label" for="rememberPasswordCheck">
                          Remember password
                        </label>
                      </div>
      
                      <div class="d-grid">
                        <button class="btn btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Iniciar Sesión</button>
                        <div class="text-center">
                          <a class="small" href="#">Olvidaste tu Contraseña?</a>
                        </div>
                      </div>
      
                    </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-3 login__icons">
                      <div class="row h-100">
                          <div class="col-6 d-flex flex-column justify-content-center h-100">
                              <img src="public/img/content/capital-ccima_w.svg" alt="">
                          </div>
                          <div class="col-6 d-flex flex-column justify-content-around h-100" >
                              <img src="public/img/content/capital-ccima_w.svg" alt="">
                              <img src="public/img/content/Porttoblanco_w.svg " alt="">
                          </div>
                      </div>
                  </div>
              </div>
              </div>
          </div>
      </div>
  </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>