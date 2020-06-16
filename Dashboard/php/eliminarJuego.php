<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idJuego = $_POST['idJuego']; //Se recibe el ID del juego a eliminar
  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM Juegos WHERE idJuego='$idJuego'";
    mysqli_query($conexion, $consulta);   
    header("../templates/juego.php?id=$idJuego");
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    header("../templates/juego.php?id=$idJuego");
  }
  
  
  $desconectar = desconectarBD($conexion);
  
?>