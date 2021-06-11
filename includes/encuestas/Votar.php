<?php include "../conexion.php";
session_start();
$idUsuario = $_SESSION['id'];
$id = $_GET['Id_encuesta'];
// $pregunta = $_POST['tiempo'];
if (isset($_POST['Enviar'])) {
    echo $id;
//     // Recorremos todas las preguntas
for($i=1; $i<=24; $i++){
    //Obtenemos el texto de la respuesta
        // $preg = tiempo.$i;
        // $pregunta = $$preg;
    echo "boo";
    //Y lo insertamos
        // $sql = "INSERT INTO `respuestas` (`id`, `id_encuesta`, `id_alumno`, `id_pregunta`, `respuesta`) VALUES (NULL, '$id', '$idUsuario', '', '$pregunta')";
        // // $sql = "INSERT INTO `respuestas` (`id`, `$id`, `$idUsuario`, `id_pregunta`, `respuesta`) VALUES (NULL, '', '', '', '')";

        // $sql = mysqli_query($conexion,$sql);
        // }
}}
