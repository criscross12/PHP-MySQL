<?php include "conexion.php";
session_start();
$idUsuario = $_SESSION['id'];
// $pregunta = $_POST['tiempo'];

//     // Recorremos todas las preguntas
for($i=1; $i<=50; $i++){
    //Obtenemos el texto de la respuesta
    //Y lo insertamos
        $sql = "INSERT INTO `prueba` (`Id`, `Texto`, `id_al`) VALUES (NULL, 'prueba', '$idUsuario')";
        // $sql = "INSERT INTO `respuestas` (`id`, `$id`, `$idUsuario`, `id_pregunta`, `respuesta`) VALUES (NULL, '', '', '', '')";
        $consulta = mysqli_query($conexion, $sql);
}
echo "dood";
