<?php include "conexion.php"; 
session_start();
if(isset($_SESSION['matricula'])){
    $id = $_SESSION['matricula'];
    $sql =mysqli_query($conexion,"SELECT * FROM `ce`");
    $filas=mysqli_fetch_assoc($sql);
  include ("header.php");
?>
<body class="text-center">
    <main role="main" class="inner cover">
        <h1 class="cover-heading">Bienvenido Lic. <?php echo $filas['Nombre'] ?></h1>
        <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
        </p>

              </main> 
</body>

<?php
    include ("futter.php");
    } else{
        header("location: ../index.php");
    }
?>





  

