<?php

  function permisos($conexion,$id){
    if(!isAdmin($conexion,$id)){
      return false;
    }else{
      return true;
    }
  }

  function isAdmin($conexion,$id){
    $consulta = "SELECT * FROM usuarios WHERE idUsuario='$id'";
    $resultado = mysqli_query($conexion, $consulta);
    $user = mysqli_fetch_assoc($resultado);
    if($user['isAdmin'] ==  1){
      return true;
    }else{
      return false;
    }
  }

?>