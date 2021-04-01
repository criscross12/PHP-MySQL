<?php include "conexion.php";
session_start();
$idUsuario = $_SESSION['id'];
$tamaño = $_FILES['subir']['size']; 
$limite_kb = 1001;
if($tamaño <= $limite_kb * 1024){
    $carpetaUsuario = '../archivos/'.$idUsuario;
    if(!file_exists($carpetaUsuario)){
        mkdir($carpetaUsuario, 0777, true);
    }
        $nombreArchivo = $_FILES['subir']['name'];
        $explode = explode('.',$nombreArchivo);
        $tipoArchivo = array_pop($explode);

        $rutaAlmacenamiento = $_FILES['subir']['tmp_name'];
        $rutaFinal = $carpetaUsuario .'/'. $nombreArchivo;
       
        if(move_uploaded_file($rutaAlmacenamiento,$rutaFinal)){
            $sql = "INSERT INTO `t_archivos` (`id_alumno`, `nombre`, `ruta`) VALUES (?,?,?)";
            $stmt = mysqli_prepare($conexion, $sql);
            $stmt->bind_param('sss', $idUsuario, $nombreArchivo, $rutaAlmacenamiento);
            //ejecutamos la sentencia
            if(mysqli_stmt_execute($stmt)){
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }else{
                echo "Chanfle, hubo un problema y no se guardo el archivo. ". mysqli_stmt_error($stmt)."<br/>";
            }  
                mysqli_stmt_close($stmt);
                mysqli_close($conexion);
                    }
}else{
    echo "<script>
                alert('No se puede subir archivos mayores a 1MB');
                window.location= 'AlumArchi.php'
               
    </script>";
    
   
}
// Cómo subir el archivo
//$fichero = $_FILES["subir"];

// Cargando el fichero en la carpeta "subidas"
//move_uploaded_file($fichero["tmp_name"], "archivos/".$fichero["name"]);

// Redirigiendo hacia atrás
//header("Location: " . $_SERVER["HTTP_REFERER"]);

?>