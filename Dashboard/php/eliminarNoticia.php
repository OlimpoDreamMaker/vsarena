<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idNoticia = $_GET['id']; //Se recibe el ID de la noticia a eliminar
  $autor = $_GET['autor'];
  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  
  if($resultado = mysqli_query($conexion, $consulta)){
    
    //Borrando relacion tags
    $tags = "DELETE FROM tags_has_noticias WHERE Noticias_idNoticia='$idNoticia'";
    mysqli_query($conexion, $tags);

    $subconsulta = "DELETE FROM noticias WHERE idNoticia='$idNoticia' AND Usuarios_idUsuario='$autor'";
    mysqli_query($conexion, $subconsulta);   
    
    header("Location: ../templates/noticias.php");
  }else{
    echo "<br>Entre a el ELSE</hr>";
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    //header("Location ../templates/noticia.php?id=$idNoticia");
  }
  //Agregar modal o alert q avise q se elmino la noticia
  
  
  $desconectar = desconectarBD($conexion);
  
?>