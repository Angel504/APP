<?php
require('../librerias/fpdf.php');

include_once '../configuraciones/db.php';
$conexionDB=BD::crearInstancia();

function agregarTexto($pdf,$texto,$x,$y,$align='L',$fuente,$size=10,$r=0,$g=0,$b=0){
    $pdf->SetFont($fuente,"", $size);
    $pdf->SetXY($x,$y);
    $pdf->SetTextColor($r,$g,$b);
    $pdf->Cell(0,10,$texto,0,0,$align);
}

function agregaImagen($pdf,$imagen,$x,$y){
    $pdf->Image($imagen,$x,$y,0);
}

    


$idcurso=isset($_GET['idcurso'])?$_GET['idcurso']:'';
$idalumno=isset($_GET['idalumno'])?$_GET['idalumno']:'';

$sql="SELECT alumnos.nombre, alumnos.apellidos, cursos.nombre_curso
FROM alumnos, cursos WHERE alumnos.id=:idalumno AND cursos.id=:idcurso";
$consulta=$conexionDB->prepare($sql);
$consulta->bindParam(':idalumno',$idalumno);
$consulta->bindParam(':idcurso',$idcurso);
$consulta->execute();
$alumno=$consulta->fetch(PDO::FETCH_ASSOC);

$pdf=new FPDF("L","mm",array(500,375));
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
agregaImagen($pdf,"../src/HTCcertificado.png",0,0);
agregarTexto($pdf,ucwords(utf8_decode($alumno['nombre']." ".$alumno['apellidos'])),140,175,'L',"Helvetica",50,0,84,115);
agregarTexto($pdf,$alumno['nombre_curso'],140,230,'L',"Helvetica",45,0,84,115);
agregarTexto($pdf,date("d/m/Y"),65,266,'L',"Helvetica",30,0,84,115);
$pdf->Output();

?>