<?php include "conexion.php";
session_start();
$idUsuario = $_SESSION['id'];
if (isset($_SESSION['id'])) {
    $sql = mysqli_query($conexion, 'SELECT * FROM `alumno` where id= "' . $idUsuario . '" ');
    $filas = mysqli_fetch_assoc($sql);
    include("headeralum.php");
?>

    <body class="text-center">
        <main role="main" class="inner cover">
            <h1 class="cover-heading">Publicaciones <?php echo $filas['Nombre'] ?></h1>
            <p class="lead">Marucjan </p>
            <div class="container">
                <table class="table table-info table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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