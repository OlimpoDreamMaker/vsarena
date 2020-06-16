<?php
require_once("conexionBD.php");
require_once("tomarFecha.php");
$conexion = conectar(); 
$idTag = $_GET['id'];
$selec = "SELECT * FROM tags WHERE idTag='$idTag'";
$resultado = mysqli_query($conexion,$selec);
$fila = mysqli_fetch_assoc($resultado);
if(isset($_POST['tag']) && $_POST['tag']!=''){
  $tag = $_POST['tag'];
}else{
  $tag = $fila['tag'];
}
$consulta = "UPDATE tags SET tag='$tag' WHERE idTag='$idTag'";
mysqli_query($conexion,$consulta);

$desconectar = desconectarBD($conexion);
?>