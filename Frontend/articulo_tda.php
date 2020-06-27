<?php
require_once("../BackEnd/config.php");
require_once("../BackEnd/funciones.php");
$conexion = conectar();
if(!isset($_GET['noticia']) AND $_GET['noticia'] == NULL){
  header("Location: $amigable/noticias");
}
$idNoticia = $_GET['noticia'];
$consulta =  "SELECT * FROM noticias n, usuarios u 
              WHERE n.idNoticia='$idNoticia' 
              AND n.Usuarios_idUsuario=u.idUsuario";
$resultado = mysqli_query($conexion, $consulta);
$noticia = mysqli_fetch_assoc($resultado);
$tituloNoticia = $noticia['tituloNoticia'];
$imgNoticia = $noticia['imgNoticia'];
$contenidoNoticia = $noticia['contenidoNoticia'];
$fechaNoticia = $noticia['fechaNoticia'];
$idUsuario = $noticia['idUsuario'];
$usuario = $noticia['usuario'];
$avatarUsuario = $noticia['avatarUsuario'];
$descripcionAutor = $noticia['descripcionAdmin'];
desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!--START ROBOTS-->
    <?php
    include('estructura/robots.php');

    ?>
    <!--END ROBOTS-->
    <!--START METAS GLOBALES-->
    <?php
    include('estructura/global_meta.php');

    ?>
    <!--END METAS GLOBALES-->
    <!--START FUENTES-->
    <?php
    include('estructura/global_fuentes.php');

    ?>
    <!--END FUENTES-->
    <!--START HOJAS-->
    <?php
    include('estructura/global_hojas.php');

    ?>
    <!--END HOJAS-->
    <!--START METAS LOCALES-->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--END METAS LOCALES-->
    <!--START TITULO-->
    <title>Artículo <?php echo $tituloNoticia;?></title>
    <!--END TITULO-->
</head>

<body>
    <!--PRELOADER START-->
    <?php
    include('estructura/preloader.php');

    ?>
    <!--PRELOADER END-->
    <!--NAV START-->
    <?php
    include('estructura/barra_navegacion.php');

    ?>
    <!--NAV END-->
    <!--CUERPO ARTICULO START-->
    <div class="content">
        <div class="container">
            <div class="row row-offcanvas row-offcanvas-left">
                <!--SIDEBAR MENU START-->
                <section class="sidebar col-xs-6 col-sm-6 col-md-3 sidebar-offcanvas" id="sidebar">
                    <!--CATEGORIAS-->
                    <div class="sidebar-menu-wrap">
                        <h6>Categoria</h6>
                        <ul class="categories-list">
                            <li>
                                <a href="#"><span class="count">4</span>Nuevas</a>
                            </li>
                            <li>
                                <a href="#"><span class="count">22</span>Competiciones y Entrevistas</a>
                                <ul>
                                    <li><a href="#"><span class="count">12</span>Nuevas</a></li>
                                    <li><a href="#"><span class="count">10</span>Competiciones</a></li>
                                    <li><a href="#"><span class="count">9</span>Entrevistas</a></li>
                                    <li><a href="#"><span class="count">8</span>Mejores momentos</a></li>
                                    <li><a href="#"><span class="count">7</span>Otras</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="count">4</span>Competiciones</a>
                            </li>
                            <li>
                                <a href="#"><span class="count">4</span>Mejores momentos</a>
                            </li>
                            <li>
                                <a href="#"><span class="count">4</span>Otras</a>
                            </li>
                        </ul>
                    </div>
                    <!--BUSCAR-->
                    <div class="sidebar-search-wrap">
                        <h6>Buscar</h6>
                        <form action="<?php echo $amigable;?>/buscar" method="POST">
                            <div class="wrap">
                                <input type="text" name="buscar">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                    <!--CALENDARIO-->
                    <div class="sidebar-calendar">
                        <h6>Calendario</h6>
                        <div class="widget widget_calendar">
                            <div id="calendar_wrap" class="calendar_wrap">
                                <table id="wp-calendar">
                                    <caption>Mayo 2020</caption>
                                    <thead>
                                        <tr>
                                            <th scope="col" title="Domingo">Do</th>
                                            <th scope="col" title="Lunes">Lu</th>
                                            <th scope="col" title="Martes">Ma</th>
                                            <th scope="col" title="Miercoles">Mi</th>
                                            <th scope="col" title="Jueves">Ju</th>
                                            <th scope="col" title="Viernes">Vi</th>
                                            <th scope="col" title="Sabado">Sa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2" class="pad"> </td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>
                                                <a href="#calendar" aria-label="Noticia publicada el dia 9, 2020">9</a>
                                            </td>
                                            <td>
                                                <a href="#calendar" aria-label="Noticia publicada el dia 10, 2020">10</a>
                                            </td>
                                            <td>11</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td>28</td>
                                            <td class="pad" colspan="5"> </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" id="prev" class="pad">Abril</td>
                                            <td class="pad"> </td>
                                            <td colspan="3" id="next" class="pad">Junio</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--NOTICIAS RECIENTES-->
                    <div class="recent-news">
                        <h6>Noticias recientes</h6>
                        <div class="item">
                            <div class="date"><a href="<?php echo $amigable;?>/articulo">25 Sep 2016</a> EN <a  href="<?php echo $amigable;?>/articulo">Destacados</a></div>
                            <a  href="<?php echo $amigable;?>/articulo" class="name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam maxime ratione magni quam! Ea cupiditate blanditiis voluptatum non possimus neque! Enim accusantium eum eveniet laborum laboriosam, voluptatem quis beatae rem. </a>
                        </div>
                        <div class="item">
                            <div class="date"><a  href="<?php echo $amigable;?>/articulo">25 Sep 2016</a> EN <a  href="<?php echo $amigable;?>/articulo">Destacados</a></div>
                            <a  href="<?php echo $amigable;?>/articulo" class="name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam maxime ratione magni quam! Ea cupiditate blanditiis voluptatum non possimus neque! Enim accusantium eum eveniet laborum laboriosam, voluptatem quis beatae rem. </a>
                        </div>
                        <div class="item">
                            <div class="date"><a  href="<?php echo $amigable;?>/articulo">25 Sep 2016</a> EN <a  href="<?php echo $amigable;?>/articulo">Destacados</a></div>
                            <a  href="<?php echo $amigable;?>/articulo" class="name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam maxime ratione magni quam! Ea cupiditate blanditiis voluptatum non possimus neque! Enim accusantium eum eveniet laborum laboriosam, voluptatem quis beatae rem. </a>
                        </div>
                    </div>
                    <!--TAGS-->
                    <div class="sidebar-tags-wrap">
                        <h6>Tags</h6>
                        <div class="tags">
                            <?php
                            $conexion = conectar();
                            tagsNots($conexion,$amigable);
                            desconectar($conexion);
                            ?>
                        </div>
                    </div>
                </section>
                <!--SIDEBAR MENU END-->
                <!--SECCION NOTICIAS-->
                <section class="news-single col-xs-12 col-sm-12 col-md-9">
                    <!--BOTON LATERAL NOTICIAS-->
                    <p class="hidden-md hidden-lg">
                        <button type="button" class="btn sidebar-btn" data-toggle="offcanvas" title="Toggle sidebar">sidebar</button>
                    </p>
                    <!--NOTICIA START-->
                    <div class="item">
                        <!--NOTICIA-->
                        <div class="top-info">
                            <div class="date">
                                <a href="#"><?php echo fechaTexto($fechaNoticia);?></a> Por <a href="#"><?php echo $usuario;?></a>
                            </div>
                            <div class="comment-quantity">
                            <?php 
                            $conexion = conectar();
                            echo cantidadComenNoticias($conexion,$idNoticia)." Comentarios";
                            desconectar($conexion); 
                            ?>
                            </div>
                        </div>
                        <div class="img-wrap">
                            <!-- <div class="bage highlight">highlight</div> -->
                            <img src="<?php echo $imagenes;?>/imgNoticias/<?php echo $imgNoticia;?>" alt="news-single">
                        </div>
                        <div class="post-text">
                            <?php
                            echo $contenidoNoticia;
                            ?>
                            <!-- Ejemplo de blockquote -->
                            <!--blockquote>
                                <p>Ogi farm-to-table migas vinyl, semiotics yuccie swag ugh helvetica 8-bit. Austin mustache man bun vice helvetica.</p>
                                <p class="name">Brandon Campbell</p>
                            </blockquote-->
                            <!--TAGS-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tags">
                                        <?php
                                        $conexion = conectar();
                                        tagsNot($conexion,$idNoticia,$amigable);
                                        desconectar($conexion);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--AUTOR-->
                        <div class="author-box">
                            <div class="top">
                                <div class="avatar"><img src="<?php echo $imagenes?>/avatarUser/<?php echo $avatarUsuario;?>" alt="author-avatar"></div>
                                <div class="info">
                                    <div class="name"><?php echo $usuario;?></div>
                                    <?php
                                    if($descripcionAutor!=NULL){
                                    echo "<p>$descripcionAutor</p>";
                                    }
                                    ?>
                                </div>
                                <!-- <div class="share-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="title">25 posts</div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 text-right">
                                                        <ul class="share-socials">
                                                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitch" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!--COMENTARIOS-->
                            <div class="comments-wrap">
                                <h4>Comentarios</h4>
                                <?php
                                $conexion = conectar();
                                comentariosNot($conexion,$idNoticia,$imagenes);
                                desconectar($conexion);
                                ?>
                                <!--COMENTARIO RESPUESTA-->
                                <!--div class="comment-item answer">
                                    <div class="avatar"><img src="<?php echo $urlFE?>/images/common/user-avatar.jpg" alt="user-avatar"></div>
                                    <div class="info">
                                        <div class="date">
                                            <a href="#">25 Sep 2016</a> Por <a href="#">Ian Finch</a>
                                            <a href="#" class="quote">#</a>
                                        </div>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi quo excepturi fugit molestiae omnis harum consectetur reprehenderit numquam ipsam magnam molestias, autem possimus libero dolores magni, nisi totam dolorum odio?</p>
                                        <a href="#" class="reply">Responder</a>
                                    </div>
                                </div-->
                                <!--COMENTARIO-->
                                <!-- <div class="comment-item">
                                    <div class="avatar"><img src="<?php echo $urlFE?>/images/common/user-avatar.jpg" alt="user-avatar"></div>
                                    <div class="info">
                                        <div class="date">
                                            <a href="#">25 Sep 2016</a> Por <a href="#">Ian Finch</a>
                                            <a href="#" class="quote">#</a>
                                        </div>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi quo excepturi fugit molestiae omnis harum consectetur reprehenderit numquam ipsam magnam molestias, autem possimus libero dolores magni, nisi totam dolorum odio?</p>
                                        <a href="#" class="reply">Responder</a>
                                    </div>
                                </div> -->
                                <!--FORMULARIO-->
                                <div class="leave-comment-wrap">
                                    <h4>Dejar un comentario</h4>
                                    <form method ="POST" action="<?php echo $urlBE;?>/comentar.php?noticia=<?php echo $idNoticia;?>">
                                        <div class="row">
                                            <?php
                                            if(!isset($_SESSION['usuario'])){
                                            ?>
                                                <div class="col-md-6">
                                                    <div class="item">
                                                        <label>
                                                            <span>Nombre <i>*</i></span>
                                                            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="item">
                                                        <label>
                                                            <span>Correo <i>*</i></span>
                                                            <input type="email" name="email" id="email" placeholder="Correo">
                                                        </label>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <div class="col-md-12">
                                                <div class="item">
                                                    <label>
                                                        <span>Tu comentario</span>
                                                        <textarea name="comentario" id="comentario"></textarea>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="comment-submit" type="submit">Dejar comentario</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--NOTICIA END-->
                </section>
                <!--SECCION NOTICIAS END-->
            </div>
        </div>
    </div>
    <!--CUERPO ARTICULO END-->
    <!--START FOOTER-->
    <?php
    include('estructura/footer.php');

    ?>
    <!--END FOOTER-->
    <!--START SCRIPTS-->
    <?php
    include('estructura/scripts.php');

    ?>
    <!--END SCRIPTS-->
</body>

</html>