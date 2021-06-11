<?php include "conexion.php";
session_start();
if (isset($_SESSION['id'])) {
    $idUsuario = $_SESSION['id'];
    $sql = mysqli_query($conexion, 'SELECT * FROM `alumno` where id= "' . $idUsuario . '" ');
    $filas = mysqli_fetch_assoc($sql);
    include("headeralum.php");
    $sql = "SELECT * FROM preguntas";
    $pre = mysqli_query($conexion, $sql);
    $sqlRes = "SELECT * FROM respuestas";
    $res = mysqli_query($conexion, $sqlRes);
?>
<?php 
    $id = $_GET['Id_encuesta'];
    $query = "SELECT * FROM `encuesta` INNER join materias on encuesta.Materia= materias.ID INNER JOIN maestros on encuesta.Docente= maestros.ID WHERE Id_encuesta = $id";

    $encuesta = mysqli_query($conexion, $query);
    $enc = mysqli_fetch_assoc($encuesta);
?>

<body class="text-center">
    <main role="main" class="inner cover">
        <h1 class="cover-heading">Encuesta de <?php echo $enc["Nombre"] ?></h1>
        <main role="main" class="container">
            <div class="panel panel-primary">
                <div class="alert alert-success" role="alert" style="text-align: justify;">
                    Objetivo: Evaluar el desempeño docente en las clases impartidas en la UES Xalatlaco, para detectar
                    deficiencias, en el proceso enseñanza aprendizaje para la retroalimentación
                    correspondiente al Docente para mejorar las técnicas y métodos utilizados en la cátedra. </div>
                <div class="alert alert-success" role="alert" style="text-align: justify;">
                    Indicaciones: Contesta lo siguiente a fin de evaluar el desempeño del docente: <?php echo $enc['Nombre_Docente']?></div>
                <div class="panel-body">
                    <form action="encuestas/Votar.php?Id_encuesta=<?php echo $enc["Id_encuesta"]; ?>" method="Post">
                        <table class="table table-primary  table-striped">
                            <thead>
                                <tr>
                                    <th width="25%"></th>
                                    <th width="13%">Totalmente en desacuerdo</th>
                                    <th width="13%">Desacuerdo</th>
                                    <th width="13%">Ni en acuerdo ni en desacuerdo</th>
                                    <th width="13%">De acuerdo</th>
                                    <th width="13%">Totalmente de acuerdo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($mostrarP = mysqli_fetch_array($pre)) {                    
                            ?>
                                <tr>

                                    <td><?php echo $mostrarP['Texto'] ?></td>
                                    <td>
                                        <input class="form-check-input" type="radio"
                                            name="Pregunta.<?php echo $mostrarP[0] ?>." id="flexRadioDefault1"
                                            value="Totalmente en desacuerdo"><?php echo $mostrarP[0] ?>
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="radio"
                                            name="Pregunta.<?php echo $mostrarP[0] ?>." id="flexRadioDefault1"
                                            value="Desacuerdo"><?php echo $mostrarP[0] ?>
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="radio"
                                            name="Pregunta.<?php echo $mostrarP[0] ?>." id="flexRadioDefault1"
                                            value="Ni en acuerdo ni en desacuerdo"><?php echo $mostrarP[0] ?>
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="radio"
                                            name="Pregunta.<?php echo $mostrarP[0] ?>." id="flexRadioDefault1"
                                            value="De acuerdo"><?php echo $mostrarP[0] ?>
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="radio"
                                            name="Pregunta.<?php echo $mostrarP[0] ?>." id="flexRadioDefault1"
                                            value="Totalmente de acuerdo"><?php echo $mostrarP[0] ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="container">
                            <button class="btn btn-info" name="Enviar">
                                Enviar
                            </button>
                        </div>
                    </form>

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