<?php include 'conexion.php';

if  (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM alumno WHERE id = $id";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $nombre = $row['Nombre'];
      $matricula = $row['Matricula'];
      $contrasena = $row['Contrasena'];
      $carrera = $row['Carrera'];
     
    }
  }
 
if(isset($_POST['update'])){
    $id = $_GET['id'];
    $nombre= $_POST['nombre'];
    $matricula = $_POST['matricula'];
    $contrasena = $_POST['Contrasena'];
    $carrera = $_POST['Carrera'];
    $query = "UPDATE `alumno` SET `Nombre` = '$nombre', `Matricula` = '$matricula', `Contrasena` = '$contrasena' , `Carrera`= '$carrera' WHERE id=$id";
     mysqli_query($conexion, $query);
    
    
     $_SESSION['massage'] = 'Actualizado correctamente :)';
    $_SESSION['massage_type'] = 'success';
    header('Location: modificar.php');
}

?>

<?php  include 'header.php' ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Update Nombre">
        </div>
        <div class="form-group">
          <input name="matricula" type="text" class="form-control" value="<?php echo $matricula; ?>" placeholder="Update Nombre">
        </div>
        <div class="form-group">
          <input name="Contrasena" type="text" class="form-control" value="<?php echo $contrasena; ?>" placeholder="Update Nombre">
        </div>
        <div class="form-group">
          <input name="Carrera" type="text" class="form-control" value="<?php echo $carrera; ?>" placeholder="Update Nombre">
        </div>
        <button class="btn btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>



<?php  include 'futter.php' ?>