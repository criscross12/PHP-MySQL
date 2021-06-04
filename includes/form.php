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
    $query = "SELECT * FROM encuesta WHERE Id_encuesta = $id";
    $encuesta = mysqli_query($conexion, $query);
    $enc = mysqli_fetch_assoc($encuesta);
?>

<body class="text-center">
    <main role="main" class="inner cover">
        <h1 class="cover-heading">Encuesta de  <?php echo $enc['Titulo'] ?></h1>
        <main role="main" class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Encuestas</h3>
                </div>
                <div class="panel-body">
                    <form action="form.php?id_encuesta=<?php echo $_GET['Id_encuesta']; ?>" method="Post">
                        <table class="table table-primary  table-striped">
                            <thead>
                                <tr>
                                    <th width="25%"></th>
                                    <th width="13%">Totalmente en desacuerdo</th>
                                    <th width="13%">Desacuerdo</th>
                                    <th width="13%">sNi en acuerdo ni en desacuerdo</th>
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
                                        <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                            id="flexRadioDefault1" value="7">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                            id="flexRadioDefault1" value="7">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                            id="flexRadioDefault1" value="7">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="container">
                        <button class="btn btn-info" name="update">
                            Actualizar
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