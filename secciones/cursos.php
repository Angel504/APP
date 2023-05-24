<?php 
include_once '../configuraciones/db.php';
$conexionBD=BD::crearInstancia();

$id=isset($_POST['id'])?$_POST['id']:'';
$nombre_curso=isset($_POST['nombre_curso'])?$_POST['nombre_curso']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';

if($accion!==''){

    switch($accion){
        case 'agregar':
            if (empty($_POST['nombre_curso'])) {
                echo "<script>alert('El campo esta vacio');</script>";
              } else {
            $sql="INSERT INTO cursos (id, nombre_curso) VALUES(NULL,:nombre_curso)";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':nombre_curso',$nombre_curso);
            $consulta->execute();
              }
          
        break;

        case 'editar':
            if (empty($_POST['nombre_curso'])) {
                echo "<script>alert('Por favor,  selecciona un curso');</script>";
              } else {
            $sql="UPDATE cursos SET nombre_curso=:nombre_curso WHERE id=:id";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id',$id);
            $consulta->bindParam(':nombre_curso',$nombre_curso);
            $consulta->execute();
              }
        break;

        case 'borrar':
            if (empty($_POST['nombre_curso'])) {
                echo "<script>alert('Por favor,  selecciona un curso');</script>";
              } else {
            $sql="DELETE FROM cursos  WHERE id=:id";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id',$id);
            $consulta->execute();
              }
        break;

        case "Seleccionar":
            $sql="SELECT * FROM cursos WHERE id=:id";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id',$id);
            $consulta->execute();
            $curso=$consulta->fetch(PDO::FETCH_ASSOC);
            $nombre_curso=$curso['nombre_curso'];

        break;

    }
    

}


$consulta=$conexionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos=$consulta->fetchAll();
?>