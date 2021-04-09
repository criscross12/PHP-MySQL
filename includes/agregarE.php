<?php include "conexion.php";
session_start();
if (isset($_SESSION['matricula'])) {
    include("header.php");
?>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="#" method="POST">
                        <h3>Agregar Encuesta</h3>
                        <hr>
                        <div class="form-group">
                            <label class="font-weight-bold">Titulo</label>
                            <input name="nombre" type="text" class="form-control" placeholder="Update Nombre">
                        </div>
                        <div class="form-group">
                            <div class="fl">
                                <label class="font-weight-bold">Nº de opciones:</label>
                                <select name="opciones" class="form-control">
                                    <?php for ($i = 2; $i <= 20; $i++) { // esto es un loop simple, solo para ahorrarnos trabajo, este select tendra de 2 a 20 opciones, si deseas cambiarlo lo puedes hacer aqui. 
                                    ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!--   PRUEBA CON SELECT  -->
                        <div class="form-group">
                            <label class="font-weight-bold">Docente</label>
                            <select class="form-control" name="Carrera">
                                <option value="ISC">ISC</option>
                                <option value="IMA">IMA </option>
                                <option value="IGE">IGE</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Materia</label>
                            <select class="form-control" name="Carrera">
                                <option value="ISC">ISC</option>
                                <option value="IMA">IMA </option>
                                <option value="IGE">IGE</option>
                            </select>
                        </div>

                        <!--   PRUEBA CON SELECT  -->
                        <div class="container">
                            <button class="btn btn-success" name="update">
                                Continuar
                            </button>
                            <a href="encuestas.php" class="btn btn-info m-2">← Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
} else {
    header("location: ../index.php");
}
include("futter.php");
?>