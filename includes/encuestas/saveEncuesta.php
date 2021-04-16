<?php include "../conexion.php";
session_start();
$patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
if (isset($_POST['save'])) {
    $titulo = $_POST['Titulo'];
    $Docente = $_POST['Docente'];
    $Materia =  $_POST['Materia']; 
    $status = "Active";  
        $sql = "INSERT INTO `encuesta` (`Titulo`, `Docente`, `Materia`, `Status`)
         VALUES ('$titulo', '$Docente', '$Materia','$status')";
        $consulta = mysqli_query($conexion, $sql);
        if (!$consulta) {
            die("nopS");
        } else {
            echo "<script>
            alert('Registro de Materia Exitoso :)');
            window.location= '../encuestas.php'
            </script>";           
        }
}
