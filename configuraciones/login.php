<?php
session_start();



  if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST['username']) || empty($_POST['password'])) {
      echo "<script>alert('Por favor, completa todos los campos del formulario.');</script>";
    } else {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aplicacion";
  
    $conn = new mysqli($servername, $username, $password, $dbname);
  
    if ($conn->connect_error) {
      die("Error al conectar a la base de datos: " . $conn->connect_error);
    }
  
   
    $username = $_POST['username'];
    $password = $_POST['password'];
  

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
  
    if ($datos=$result->fetch_object()) {
  
      $_SESSION['username'] = $username;
      header("Location: secciones/index.php");
    } else {
     
      echo "Nombre de usuario o contraseña incorrectos.";
    }
  
    $conn->close();
  }
  unset($_POST['username']);
  unset($_POST['password']);
  }



?>
