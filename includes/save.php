<?php include "conexion.php";
session_start();
if(isset($_POST['save'])){

 $nombre = $_POST['nombre'];
 $matricula = $_POST['matricula'];
 $contrasena = $_POST['contrasena']; 
 $carrera = $_POST['Carrera'];
 if($carrera == 'ISC'){
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
        
        header("location: modificar.php");
    }
    }else if($carrera== "IMA"){
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
            
            header("location: modificar.php");
        }

    }else if($carrera == "IGE"){
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
            
            header("location: modificar.php");
        }

    }

 }
 




?>