<?php
include 'conexion.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $delete = "DELETE FROM `alumno` WHERE `id` = $id";
        $consulta = mysqli_query($conexion,$delete);

        if(!$consulta){
            die("query fail"); 
        }

            $_SESSION['massage'] = 'Eliminación correcta :)';
            $_SESSION['massage_type'] = 'danger';
            header("location: modificar.php");
    }



?>