
## Tareas/Ideas
- Crear alert o ventalla pop que salte al creearse un producto
- Crear alert o ventalla pop que salte al creearse un cupon
- crear alert cuando se modifique,cree o elimine algo
- Sacar el eliminar juego desde la pantalla juegos
- a la hora de eliminar algo, se pide una cuenta, verificar si es admin(usar funcionIsAdmin)
- al eliminar un juego redireccionar a juegos
- Crear el formulario de "Crear Cupon" en tiendas
- Crear tabla cupones en tiendas
- Crear pagina individual para Cupon con modificar cupon y eliminar cupon
- En pagina Cupon mostrar quienes tienen ese cupon
- En tabla usuario de pagina usuario, modificar y dar admin o no
- archivo modifiar Juego modificar mysqli_query($conexion, $consulta) por mysqli_query($conexion, $select)
- hacer funcion para que el estado del cupon se actualice solo con la fecha
- a la hora de eliminar algo enviar el id por get
- mostrar el nombre del cupon en la tabla individual
- AGREGAR USUARIO MANUAL A UN TORNEO DESDE EL DASHBOARD
- monedass virtuales como premio y efectivo
- cambiar ganador de premio
- venta agregar nombre usuario 
- descripcion autor
- mercado pago 
.htaccess
Options +FollowSymLinks
RewriteEngine on

RewriteRule ^blog/([0-9]+)$ templates/blog.php?id=$1

RewriteRule ^cupon/([0-9]+)$ templates/cupon.php?id=$1
RewriteRule ^equipo/([0-9]+)$ templates/equipo.php?id=$1
RewriteRule ^grupo/([0-9]+)$ templates/grupo.php?id=$1
RewriteRule ^juego/([0-9]+)$ templates/juego.php?id=$1
RewriteRule ^juegos/$ templates/juegos.php
RewriteRule ^noticia/([0-9]+)$ templates/noticia.php?id=$1
RewriteRule ^noticias/$ templates/noticias.php
RewriteRule ^premio/([0-9]+)$ templates/premio.php?id=$1
RewriteRule ^producto/([0-9]+)$ templates/producto.php?id=$1
RewriteRule ^rondas/([0-9]+)$ templates/rondas.php?id=$1
RewriteRule ^tag/([0-9]+)$ templates/tag.php?id=$1
RewriteRule ^tienda/$ templates/tienda.php
RewriteRule ^torneo/([0-9]+)$ templates/torneo.php?id=$1
RewriteRule ^torneos/$ templates/torneos.php
RewriteRule ^usuario/([0-9]+)$ templates/usuario.php?id=$1
RewriteRule ^usuarios/$ templates/usuarios.php
RewriteRule ^venta-compra/([0-9]+)$ templates/venta-compra.php?id=$1