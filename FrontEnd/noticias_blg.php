<?php
require_once("../BackEnd/config.php");
require_once("../BackEnd/funciones.php");
if(empty($_GET['pagina'])){
    $pagina = 1;
}else{
    $pagina = $_GET['pagina'];
}
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
    <title>Noticias</title>
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
    <!--CATEGORIA START-->
    <section class="image-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <div class="wrap">
                            <ul class="breadcrumbs">
                                <li><a href="<?php echo $amigable;?>/">Inicio</a>/</li>
                                <li>Noticias</li>
                            </ul>
                            <h1>Noticias</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CATEGORIA END-->
    <!--NOTICIAS CUERPO START-->
    <div class="content">
        <div class="container">
            <div class="row row-offcanvas row-offcanvas-left">
                <!--SIDEBAR START-->
                <section class="sidebar col-xs-6 col-md-3 sidebar-offcanvas" id="sidebar">
                    <!--CATEGORIAS-->
                    <div class="sidebar-menu-wrap">
                        <h6>Categoria</h6>
                        <ul class="categories-list">
                            <!--CATE-->
                            <li>
                                <a href="#"><span class="count">4</span>Nuevas</a>
                            </li>
                            <!--CATE-->
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
                            <!--CATE-->
                            <li>
                                <a href="#"><span class="count">4</span>Competiciones</a>
                            </li>
                            <!--CATE-->
                            <li>
                                <a href="#"><span class="count">4</span>Mejores momentos</a>
                            </li>
                            <!--CATE-->
                            <li>
                                <a href="#"><span class="count">4</span>Otras</a>
                            </li>
                        </ul>
                    </div>
                    <!--BUSCADOR-->
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
                                            <td>16</td>p
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
                <!--SIEDEBAR END-->
                <!--SECCION ARTICULOS START-->
                <div class="news-list col-xs-12 col-md-9">
                    <!--BOTON MENU LATERAL-->
                    <p class="hidden-md hidden-lg">
                        <button type="button" class="btn sidebar-btn" data-toggle="offcanvas" title="Toggle sidebar">MENÚ</button>
                    </p>
                    <?php
                    $conexion = conectar();
                    $destacada = noticiaDestacada($conexion);
                    $consultaDestacada = "SELECT * FROM noticias n, usuarios u 
                                          WHERE n.idNoticia='$destacada'
                                          AND u.idUsuario=n.Usuarios_idUsuario";
                    $rs = mysqli_query($conexion,$consultaDestacada);
                    $fila = mysqli_fetch_assoc($rs);
                    $idnoticia_destacada= $fila['idNoticia'];
                    $img_destacada= $fila['imgNoticia'];
                    $titulo_destacada = $fila['tituloNoticia'];
                    $fecha_destacada = $fila['fechaNoticia'];
                    $usuario_destacada = $fila['usuario'];
                    $idusuario_destacada = $fila['idUsuario'];
                    ?>
                    <!--ARTICULO DESTACADO-->
                    <div class="item img-top">
                        <div class="img-wrap">
                            <div class="bage"><a href=<?php echo $amigable."/articulo/".$idnoticia_destacada."/";?>>Destacado</a></div>
                            <a href=<?php echo $amigable."/articulo/".$idnoticia_destacada."/";?>><img src="<?php echo $imagenes;?>/imgNoticias/<?php echo $img_destacada;?>" alt="post image"></a>
                        </div>
                        <div class="info">
                            <!-- <a href=php echo "".$amigable."/articulo/".$idnoticia_destacada."/";?> class="name" id="top_name">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a> -->
                            <div class="wrap">
                                <a href=<?php echo $amigable."/articulo/".$idnoticia_destacada."/";?>><?php echo fechaTexto($fecha_destacada);?></a> Por <a href=<?php echo $amigable."/perfil/".$idusuario_destacada."/";?>><?php echo $usuario_destacada?></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <?php
                    noticiasFE($conexion,$amigable,$imagenes,$destacada,$pagina);
                    ?>
                    <!--ARTICULO-->
                    <div class="item">
                        <div class="info">
                            <a href="#" class="name">FORMATO DE NOTICIA - Solo Texto</a>
                            <div class="wrap">
                                <a href="#">10 may 2020</a> Por <a href="#">Vs Arena Admin</a>
                            </div>
                            <div class="comment-quantity">3 Comentarios</div>
                            <div class="clear"></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae et doloremque necessitatibus reiciendis accusantium alias quas deleniti maxime expedita, quae eligendi, dolores temporibus quasi, amet id non! Quas, temporibus? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam repellat sapiente impedit ad totam, dicta libero fuga mollitia beatae explicabo quasi, eaque ipsum rerum amet perferendis repellendus? Rerum, harum consequatur?.</p>
                            <a href="#" class="continue">LEER MÁS</a>
                        </div>
                    </div>
                    <!--PAGINACION-->
                    <div class="pagination-wrap">
                        <ul class="pagination">
                            <?php
                            paginador($conexion,$pagina,$amigable,"","");
                            desconectar($conexion);
                            ?>
                        </ul>
                    </div>
                </div>
                <!--SECCION ARTICULOS END-->
            </div>
        </div>
    </div>
    <!--NOTICIAS CUERPO END-->
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