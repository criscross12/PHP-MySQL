<?php
include "../conexion.php";

$idCe = $_POST['idCe'];
$nombre = $_POST['nombre'];
$ap_paterno = $_POST['AP'];
$ap_materno = $_POST['AM'];
$password = $_POST['password'];

$sql = mysqli_query($conexion, 'SELECT * FROM `ce` where Matricula= "' . $idCe . '" ');
$filas = mysqli_fetch_assoc($sql);
$id = $filas['id'];

$query = "UPDATE `ce` SET `Nombre` = '$nombre',`Ap_Paterno` = '$ap_paterno',`Ap_Materno` = '$ap_paterno',`Contraseña` = '$password' WHERE `ce`.`id` = $id;";
$consulta = mysqli_query($conexion, $query);
if (isset($consulta)) {
    echo "<script>
    alert('!Actualizado Correctamente :)!');
    window.location= '../profileCE.php'
    </script>"; 
}else{
    echo "mal";
}


?>