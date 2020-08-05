<?php  include "conexion.php"; ?>
<?php  include 'header.php' ?>

        <div class="col-md-8">
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                    
                    <th>Nombre</th>
                    <th>Matricula</th>
                    <th>Carrera</th>
                    <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php
                     
                     $sql =mysqli_query($conexion,"SELECT * FROM `alumno` where Carrera like \"ISC\" ");
                    
                      while($filas=mysqli_fetch_assoc($sql)){
                          
                      
                     ?>
                     <tr>

                   
                    <td> <?php echo $filas['Nombre']  ?> </td>
                    <td> <?php echo $filas['Matricula']  ?> </td>
                    <td> <?php echo $filas['Carrera']  ?> </td>
                    <td>  
                    <a href="edit.php?id=<?php echo $filas['id']?>" class="btn btn-secondary">
                    <i class="fas fa-edit"></i>
                    </a>
                    <a href="delate.php?id=<?php echo $filas['id']?>" class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i>
                    </a>
                    
                    </td>
        </tr>
                    <?php } ?>
        </tbody>
                    </table>
        </div>

    </div>

  </div>



<?php  include 'futter.php' ?>
