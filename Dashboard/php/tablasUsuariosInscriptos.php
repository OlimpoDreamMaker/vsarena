<?php
function usuariosTorneos($conexion,$idTorneo){
  $consulta =  "SELECT * 
                FROM torneos_has_usuarios h, usuarios u
                WHERE h.Torneos_idTorneo='$idTorneo' 
                AND h.Usuarios_idUsuario=u.idUsuario";
  $resultado = mysqli_query($conexion,$consulta);
  if(isset($resultado) && mysqli_num_rows($resultado)>0){
    echo "<div class='col-6'>";
    echo  "<div class='card'>";
    echo  "<!-- Card Header START -->";
    echo  "<div class='card-header'>
            <h3 class='card-title'><a href='./usuarios.php'>Usuarios</a></h3>
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
    
    while($usuarios = mysqli_fetch_assoc($resultado)){
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
  }else{
    echo "<!-- Mensaje si no hay Usuarios START -->
          <div class='col-12 mb-4'>
            <h2 class='text-center'>Aun no se inscribieron usuarios</h2>
          </div>
          <!-- Mensaje si no hay Usuarios END -->";
  }
}
?>