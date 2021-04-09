<?php include "conexion.php";
session_start();
if (isset($_SESSION['matricula'])) {
  include("header.php");
?>

  <!-- <div class="wrap">
        <h1>Encuestas</h1>
        <ul class="votacion index">

            <li><a>'.$result->titulo.'</a></li>
        </ul>
        <a href="agregar.php">+ Agregar nueva encuesta</a>
    </div> -->
  <div class="alert alert-success" role="alert">
    <div class="container">
      <h3 class="alert-heading text-center">EVALUACIÓN DOCENTE!</h3>
      <hr>
      <p style="text-align: justify;">Modulo para crear encuestas referentes a la evaluación docente que integra la UMB UES Xalatlaco</p>
    </div>
  </div>
  <br>

  <main role="main" class="container">
      <div class="col-lg-5">        
          <a href="agregarE.php" class="btn btn-info">+ Agregar nueva encuesta</a>
      </div>
      <div class="col-lg-5"> </div>
      <hr>
  </main>


  
  <main role="main" class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Encuestas</h3>
      </div>
      <div class="panel-body">

        <table class="table">
          <thead>
            <tr>
              <th width="70%">Título</th>
              <th width="13%">Editar</th>
              <th width="10%">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($mostrar = mysqli_fetch_array($result)) {
              $rutaDescarga = "../archivos/" . $idUsuario . "/" . $mostrar['nombreArchivo'];
              $nombreArchivo = $mostrar['nombreArchivo'];
              $idArchivo = $mostrar['id_archivo'];

            ?>
              <tr>
                <!-- DESCARGAR ARCHIVO-->
                <td><?php echo $mostrar['nombreArchivo']; ?></td>
                <td>
                  <a href="<?php echo $rutaDescarga; ?>" download="<?php $nombreArchivo ?>" class="btn btn-info ">
                    <i class="fas fa-file-download"></i>
                </td>
                <!-- ELIMINAR ARCHIVO-->
                <td>
                  <a href="Eliminar.php?name=../archivos/<?php echo $mostrar['nombreArchivo']; ?>" class="btn btn-danger">
                    <i class="fas fa-trash-alt" onclick="return confirm('Esta seguro de eliminar al alumno?');"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></i>
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- Fin tabla-->
    </div>
    </div>


  </main>

<?php
} else {
  header("location: ../index.php");
}
include("futter.php");
?>