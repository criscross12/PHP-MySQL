<?php include "conexion.php";

if(isset($_POST['save'])){

 $nombre = $_POST['nombre'];
 $matricula = $_POST['matricula'];
 $contrasena = $_POST['contrasena'];
 $carrera = $_POST['carrera'];
 if($nombre == ""){
    echo 'no';
 }
 
 $sql = "INSERT INTO `alumno` (`Nombre`, `Matricula`, `Contrasena`, `Carrera`) VALUES ('$nombre','$matricula','$contrasena','$carrera')";
 $consulta = mysqli_query($conexion,$sql);
   
if(!$consulta){
    die("query fail"); 
}else{


    $_SESSION['massage'] = 'Registro exitoso :)';
    $_SESSION['massage_type'] = 'success';
    header("location: Registrar.php");
}

}




?>