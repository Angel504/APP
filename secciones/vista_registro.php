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
                        <p align=center>REGISTRO</p>
                    </div>
                    <div align="center">
                    <img src="../src/usuario.jpg" width="200" height="">
                    </div>
                    <div class="card-body">
                    <form action="registrar.php" method="POST">
                        <div class="mb-3">
                          <label for="username" class="form-label">Nombre de Usuario</label>
                          <input type="text"
                            class="form-control" 
                            name="username" required
                            id="username" 
                            aria-describedby="helpId" placeholder="Usuario">
                          <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <div class="input-group">
                            <input type="password" class="form-control" name="password" required id="password" placeholder="Contraseña">
                            <button type="button" id="toggle-password" class="btn btn-secondary">Mostrar</button>
                            </div>
                            <small id="helpId" class="form-text text-muted"></small>
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

                        <div class="mb-3">
                            <label for="contrasena-confirm" class="form-label">Confirmar contraseña:</label>
                            <div class="input-group">
                            <input type="password" class="form-control" id="contrasena-confirm" name="contrasena-confirm" required aria-describedby="helpId" placeholder="Confirmar contraseña">
                            <button type="button" id="toggle-contrasena-confirm" class="btn btn-secondary">Mostrar</button>
                            </div>
                      </div>

                                  <script>
                                      var toggleContrasenaConfirm = document.getElementById("toggle-contrasena-confirm");
                                      var contrasenaConfirmInput = document.getElementById("contrasena-confirm");

                                      toggleContrasenaConfirm.addEventListener("click", function () {
                                          if (contrasenaConfirmInput.getAttribute("type") === "password") {
                                              contrasenaConfirmInput.setAttribute("type", "text");
                                              toggleContrasenaConfirm.textContent = "Ocultar";
                                          } else {
                                              contrasenaConfirmInput.setAttribute("type", "password");
                                              toggleContrasenaConfirm.textContent = "Mostrar";
                                          }
                                      });
                                  </script>

                    

                        <button name="btregistrar" type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                    </from>
                    <p align=center><a href="../index.php">Regresar</a></p>
                </div>               
            </div>
        </div>
        </div>
</body>
</html>
