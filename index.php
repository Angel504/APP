<?php ?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">       
            </div>
            <div class="col-md-4">    
            <br>
                <div class="card">
                    <div class="card-header">
                        Inicio de Sesion
                    </div>
                    <div align="center">
                    <img src="src/login.jpg" width="200" height="">
                    </div>
                    <?php 
                      include("configuraciones/login.php");
                    ?>
                    <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                          <label for="" class="form-label">Usuario</label>
                          <input type="text"
                            class="form-control" 
                            name="username" 
                            id="username" 
                            aria-describedby="helpId" placeholder="Usuario">
                          <small id="helpId" class="form-text text-muted">escriba su usuario</small>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <div class="input-group">
                            <input type="password" class="form-control" name="password" required id="password" placeholder="Contraseña">
                            <button type="button" id="toggle-password" class="btn btn-secondary">Mostrar</button>
                            </div>
                            <small id="helpId" class="form-text text-muted">Ingrese una contraseña</small>
                        </div>
                        <script>
                                      var togglePassword = document.getElementById("toggle-password");
                                      var passwordInput = document.getElementById("password");

                                      togglePassword.addEventListener("click", function () {
                                          if (passwordInput.getAttribute("type") === "password") {
                                              passwordInput.setAttribute("type", "text");
                                              togglePassword.textContent = "Ocultar";
                                          } else {
                                              passwordInput.setAttribute("type", "password");
                                              togglePassword.textContent = "Mostrar";
                                          }
                                      });
                                  </script>

                        <button name="btingresar" type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </div>
                    </from>
                    <p>¿No tienes una cuenta? <a href="secciones/vista_registro.php">Regístrate</a></p>
                </div>               
            </div>
        </div>
        </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>