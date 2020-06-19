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
   <title>Contáctanos</title>
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
                        <li><a href="index.php">Inicio</a>/</li>
                        <li>Contáctanos</li>
                     </ul>
                     <h1>Contáctanos</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--CATEGORIA END-->
   <!--CONTACT WRAP BEGIN-->
   <section class="contacts-wrap">
      <div class="container">
         <div class="row">
            <!--DATOS START-->
            <div class="col-md-5">
               <h4>Sobre nosotros</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in dolor sit amet risus efficitur elementum eu et diam. Pellentesque maximus interdum massa ut commodo. Nam lacus lacus, aliquam vel justo sed, lobortis accumsan sapien. In congue tortor arcu, sed</p>
               <div class="contact-office-img">
                  <img class="img-responsive" src="images/vs_arena/contact-office-img.jpg" alt="contact-office-img">
               </div>
               <ul class="contact-list">
                  <li><i class="fa fa-flag" aria-hidden="true"></i><span>276 Upper Parliament Street, Liverpool L8, Great Britain</span></li>
                  <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:team@email.com">team@email.com</a></li>
                  <li class="phone"><i class="fa fa-phone" aria-hidden="true"></i><span>+61 3 8376 6284</span></li>
               </ul>
               <ul class="contact-bar">
                  <li class="facebook"><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                  <li class="twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li class="google"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  <li class="pinterest"><a href="#"><i class="fa fa-twitch" aria-hidden="true"></i></a></li>
               </ul>
            </div>
            <!--DATOS END-->
            <!--FORMULARIO START-->
            <div class="col-md-7">
               <h4>Contacto</h4>
               <div class="leave-comment-wrap">
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
                                 <input type="email" name="email" placeholder="correo@correo.com">
                              </label>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="item">
                              <label>
                                 <span>Motivo <i>*</i></span>
                                 <input type="text" name="subjects" placeholder="Cuentanos tu motivo">
                              </label>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="item">
                              <label>
                                 <span>Tu mensaje<i>*</i></span>
                                 <textarea></textarea>
                              </label>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <button class="comment-submit">Enviar</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <!--FORMULARIO END-->
         </div>
      </div>
   </section>
   <!--CONTACT WRAP END-->
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