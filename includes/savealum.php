<?php include "conexion.php";
session_start();
if(isset($_POST['save'])){
 $nombre = $_POST['nombre'];
 $AP = $_POST['AP'];
 $AM = $_POST['AM'];
 $matricula = $_POST['matricula'];
 $contrasena = $_POST['contrasena']; 
 $carrera = $_POST['Carrera'];
 if($carrera == 'ISC'){
    if($nombre == ""){
        echo 'no';
    }
    //Validar que el usuario no este repetido
    $sqla = "SELECT Matricula FROM `alumno` where Matricula='$matricula'";
    $result= mysqli_query($conexion,$sqla);
    $datos = mysqli_fetch_array($result);
    if($datos['Matricula'] !="" || $datos['Matricula'] == $matricula){
        echo "<script>
        alert('!!Alumno ya registrado!!');
        window.location= 'registro.php'
        </script>";
    }else{
//Aqui termina la validacion xd
    $sql = "INSERT INTO `alumno` (`Nombre`, `A_paterno`, `A_materno`, `Matricula`, `Contrasena`, `Carrera`) 
    VALUES ('$nombre','$AP','$AM','$matricula','$contrasena','$carrera')";
    $consulta = mysqli_query($conexion,$sql);
    if(!$consulta){
        die("query fail"); 
    }else{
        echo "<script>
        alert('Registro Exitoso :)');
        window.location= 'registro.php'
        </script>";
    }
    }
    }else if($carrera== "IMA"){
        if($nombre == ""){
            echo 'no';
        }
                //Validar que el usuario no este repetido
            $sqla = "SELECT Matricula FROM `alumno` where Matricula='$matricula'";
            $result= mysqli_query($conexion,$sqla);
            $datos = mysqli_fetch_array($result);
            if($datos['Matricula'] !="" || $datos['Matricula'] == $matricula){
                echo "<script>
                alert('!!Alumno ya registrado!!');
                window.location= 'registro.php'
                </script>";
            }else{
        //Aqui termina la validacion xd
        $sql = "INSERT INTO `alumno` (`Nombre`, `A_paterno`, `A_materno`, `Matricula`, `Contrasena`, `Carrera`) 
        VALUES ('$nombre','$AP','$AM','$matricula','$contrasena','$carrera')";
        $consulta = mysqli_query($conexion,$sql);
        if(!$consulta){
            die("query fail"); 
        }else{
    
            echo "<script>
            alert('Registro Exitoso :)');
            window.location= 'registro.php'
            </script>";
        }
    }
    }else if($carrera == "IGE"){
        if($nombre == ""){
            echo 'no';
        }
         //Validar que el usuario no este repetido
    $sqla = "SELECT Matricula FROM `alumno` where Matricula='$matricula'";
    $result= mysqli_query($conexion,$sqla);
    $datos = mysqli_fetch_array($result);
    if($datos['Matricula'] !="" || $datos['Matricula'] == $matricula){
        echo "<script>
        alert('!!Alumno ya registrado!!');
        window.location= 'registro.php'
        </script>";
    }else{
        //Aqui termina la validacion xd
        $sql = "INSERT INTO `alumno` (`Nombre`, `A_paterno`, `A_materno`, `Matricula`, `Contrasena`, `Carrera`) 
        VALUES ('$nombre','$AP','$AM','$matricula','$contrasena','$carrera')";
        $consulta = mysqli_query($conexion,$sql);
        
        if(!$consulta){
            die("query fail"); 
        }else{
            echo "<script>
            alert('Registro Exitoso :)');
            window.location= 'registro.php'
            </script>";
        }
        }
    }
 }
?>