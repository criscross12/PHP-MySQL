<?php include "conexion.php";
$sqlSemestre = "SELECT * FROM semestre";
$result = mysqli_query($conexion, $sqlSemestre);
$sqlCarrera = "SELECT * FROM carrera";
$resultCarrera = mysqli_query($conexion, $sqlCarrera);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumno</title>
    <link rel="icon" href="umb.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

</head>

<body>
    <br>
    <div class="container">
        <h1 style="text-align: center;">Registro de Alumno</h1>
        <hr>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="savealum.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre(s)" autofocus
                            required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="AP" class="form-control" placeholder="Apellido Paterno" autofocus
                            required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="AM" class="form-control" placeholder="Apellido Materno" autofocus
                            required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="matricula" class="form-control" placeholder="Matricula" autofocus
                            required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" autofocus
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Carrera</label>
                        <select class="form-control" name="Carrera">
                            <option value="0">Seleccione:</option>
                            <?php
                            while ($filasCa = mysqli_fetch_array($resultCarrera)) {
                                echo '<option value="' . $filasCa["id"] . '">' . utf8_encode($filasCa["Nombre_Carrera"]) . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Semestre</label>
                        <!-- MODIFICAR SELECCIONAR POR LA BASE DE DATOS -->
                        <select class="form-control" name="Semestre">
                            <!-- <option selected>Elijir...</option> -->
                            <option value="0">Seleccione:</option>
                            <?php
                            while ($filas = mysqli_fetch_array($result)) {
                                echo '<option value="' . $filas["id"] . '">' . utf8_encode($filas["nombre_semestre"]) . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <input type="submit" class="btn  btn-outline-success btn-block" name="save" value="GUARDAR"
                        onclick="return confirm('Esta seguro de que tus datos son correctos?');"> <span
                        class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td>
                    <br>
                    <div class="col text-center">
                        <a href="../index.php" class=" ">
                            <button type="button" class="btn btn-outline-primary btn-block">Iniciar Sesión</button>
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="../css/sweetalert.min.js"></script>
</body>

</html>