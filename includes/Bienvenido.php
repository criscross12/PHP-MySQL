  
  
<?php include ("header.php") ?>

<body>
<?php
    #INICIO DE SESSION
    session_start();
    $usuario =  $_SESSION['username']; 
    if(!isset($usuario)){
        header("location: HOME.php");
    }else
    echo "<h1>Bienvenido $usuario</h1>";
    echo "<a href ='salir.php'>CERRAR SESIÓN</a>";
    ?>
     
  <?php include ("futter.php") ?>
