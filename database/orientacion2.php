<?php 

include("con_db.php");

if(isset($_POST['agendarest'])){
    session_start();

    $id_est = $_SESSION['estudiante']['identificacion'];
    $id_ps = "1000000002";
    $fechaor = $_POST['orfecha'];
    $horaor = $_POST['orhora'];
    
    $consulta = "INSERT INTO orientacion(id_psicologo, id_estudiante, codigo, fecha, hora, estado, diagnostico) VALUES ('$id_ps','$id_est',null,'$fechaor','$horaor','Esperando aprobación',null)";
    $resultado = mysqli_query($conex,$consulta);

    echo "<script> alert('Correcto');window.location= '../html/estudiante/agendar/psicologo2.php' </script>";

}

?>