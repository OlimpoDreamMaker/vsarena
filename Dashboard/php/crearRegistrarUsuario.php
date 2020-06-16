<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $carpeta = "avatarUser";
  $usuario = $_POST['usuario'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $foto = $_FILES["foto"]["name"];
  $type = $_FILES["foto"]["type"];
  $origen = $_FILES["foto"]["tmp_name"]; 
  $destino = "../../$carpeta/$foto";
  //por defecto todos los registrados no tendran permiso de admin (obvio.) 
  //por defecto todos los registrados tendran el cupon 1 que es el "Sin cupon"
  if($type=="image/jpeg" OR $type=="image/jpg" OR $type=="image/png" OR type=="image/gif"){
    move_uploaded_file($origen, $destino);
    $consulta = "INSERT INTO usuarios(usuario,emailUsuario,passUsuario,avatarUsuario,saldoEfectivo,saldoMonVir,isAdmin,Cupones_idCupon) VALUES ('$usuario', '$email', '$pass', '$foto', '0', '0','0','1')";
  }else{
    $consulta = "INSERT INTO usuarios(usuario,emailUsuario,passUsuario,saldoEfectivo,saldoMonVir,isAdmin,Cupones_idCupon) VALUES ('$usuario', '$email', '$pass', '0', '0','0','1')";
  }
  //FALTA ARMAR EN CASO DE QUE ELIGA UN AVATAR DE LA GALERIA DE AVATARS POR DEFECTO

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  //LLevar a inicio de la web
  
?>