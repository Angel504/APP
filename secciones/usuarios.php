<?php 
include_once '../configuraciones/db.php';
$conexionBD=BD::crearInstancia();

$id=isset($_POST['id'])?$_POST['id']:'';
$username=isset($_POST['username'])?$_POST['username']:'';
$password=isset($_POST['password'])?$_POST['password']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';

if($accion!==''){

    switch($accion){
        case 'agregar':
            $sql="INSERT INTO users (id, username,password) VALUES(NULL,:username,:password)";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':username',$username);
            $consulta->bindParam(':password',$password);
            $consulta->execute();

          
        break;

        case 'editar':
            $sql="UPDATE users SET username=:username, password=:password WHERE id=:id";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id',$id);
            $consulta->bindParam(':username',$username);
            $consulta->bindParam(':password',$password);
            $consulta->execute();

        break;

        case 'borrar':
            $sql="DELETE FROM users  WHERE id=:id";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id',$id);
            $consulta->execute();
           

        break;

        case "Seleccionar":
            $sql="SELECT * FROM users WHERE id=:id";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id',$id);
            $consulta->execute();
            $usuario=$consulta->fetch(PDO::FETCH_ASSOC);
            $username=$usuario['username'];
            $password=$usuario['password'];

        break;

    }

}



$consulta=$conexionBD->prepare("SELECT * FROM users");
$consulta->execute();
$listausuarios=$consulta->fetchAll();
?>