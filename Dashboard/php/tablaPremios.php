<?php
function premiosTorneo($conexion,$idTorneo){
  $consulta =  "SELECT * 
                FROM premios 
                WHERE Torneos_idTorneos='$idTorneo'";
  $resultado = mysqli_query($conexion,$consulta);
  if(isset($resultado) && mysqli_num_rows($resultado)>0){
      echo "<div class='col-6'>";
      echo  "<div class='card'>";
      echo  "<!-- Card Header START -->";
      echo  "<div class='card-header'>
              <h3 class='card-title'>Premios</h3>
            </div>";
      echo "<!-- Card Header END -->
            <!-- Card Body START -->
            <div class='card-body p-0'>
              <table class='table table-striped'>
                
                <!-- Cabecera Tabla Premio START -->
                <thead>
                <tr>
                  <th>Nombre Premio</th>
                  <th>Descripcion</th>
                  <th>Entregado</th>
                </tr>
                </thead>
                <!-- Cabecera Tabla Premio END -->
                
                <!-- Contenido Tabla Premio START -->
                <tbody>";
      
      while($fila = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
        echo "<td>
                <a href='./premio.php?id=".$fila['idPremio']."'>".$fila['nombrePremio']."</a>
              </td>";
        echo "<td>".$fila['Premio']."</td>";
        if($fila['Equipos_idEquipo']==1 && $fila['Usuarios_idUsuario']==1){
          echo "<td>No entregado</td>";
        }else{
          echo "<td>Entregado</td>";
        }
        echo "</tr>";
      }  
      echo "<!-- Cabecera Tabla Premio END -->
              </table>
            </div>
            <!-- Card Body END -->";
      echo  "</div>";
      echo "</div>";
  }else{
    echo "<!-- Mensaje si no hay Equipos START -->
          <div class='col-12 mb-4'>
            <h2 class='text-center'>Aun no se crearon Premios</h2>
          </div>
          <!-- Mensaje si no hay Equipos END -->";
  }
}
?>