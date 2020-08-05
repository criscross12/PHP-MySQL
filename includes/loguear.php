

<?php

require "conexion.php";
session_start();
$matricula = $_POST['matricula'];
$contrasena = $_POST['contrasena'];


$q = "SELECT  COUNT(*) as contar from alumno where matricula = '$matricula' and contrasena = '$contrasena' ";
$sq = "SELECT  COUNT(*) as conta from ce where matricula = '$matricula' and contraseña = '$contrasena' ";



$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

$pro = mysqli_query($conexion,$sq);
$proy = mysqli_fetch_array($pro);


if($array['contar']>0 ){
    $_SESSION['username']= $matricula;
    header("location: Bienvenido.php");
}else if($proy['conta']>0 )
{
    $_SESSION['username']= $matricula;
    header("location: index.php");
    
   
}else{

    header("location: HOME.php");
}


?>