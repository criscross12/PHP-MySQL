<?php include "conexion.php";
session_start();
$idUsuario = $_SESSION['id'];
if (isset($_SESSION['id'])) {
  $sql = mysqli_query($conexion, 'SELECT * FROM `alumno` where id= "' . $idUsuario . '" ');
  $filas = mysqli_fetch_assoc($sql);
  include("headeralum.php");
?>

  <body class="text-center">
    <div class="container">
      <main role="main" class="inner cover">
        <h1 class="cover-heading">Bienvenido <?php echo $filas['Nombre'] ?></h1>
        <p class="lead" style="text-align: justify;">Éste es el sistema gestor de archivos para alumnos de recien ingreso de la UESX, debido a la contingencia provocada por el COVID-19 el sistema será
          auxiliar en la gestión de archivos tanto para el encargado de control escolar como el alumno evitando el contacto social para reducir cualquier posibilidad de contagios
          , si es que quieres saber más acerca de indicaciones especificas puedes descargar el manual de uso por cualquier duda existente</p>
        <p class="lead">
          <a href="../archivos/Manuales/Manualalumno.pdf" download="Manual de uso Alumno" class="btn btn-lg btn-info"> Descargar</a>
          <i class="fas fa-file-download"></i>
        </p>
      </main>
    </div>
  </body>

  </html>
<?php

} else {
  include("futteralum.php");
  header("location: ../index.php");
}
include("futteralum.php");



?>