<?php
require_once("../BackEnd/config.php");
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
    <title>Artículo</title>
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
                        <form>
                            <div class="wrap">
                                <input type="text">
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
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
                    <!--BUSCAR-->
                    <div class="sidebar-search-wrap">
                        <h6>Buscar</h6>
                        <form>
                            <div class="wrap">
                                <input type="text">
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
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
                            <a href="#">Grupo</a>
                            <a href="#">Soporte</a>
                            <a href="#">TFT</a>
                            <a href="#">Profesional</a>
                            <a href="#">LoL</a>
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
                            <div class="date"><a href="#">25 Sep 2016</a> Por <a href="#">Mason Carrington</a></div>
                            <div class="comment-quantity">3 Comentarios</div>
                        </div>
                        <div class="img-wrap">
                            <div class="bage highlight">highlight</div>
                            <img src="<?php echo $urlFE?>/images/vs_arena/news-list-img.jpg" alt="news-single">
                        </div>
                        <div class="post-text">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi quo excepturi fugit molestiae omnis harum consectetur reprehenderit numquam ipsam magnam molestias, autem possimus libero dolores magni, nisi totam dolorum odio? Next level paleo taxidermy, bespoke messenger bag leggings occupy food truck. <br>Hella pop-up flexitarian, semiotics migas humblebrag schlitz literally tofu deep v thundercats skateboard viral cornhole. Lomo knausgaard truffaut selfies flexitarian, tbh swag kickstarter gastropub mustache readymade artisan keffiyeh gochujang.</p>
                            <blockquote>
                                <p>Ogi farm-to-table migas vinyl, semiotics yuccie swag ugh helvetica 8-bit. Austin mustache man bun vice helvetica.</p>
                                <p class="name">Brandon Campbell</p>
                            </blockquote>
                            <p>Fixie four dollar toast meggings, 8-bit letterpress schlitz kale chips vexillologist yr venmo blog kitsch hammock affogato. Tbh kombucha typewriter pug, cliche ramps try-hard. Salvia enamel pin quinoa twee edison bulb, affogato typewriter unicorn cray asymmetrical. Scenester bitters kinfolk, small batch green juice cliche flexitarian poutine fixie cornhole dreamcatcher. Mustache irony pickled schlitz wayfarers tattooed. Kale chips roof party activated charcoal, paleo kogi affogato coloring book direct trade. Blue bottle dreamcatcher cardigan, bicycle rights live-edge shoreditch echo park sartorial deep v heirloom narwhal mumblecore.</p>
                            <!--TAGS-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tags">
                                        <a href="#">Lol</a>
                                        <a href="#">Esport</a>
                                        <a href="#">Gaming</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--AUTOR-->
                        <div class="author-box">
                            <div class="top">
                                <div class="avatar"><img src="<?php echo $urlFE?>/images/common/author-avatar.jpg" alt="author-avatar"></div>
                                <div class="info">
                                    <div class="name">Mason Carrington</div>
                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                                <div class="share-box">
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
                                </div>
                            </div>
                            <!--COMENTARIOS-->
                            <div class="comments-wrap">
                                <h4>Comentarios</h4>
                                <div class="comment-item">
                                    <div class="avatar"><img src="<?php echo $urlFE?>/images/common/user-avatar.jpg" alt="user-avatar"></div>
                                    <div class="info">
                                        <div class="date">
                                            <a href="#">25 Sep 2016</a> Por <a href="#">Ian Finch</a>
                                            <a href="#" class="quote">#</a>
                                        </div>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi quo excepturi fugit molestiae omnis harum consectetur reprehenderit numquam ipsam magnam molestias, autem possimus libero dolores magni, nisi totam dolorum odio?</p>
                                        <a href="#" class="reply">Responder</a>
                                    </div>
                                </div>
                                <!--COMENTARIO RESPUESTA-->
                                <div class="comment-item answer">
                                    <div class="avatar"><img src="<?php echo $urlFE?>/images/common/user-avatar.jpg" alt="user-avatar"></div>
                                    <div class="info">
                                        <div class="date">
                                            <a href="#">25 Sep 2016</a> Por <a href="#">Ian Finch</a>
                                            <a href="#" class="quote">#</a>
                                        </div>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi quo excepturi fugit molestiae omnis harum consectetur reprehenderit numquam ipsam magnam molestias, autem possimus libero dolores magni, nisi totam dolorum odio?</p>
                                        <a href="#" class="reply">Responder</a>
                                    </div>
                                </div>
                                <!--COMENTARIO-->
                                <div class="comment-item">
                                    <div class="avatar"><img src="<?php echo $urlFE?>/images/common/user-avatar.jpg" alt="user-avatar"></div>
                                    <div class="info">
                                        <div class="date">
                                            <a href="#">25 Sep 2016</a> Por <a href="#">Ian Finch</a>
                                            <a href="#" class="quote">#</a>
                                        </div>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi quo excepturi fugit molestiae omnis harum consectetur reprehenderit numquam ipsam magnam molestias, autem possimus libero dolores magni, nisi totam dolorum odio?</p>
                                        <a href="#" class="reply">Responder</a>
                                    </div>
                                </div>
                                <!--FORMULARIO-->
                                <div class="leave-comment-wrap">
                                    <h4>Dejar un comentario</h4>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="item">
                                                    <label>
                                                        <span>Nombre <i>*</i></span>
                                                        <input type="text" name="name" placeholder="Nombre">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="item">
                                                    <label>
                                                        <span>Correo <i>*</i></span>
                                                        <input type="email" name="email" placeholder="Correo">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="item">
                                                    <label>
                                                        <span>Tu comentario</span>
                                                        <textarea></textarea>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="comment-submit">Dejar comentario</button>
                                            </div>
                                        </div>
                                    </form>
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