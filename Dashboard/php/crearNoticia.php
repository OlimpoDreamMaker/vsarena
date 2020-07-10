<?php
  require_once("../../BackEnd/config.php");
  require_once("../../BackEnd/funciones.php");
  $conexion = conectar(); 

  $idAutor = $_GET['autor'];

  $carpeta = "imgNoticias";
  $titulo = $_POST['tituloNoticia'];
  $contenido = $_POST['contenidoNoticia'];
  $fecha = $_POST['fecha'];
  $fechaNoticia = soloFecha($fecha);
  $foto = $_FILES["foto"]["name"];
  $type = $_FILES["foto"]["type"];
  $origen = $_FILES["foto"]["tmp_name"];
  $destino = "../../imagenes/$carpeta/$foto";
  echo realpath("../../$carpeta/$foto");
  $tags = $_POST["tags"];
  if($type=="image/jpeg" OR $type=="image/jpg" OR $type=="image/png" OR $type=="image/gif"){
    echo move_uploaded_file($origen, $destino);
    $consulta = "INSERT INTO noticias(tituloNoticia,imgNoticia,contenidoNoticia,fechaNoticia,Usuarios_idUsuario) VALUES ('$titulo', '$foto', '$contenido', '$fechaNoticia','$idAutor')";
  }else{
    $consulta = "INSERT INTO noticias(tituloNoticia,contenidoNoticia,fechaNoticia,Usuarios_idUsuario) VALUES ('$titulo', '$contenido', '$fechaNoticia','$idAutor')";
  }
  mysqli_query($conexion, $consulta);   
  $rs = mysqli_query($conexion, "SELECT MAX(idNoticia) AS id FROM noticias");
  if ($row = mysqli_fetch_row($rs)) {
    $id = trim($row[0]);
  }else{
    $id = NULL;
  }
  if($id != NULL){
    for($i=0;$i<count($tags);$i++){
      $subconsulta = "INSERT INTO tags_has_noticias(Tags_idTag, Noticias_idNoticia)
                   VALUES ('$tags[$i]','$id')";
      mysqli_query($conexion, $subconsulta);   
    }
  }
  
  $desconectar = desconectar($conexion);
  header("Location: $amigable/panel/noticias/");
  //Mostrar Alerta de noticia creado
  
?>