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
                                <th width="13%">Título</th>
                                <th width="13%">Contestar</th>
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
                                    <!-- <a href="form.php" class="btn btn-info "> -->
                                    <a href="form.php?Id_encuesta=<?php echo $mostrar['Id_encuesta'] ?>">
                                        <i class="fas fa-pencil-alt"></i>
                                </td>
                                <?php
                                    if ($status == "1") {
                                    echo  '<td>
                                    <a  class="btn btn-success">
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