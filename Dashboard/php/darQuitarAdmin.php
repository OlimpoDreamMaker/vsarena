<?php
  require_once("../../BackEnd/config.php");
  $conexion = conectar(); 
  $idUsuario = $_GET['id'];
  $selec = "SELECT * FROM usuarios WHERE idUsuario='$idUsuario'";
  $resultado = mysqli_query($conexion,$selec);
  $fila = mysqli_fetch_assoc($resultado);
  if($fila['isAdmin']==1){
    $newValor = 0;
  }else{
    $newValor = 1;
  }
  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "UPDATE usuarios SET 
                  isAdmin='$newValor'
                  WHERE idUsuario='$idUsuario";
    mysqli_query($conexion, $consulta);   
    header("Location: $amigable/panel/usuario/$idUsuario/");
    $desconectar = desconectar($conexion);
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    header("Location: $amigable/panel/usuario/$idUsuario/");
    $desconectar = desconectar($conexion);
  }

  //Mostrar Alerta de Juego modificado

?>