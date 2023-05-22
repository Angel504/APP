<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <h1>Iniciar sesión</h1>
        
        <form action="" method="POST">
          <div class="mb-3">
            <label for="username" class="form-label">Nombre de usuario:</label>
            <input type="text" 
            class="form-control" 
            id="username" 
            name="username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="password" 
            class="form-control" 
            id="password" 
            name="password" required>
          </div>
          <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>


        <p>¿No tienes una cuenta? <a href="secciones/registro.php">Regístrate</a></p>
      </div>
    </div>
  </div>
</body>
</html>
