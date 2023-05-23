<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Verificar si los campos del formulario están vacíos
  if (empty($_POST['username']) || empty($_POST['password'])) {
    echo "<script>alert('Por favor, completa todos los campos del formulario.'); window.location.href = 'vista_registro.php';</script>";
  } else {
    // Configurar la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Error al conectar a la base de datos: " . $conn->connect_error);
    }

    // Obtener los datos del formulario de registro
    $username = $_POST['username'];
    $password = $_POST['password'];
    $contrasena_confirm = $_POST['contrasena-confirm'];

    if ($password !== $contrasena_confirm) {
      echo "<script>alert('La contraseña no coincide');window.location.href = 'vista_registro.php';</script>";
  }

    // Verificar si el usuario ya existe en la base de datos
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<script>alert('El nombre de usuario ya está en uso. Por favor, elige otro.');window.location.href = 'vista_registro.php';</script>";
  
    } else {
      // Insertar el nuevo usuario en la base de datos
      $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
      if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Usuario Registrado con exito');window.location.href = '../index.php';</script>";
        
      } else {
        echo "<script>alert('Error al registrar el usuario: " . $conn->error . "'); window.location.href = 'vista_registro.php'; </script>";
      }
    }

    $conn->close();
  }
  
  // Limpiar los valores ingresados en el formulario
  unset($_POST['username']);
  unset($_POST['password']);
}
?>

