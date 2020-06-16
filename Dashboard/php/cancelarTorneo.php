<?php
  //Cancelar Torneo
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idTorneo = $_GET['id']; //Se recibe el ID del usuario a eliminar

  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta =  "UPDATE torneos SET 
                  estado='Cancelado'
                  WHERE idTorneo='$idTorneo";
    mysqli_query($conexion, $consulta);   
    $desconectar = desconectarBD($conexion);
    header("Location: ../templates/torneo.php?id=$idTorneo");
    //Hacer alert
    //Torneo Cancelado
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    $desconectar = desconectarBD($conexion);
    header("Location: ../templates/torneo.php?id=$idTorneo");
  }

  
?>