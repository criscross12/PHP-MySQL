<?php include "conexion.php";
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
    session_start();
    // $_SESSION['matricula']= $matricula;
    $sqlid = "SELECT id FROM `alumno` where matricula = '$matricula' and contrasena = '$contrasena' ";
    $consultaid = mysqli_query($conexion,$sqlid);
    $idusuario = mysqli_fetch_row($consultaid)[0];
    $_SESSION['id'] = $idusuario;
    session_regenerate_id();
    header("location: inicio.php");
}else if($proy['conta']>0 )
{
    $_SESSION['matricula']= $matricula;
    $sqlid = "SELECT id FROM `ce` where matricula = '$matricula' and contraseña = '$contrasena' ";
    $consultid = mysqli_query($conexion,$sqlid);
    $idusuario = mysqli_fetch_row($consultid)[0];
    $_SESSION['id'] = $idusuario;
    session_regenerate_id();
    header("location: index.php");
}else{
    echo "<script>
    alert('!!ERROR!!');
    </script>";
    header("location: ../index.php");
}


?>