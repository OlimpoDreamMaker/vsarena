<?php
  require_once("../../BackEnd/config.php");
  require_once("../../BackEnd/funciones.php");
  
  $conexion = conectar(); 
  $idNoticia = $_GET['id'];

  $carpeta = "imgNoticias";
  $consulta = "SELECT * FROM noticias WHERE idNoticia='$idNoticia'";
  $resultado = mysqli_query($conexion,$consulta);
  $fila = mysqli_fetch_assoc($resultado);
  if(isset($_POST['tituloNoticia'])){
    $titulo = $_POST['tituloNoticia'];
  }else{
    $titulo = $fila['tituloNoticia'];
  }
  if(isset($_POST['contenidoNoticia'])){
    $contenido = $_POST['contenidoNoticia'];
  }else{
    $contenido = $fila['contenidoNoticia'];
  }
  echo "<br>$contenido";
  if(isset($_POST['fecha'])){
    $fecha = soloFecha($_POST['fecha']);
  }else{
    $fecha = $fila['fechaNoticia'];
  }
  if(isset($_FILES['foto']['name'])){
    $foto = $_FILES['foto']['name'];
    $type = $_FILES["foto"]["type"];
    $origen = $_FILES["foto"]["tmp_name"]; 
    $destino = "../../$carpeta/$foto";
    if($type=="image/jpeg" OR $type=="image/jpg" OR $type=="image/png" OR $type=="image/gif"){
      move_uploaded_file($origen, $destino);
      $consulta = "UPDATE noticias SET 
                  tituloNoticia='$titulo', 
                  contenidoNoticia='$contenido',
                  fechaNoticia='$fecha',
                  imgNoticia='$foto'
                  WHERE idNoticia='$idNoticia'";
    }else{
      $consulta = "UPDATE noticias SET 
                  tituloNoticia='$titulo', 
                  contenidoNoticia='$contenido',
                  fechaNoticia='$fecha'
                  WHERE idNoticia='$idNoticia'";
    }
  }else{
    $consulta =  "UPDATE noticias SET 
                  tituloNoticia='$titulo', 
                  contenidoNoticia='$contenido',
                  fechaNoticia='$fecha'
                  WHERE idNoticia='$idNoticia'";
  }
  mysqli_query($conexion,$consulta);
  $tagsPost = $_POST["tags"];
  $obteniendoTags = array();
  $subconsulta = "SELECT * 
                  FROM tags_has_noticias h, tags t
                  WHERE h.Noticias_idNoticia='$idNoticia'
                  AND h.Tags_idTag=t.idTag";
  
  if($subResultado = mysqli_query($conexion, $subconsulta)){
    while($subFila = mysqli_fetch_assoc($subResultado)){
      $obteniendoTags[] = $subFila['idTag'];
      echo "<br>".$subFila['idTag'];
    }
  }
  $agregar = array();
  $eliminar = array();
  if(count($tagsPost) == 0 || $tagsPost == NULL || $tagsPost == ''){
    if(count($obteniendoTags) > 0){
      for($i=0; $i<count($obteniendoTags) ; $i++){
        $eliminarsql = "DELETE FROM tags_has_noticias 
                        WHERE Tags_idTag='$obteniendoTags[$i]'
                        AND Noticias_idNoticia='$idNoticia'";
        mysqli_query($conexion,$eliminarsql);
      }
    }
  }else if(count($tagsPost)>0) {
    for($i=0; $i<count($tagsPost) ; $i++){
      $existe = 0;
      for($j=0; $j<count($obteniendoTags) ; $j++){
        if($tagsPost[$i]==$obteniendoTags[$j]){
          $existe = 1;
        }
      }
      if($existe == 0){
        $agregar[] = $tagsPost[$i];
      }
    }
    for($i=0; $i<count($obteniendoTags) ; $i++){
      $existe = 0;
      for($j=0; $j<count($tagsPost) ; $j++){
        if($tagsPost[$j] == $obteniendoTags[$i]){
          $existe = 1;
        }
      }
      if($existe == 0){
        $eliminar[] = $obteniendoTags[$i];
      }
    }
    if(count($agregar)>0){
      for($i=0; $i<count($agregar) ; $i++){
        $agregarsql = "INSERT INTO tags_has_noticias(Tags_idTag,Noticias_idNoticia)
                    VALUES ('$agregar[$i]','$idNoticia')";
        mysqli_query($conexion,$agregarsql);
      }
    }
    if(count($eliminar)>0){
      for($i=0; $i<count($eliminar) ; $i++){
        $eliminarsql = "DELETE FROM tags_has_noticias 
                        WHERE Tags_idTag='$eliminar[$i]'
                        AND Noticias_idNoticia='$idNoticia'";
        mysqli_query($conexion,$eliminarsql);
      }
    }
  }
  echo "<br>TAGS INPUT</hr>";
  var_dump($tagsPost);
  echo "<br>TAGS NOTICIAS</hr>";
  var_dump($obteniendoTags);
  $desconectar = desconectar($conexion);
  header("Location: $amigable/panel/noticia/$idNoticia/");
  //Mostrar Alerta de Noticia modificado

?>