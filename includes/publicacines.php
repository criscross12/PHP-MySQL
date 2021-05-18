<?php include "conexion.php";
session_start();
$idUsuario = $_SESSION['id'];
if (isset($_SESSION['id'])) {
    $sql = mysqli_query($conexion, 'SELECT * FROM `alumno` where id= "' . $idUsuario . '" ');
    $filas = mysqli_fetch_assoc($sql);
    include("headeralum.php");
    $sqlEncuestas = "SELECT * FROM encuesta WHERE Status= 1";
    $res = mysqli_query($conexion, $sqlEncuestas);
?>

<body class="text-center">
    <main role="main" class="inner cover">
        <h1 class="cover-heading">Publicaciones <?php echo $filas['Nombre'] ?></h1>
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
                                <th width="10%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
            while ($mostrar = mysqli_fetch_array($res)) {
              $status = $mostrar['Status'];
            ?>
                            <tr>
                                <!-- DESCARGAR ARCHIVO-->
                                <td><?php echo $mostrar['Titulo']; ?></td>
                                <td>
                                    <a href="<?php echo $rutaDescarga; ?>" download="<?php $nombreArchivo ?>"
                                        class="btn btn-info ">
                                        <i class="fas fa-file-download"></i>
                                </td>
                                <!-- ELIMINAR ARCHIVO-->
                                <td>
                                    <a href="encuestas/deleteEncuesta.php?id=<?php echo $mostrar['Id_encuesta'] ?>"
                                        class="btn btn-danger">
                                        <i class="fas fa-trash-alt"
                                            onclick="return confirm('Esta seguro de eliminar al alumno?');"> <span
                                                class="glyphicon glyphicon-trash" aria-hidden="true"></span></i>
                                    </a>
                                </td>
                                <?php
                if ($status == "1") {
                  echo  '<td>
                  <a  class="btn btn-info ">
                    <i class="fas fa-check-square"></i>
                   </td>'
                ?>                        
                            </tr>
                            <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Fin tabla-->
            </div>
            </div>


        </main>
    </main>

</body>

</html>
<?php

} else {
    include("futter.php");
    header("location: ../index.php");
}
include("futter.php");



?>