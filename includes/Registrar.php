<?php  include "conexion.php"; ?>
<?php  include 'header.php' ?>
<body class="center">
  <div class="container p-16">
  
    <div class="row">
        <div class="col-md-4">

                <?php  if(isset($_SESSION['massage'])){    ?>  
                    <div class="alert alert-<?= $_SESSION['massage_type'];  ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['massage']  ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
</div>
                
                <?php } session_unset() ?>

            <div class="card card-body">
                <form action="save.php" method="POST">
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
                </div>
                <div class="form-group">
                    <input type="text" name="matricula" class="form-control" placeholder="Matricula" autofocus>
                </div>
                <div class="form-group">
                    <input type="text" name="contrasena" class="form-control" placeholder="Contraseña" autofocus>
                </div>
                <div class="form-group">
                    <input type="text" name="carrera" class="form-control" placeholder="Carrera" autofocus>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="save" value="GUARDAR">
                </form>
            </div>

        </div>
        
</body>

 




<?php  include 'futter.php' ?>