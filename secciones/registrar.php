<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Configurar la conexión a la base de datos
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "aplicacion";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
  }

  // Obtener los datos del formulario de registro
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Verificar si el usuario ya existe en la base de datos
  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "El nombre de usuario ya está en uso. Por favor, elige otro.";
  } else {
    // Insertar el nuevo usuario en la base de datos
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
      echo "Registro exitoso. Ahora puedes iniciar sesión.";
    } else {
      echo "Error al registrar el usuario: " . $conn->error;
      
    }
  }

  $conn->close();
}
?>
