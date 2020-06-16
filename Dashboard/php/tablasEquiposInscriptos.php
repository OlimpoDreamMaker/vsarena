<?php
function equiposTorneos($conexion,$idTorneo){
  $consulta =  "SELECT * 
                FROM Equipos_has_Torneos h, Equipos e
                WHERE h.Torneos_idTorneo='$idTorneo' 
                AND h.Equipos_idEquipo=e.idEquipo";
  $resultado = mysqli_query($conexion,$consulta);
  if(isset($resultado) && mysqli_num_rows($resultado)>0){
    while($fila = mysqli_fetch_assoc($resultado)){
      $idEquipo = $fila['idEquipo'];
      $subconsulta = "SELECT * 
                      FROM usuarios  
                      WHERE Equipos_idEquipos='$idEquipo'";
      $resultado2 = mysqli_query($conexion, $subconsulta);
      echo "<div class='col-6'>";
      echo  "<div class='card'>";
      echo  "<!-- Card Header START -->";
      echo  "<div class='card-header'>
              <h3 class='card-title'><a href='./equipo.php?id=".$fila['idEquipo']."'>".$fila['equipo']."</a></h3>
            </div>";
      echo "<!-- Card Header END -->
            <!-- Card Body START -->
            <div class='card-body p-0'>
              <table class='table table-striped'>
                
                <!-- Cabecera Tabla Ronda START -->
                <thead>
                <tr>
                  <th>ID-Usuaio</th>
                  <th>Nombre Usuario</th>
                </tr>
                </thead>
                <!-- Cabecera Tabla Ronda END -->
                
                <!-- Contenido Tabla Ronda START -->
                <tbody>";
      
      while($usuarios = mysqli_fetch_assoc($resultado2)){
        echo "<tr>";
        echo "<td>
                <a href='./usuario.php?id=".$usuarios['idUsuario']."'>".$usuarios['idUsuario']."</a>
              </td>";
        echo "<td>
                <a href='./usuario.php?id=".$usuarios['idUsuario']."'>".$usuarios['usuario']."</a>
              </td>";
        echo "</tr>";
      }  
      echo "<!-- Cabecera Tabla Ronda END -->

              </table>
            </div>
            <!-- Card Body END -->";
      echo  "</div>";
      echo "</div>";
    }
  }else{
    echo "<!-- Mensaje si no hay Equipos START -->
          <div class='col-12 mb-4'>
            <h2 class='text-center'>Aun no se inscribieron equipos</h2>
          </div>
          <!-- Mensaje si no hay Equipos END -->";
  }
}
?>