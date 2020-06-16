<?php
function mostrarRondas($conexion, $idTorneo){
  $consulta = "SELECT * FROM rondas WHERE Torneos_idTorneos='$idTorneo'";
  $resultado = mysqli_query($conexion,$consulta);
  if(mysqli_num_rows($resultado)>0){
    while($fila = mysqli_fetch_assoc($resultado)){
      ?>
      <div class="col-12">
        <div class="card">

          <!-- Card Header START -->
          <div class="card-header">
            <h3 class="card-title"><a href="./rondas.php?id=<?php echo $fila['idRonda'];?>"><?php echo $fila['nombreRonda'];?></a></h3>
          </div>
          <!-- Card Header END -->
          
          <!-- Card Body START -->
          <div class="card-body p-0">
            <table class="table table-striped">
              
              <!-- Cabecera Tabla Ronda START -->
              <thead>
              <tr>
                <th>Equipo A</th>
                <th>Equipo B</th>
                <th>Fecha</th>
                <th>Ganador</th>
              </tr>
              </thead>
              <!-- Cabecera Tabla Ronda END -->
              <!--REALIZAR LECTURA DE LOS EQUIPOS Y DE LOS ENFRENTAMIENTOS QUE TUVIERON-->
              <!-- Contenido Tabla Ronda START -->
              <tbody>
              <tr>
                <td><a href="./equipo.php">LLuvia Inesperada</a></td>
                <td><a href="./equipo.php">Fuego Rapido</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="./equipo.php">Mar sin Agua</a></td>
                <td><a href="./equipo.php">Las Estrellas</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="./equipo.php">Lluvia Eterna</a></td>
                <td><a href="./equipo.php">Nube Negra</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="./equipo.php">Mente en Llamas</a></td>
                <td><a href="./equipo.php">Sol Naciente</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="./equipo.php">Manda Artica</a></td>
                <td><a href="./equipo.php">Frio Quemador</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="./equipo.php">Lluvia Eterna</a></td>
                <td><a href="./equipo.php">Nube Negra</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="./equipo.php">Mente en Llamas</a></td>
                <td><a href="./equipo.php">Sol Naciente</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="./equipo.php">Manda Artica</a></td>
                <td><a href="./equipo.php">Frio Quemador</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              </tbody>
              <!-- Cabecera Tabla Ronda END -->

            </table>
          </div>
          <!-- Card Body END -->

        </div>
      </div>
      <?php
    }
  }else{
    echo "<div class='col-12 mb-4'>
            <h2 class='text-center'>Aun no se crearon Rondas.</h2>
          </div>";
  }
}
?>