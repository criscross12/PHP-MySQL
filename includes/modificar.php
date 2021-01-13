<?php  include "conexion.php"; 
 session_start();
 if(isset($_SESSION['matricula'])){
   include ("header.php");
?>
    <body class="">
  <div class="container p-16">
  <hr style="margin-top:20px;margin-bottom: 20px; ">
    <h4>Registro Alumnos</h4>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save.php" method="POST" >
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus required>
                </div>
                <div class="form-group">
                    <input type="text" name="matricula" class="form-control" placeholder="Matricula" autofocus required>
                </div>
                <div class="form-group">
                    <input type="text" name="contrasena" class="form-control" placeholder="Contraseña" autofocus required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Carrera</label>
                    <select class="form-control" name="Carrera">
                    <option selected>Elijir...</option>
                    <option value="ISC">ISC</option>
                    <option value="IMA">IMA </option>
                    <option value="IGE">IGE</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="save" value="GUARDAR">
                </form>
            </div>

        </div>
        
</body>

<div class="col-md-8">
    <form action="" method = "POST">
         <div class="input-group mb-3">
        <select class="custom-select" name="filtro" >
        <option selected>Choose...</option>
        <option value="all">TODOS</option>        
          <option value="ISC">Ing. Sistemas Computacionales</option>
            <option value="IMA">Ing. Mecanica Automotriz</option>
            <option value="IGE">Ing. Gestión Empresarial</option>
        </select>
        <div class="input-group-append">
        <button class="btn btn-success" name="filtrar" type="submit">
          Seleccionar
        </button>
        </div>
    </div>           
    </form>
     
     <hr style="margin-top:20px;margin-bottom: 20px;">
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                    <th>Nombre</th>
                    <th>Matricula</th>
                    <th>Carrera</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <h4>Lista Alumnos</h4>
                     <?php
                     if(isset($_POST['filtrar'])){
                        $carrera = $_POST['filtro'];
                        $sql =mysqli_query($conexion,'SELECT * FROM `alumno` where carrera= "'.$carrera.'" ORDER by A_paterno ASC');
                        $sqlall =mysqli_query($conexion,'SELECT * FROM `alumno` ORDER by A_paterno ASC');

                        if($carrera == "ALL"){
                            while($filas=mysqli_fetch_assoc($sqlall)){ 
                                ?>
                                <tr>
                               <td> 
                               <a href="archivos.php?id=<?php echo $filas['id'] ?>">
                               <?php echo $filas['A_paterno'] , $filas['A_Materno'] , $filas['Nombre'] ?>
                               </a>
                               </td>
                               <td> <?php echo $filas['Matricula']  ?> </td>
                               <td> <?php echo $filas['carrera'] ?> </td>
                               <td> <?php echo $filas['Contrasena']  ?> </td>
                               <td>  
                               <a href="edit.php?id=<?php echo $filas['id']?>" class="btn btn-secondary">
                               <i class="fas fa-edit"></i>
                               </a>
                               <a href="delate.php?id=<?php echo $filas['id']?>" class="btn btn-danger" >
                               <i class="fas fa-trash-alt"  onclick="return confirm('Esta seguro de eliminar al alumno?');"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td></i>
                               </a>
                               
                               </td>
                   </tr>
                               <?php } ?>
                   </tbody>
                               </table>
                   </div>
           
               </div>
           
               <?php  
                        }
                        
                        else if($carrera=="ISC"){
                        while($filas=mysqli_fetch_assoc($sql)){ 
                       ?>
                       <tr>
                      <td> 
                      <a href="archivos.php?id=<?php echo $filas['id'] ?>">
                      <?php echo $filas['A_paterno'] , $filas['A_Materno'] , $filas['Nombre'] ?>
                      </a>
                      </td>
                      <td> <?php echo $filas['Matricula']  ?> </td>
                      <td> <?php echo "ISC";  ?> </td>
                      <td> <?php echo $filas['Contrasena']  ?> </td>
                      <td>  
                      <a href="edit.php?id=<?php echo $filas['id']?>" class="btn btn-secondary">
                      <i class="fas fa-edit"></i>
                      </a>
                      <a href="delate.php?id=<?php echo $filas['id']?>" class="btn btn-danger" >
                      <i class="fas fa-trash-alt"  onclick="return confirm('Esta seguro de eliminar al alumno?');"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td></i>
                      </a>
                      
                      </td>
          </tr>
                      <?php } ?>
          </tbody>
                      </table>
          </div>
  
      </div>
  
      <?php     
                        }else if($carrera=="IMA"){
                            while($filas=mysqli_fetch_assoc($sql)){
                            
                        
                                ?>
                                <tr>
           
                              
                               <td> 
                               <a href="archivos.php?id=<?php echo $filas['id'] ?>">
                               <?php echo $filas['A_paterno'],$filas['A_Materno'], $filas['Nombre'] ?>
                               </a>
                               </td>
                               <td> <?php echo $filas['Matricula']  ?> </td>
                               <td> <?php echo "IMA";  ?> </td>
                               <td> <?php echo $filas['Contrasena']  ?> </td>
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
           
               <?php     

                        }else if($carrera=="IGE"){
                            while($filas=mysqli_fetch_assoc($sql)){
                            
                        
                                ?>
                                <tr>
           
                              
                               <td> 
                               <a href="archivos.php?id=<?php echo $filas['id'] ?>">
                               <?php echo $filas['A_paterno'],$filas['A_Materno'], $filas['Nombre']  ?>
                               </a>
                               </td>
                               <td> <?php echo $filas['Matricula']  ?> </td>
                               <td> <?php echo "IGE";  ?> </td>
                               <td> <?php echo $filas['Contrasena']  ?> </td>
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
           
               <?php 
                        }            
 
 } 
  
                        }else{
     header("location: ../index.php");
 }
 include ("futter.php");
                        
                    
                           
?>
