<?php

function dataUser($conexion, $id){
  $consulta = "SELECT * FROM usuarios WHERE idUsuario='$id'";
  $resultado = mysqli_query($conexion,$consulta);
  $data = mysqli_fetch_assoc($resultado);
  $user = array("usuario" => $data['usuario'],
                "email"=>$data['emailUsuario'],
                "avatar"=>$data['avatarUsuario'],
                "saldoEfectivo"=>$data['saldoEfectivo'],
                "saldoMonVir"=>$data['saldoMonVir']);
  // var_dump($user);
  return $user;
}

?>