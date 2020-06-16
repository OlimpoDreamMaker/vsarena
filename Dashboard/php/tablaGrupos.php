<?php
function mostrarGrupos($conexion, $idTorneo){
  $consulta = "SELECT * FROM grupos WHERE Torneos_idTorneos='$idTorneo'";
  $resultado = mysqli_query($conexion,$consulta);
  if(mysqli_num_rows($resultado)>0){
    while($fila = mysqli_fetch_assoc($resultado)){
      ?>
      <div class="col-6">
        <div class="card">

          <!-- Card Header START -->
          <div class="card-header">
            <h3 class="card-title"><a href="./grupo.php?id=<?php echo $fila['idGrupo'];?>"><?php echo $fila['nombreGrupo'];?></a></h3>
          </div>
          <!-- Card Header END -->
          
          <!-- Card Body START -->
          <div class="card-body p-0">
            <table class="table table-striped">
              
              <!-- Cabecera Tabla Grupo START -->
              <thead>
              <tr>
                <th>ID-Equipo</th>
                <th>Equipo</th>
                <th>Puntos</th>
                <th>Resultados</th>
              </tr>
              </thead>
              <!-- Cabecera Tabla Grupo END -->
              <!--REALIZAR LECTURA DE LOS EQUIPOS Y DE LOS ENFRENTAMIENTOS QUE TUVIERON-->
              <!-- Contenido Tabla Grupo START -->
              <tbody>
              <!--tr>
                <td><a href="./equipo.php">256</a></td>
                <td><a href="./equipo.php">Fuego Rapido</a></td>
                <td>5</td>
                <td>V - D - E - V</td>
                <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
              </tr-->
              </tbody>
              <!-- Cabecera Tabla Grupo END -->

            </table>
          </div>
          <!-- Card Body END -->

        </div>
      </div>
      <?php
    }
  }else{
    echo "<div class='col-12 mb-4'>
            <h2 class='text-center'>Aun no se crearon Grupos.</h2>
          </div>";
  }
}
?>