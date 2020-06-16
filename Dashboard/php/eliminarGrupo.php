<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idGrupo = $_GET['idGrupo']; //Se recibe el ID del grupo a eliminar

  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM grupos WHERE idGrupo='$idGrupo'";
    mysqli_query($conexion, $consulta);   
    $desconectar = desconectarBD($conexion);
    header("Location: ../templates/torneos.php");
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    $desconectar = desconectarBD($conexion);
    header("Location: ../templates/grupo.php?id=$idGrupo");
  }
  
?>