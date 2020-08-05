# Dashboard

## php
- advertenciaUsuario.php envia un email a un usuario q tomo el id por get (no en uso)
- armarGrupo.php deberia crear los enfrentamientos de un grupo solo ingresando los equipos pero no lo hace
- cancelar Torneo, cambia es tado del torneo a 'Cancelado'
- crearCupon.php Funcionando
- crearGrupo.php Funcionando
- crearJuego.php Funcionando
- crearNoticia.php Funcionando
- crearPremios.php Funcionando
- crearProductos.php Funcionando
- crearRonda.php Funcionando
- crearTag.php Funcionando
- crearTorneo.php Funcionando
- crearUsuario.php Funcionando pero no es necesario fue usado para pruebas, innecesario
- crearVenta.php Nunca se probo, tiene algunos comentariso que espero que puedan servir
- darQuitarAdmin.php da o quita admin, recuerden que habra distintos tipos de admin, el atribuso isAdmin es un int que si tiene 0 no es admin y si tiene 1 es admin
- eliminarComentario.php Funcionando
- eliminarCupon.php Funcionando
- eliminarEquipo.php Funcionando
- eliminarGrupo.php Funcionando
- eliminarJuego.php Funcionando
- eliminarNoticia.php falta hacer que se eliminen los comentarios q tiene dicha noticia
- eliminarPremio.php Funcionando
- eliminarProducto.php falta hacer que se eliminen los comentarios q tiene dicha producto y q no se rompan las ventas realizadas (recomendacion, no eliminar productos y agregar un atributo q sea visible o no visible)
- eliminarRonda.php Funcionando 
- eliminarTag.php verificar que se elimine la relacion con las noticias 
- eliminarTorneo.php verificar que se elimine los premios, enfrentamientos, rondas y grupos
- eliminarUsuario.php verificar sus compras, los equipos/torneos en los q participo y si escribio algun comentario
- emailUsuario.php configurar, agregar email de usuario con el id q toma y configurar el email de salida
- emailUsuarios.php configurar, agregar emails de usuarios y configurar el email de salida
- estadoTorneo.php no funciona bien, lo ideal es q se actualice el estado en automatio, no funciona bien
- modificarCupon.php no recuerdo si funciona bien o no
- modificarGrupo.php solo modifica el nombre del grupo
- modificarJuego.php no recuerdo si funciona bien o no
- modificarNoticia.php no recuerdo si funciona bien o no
- modificarPremio.php no recuerdo si funciona bien o no
- modificarProducto.php no recuerdo si funciona bien o no
- modificarRonda.php no recuerdo si funciona bien o no
- modificarTag.php no recuerdo si funciona bien o no
- modificarTorneo.php no recuerdo si funciona bien o no


## Tener en cuenta del dashboard
- las fechas de rango(cuando seleccionas una fecha de inicio y otra de fin) son manejadas con dos funciones que las desconcatena y luego las agrega a la base
- LINK DE LA PLANTILLA DE DASHBOARD https://github.com/ColorlibHQ/AdminLTE

## ¿Que no funciona y q falta?
- El buscador
- Enviar Advertencias
- Enivar email(se creo el script pero no se los probo)
- Mostrar los equipos en los que esta el usuario
- Mostrar las compras que realizo el usuario
- Mostrar los torneos en los que esta/estuvo el usuario
- Mostrar las compras que realizo el usuario
- Cancelar o reembolsar una compra
- Logica de los torneos tomando datos de las api de los videojuegos
- Creacion automatica de los grupos del torneo
- Modificar enfrentamientos
- creacion de un grupo y sus enfrentamientos correspondientes (lo mismo para las rondas)
- Descalificar equipo

# Pagina principal
- Iniciar sesion(esta hecho  el script login pero no verifico nunca si inicio sesion o no )


## ¿Que hay?
- enlaces amigables
- comentar usuario no registrado/registrado(probar para un usuario registrado, un no registrado si funciono) dejando su email y su nombre BackEnd/comentar.php
- validar email usuario que se registra(aun no se probro aqui esta el email por defecto q se enviara) BackEnd/validarEmailUsuario.php
- buscar noticias por autor, titulo o contenido, falta por fecha
- seleccionar una de los tags del aside hace q solo se muestren las noticias con ese tag
- crear equipo, falta probar
- editar perfil, falta probar

# Carpeta BackEnd

## Funciones en el archivo BackEnd/funciones.php
- cantidad de compras que hizo un usuario
- cantidad de cupones
- cantidad de juegos totales
- cantidad de inscriptos torneo(no se probo)
- cantidad de noticias totales
- cantidad de productos totales
- cantidad de torneos totales
- cantidad de torneos activos
- cantidad de torneos cancelados
- cantidad de torneos concluidos
- cantidad de usuarios registrados totales
- cantidad de ventas totales
- es Admin?
- primera fecha (desconcatena la fecha de rango y toma la primera fecha)
- segunda fecha (desconcatena la fecha de rango y toma la segunda fecha)
- solo fecha (ordena el input fecha para subirla a la base)
- data user, devuelte los datos de un usuario
- logout, cierra sesion pero hay q poner el enlace amigable a home
- ingresos totales, devuelve la suma de todas las ventas
- existe usuario, se lo usa para no registrar a alguien con un nick ya existente(no se lo implemento)
- existe email, se lo usa para no registrar a alguien con un email ya existente(no se lo implemento)
- verificar que el archivo q se subio es una img
- noticia destacada, devuelve el id de la noticia con mas comentarios
- noticiasFE, noticias resumidas
- tagsNot, tags de una noticia en particular
- tagsNots, todos los tags, se muestra en el aside del FrontEnd
- comentariosNot, muestra los comentarios de una noticia determinada
- cantidadComenNoticias, cantidad de comentarios de una noticia
- fechaTexto, cambia el numero del mes por las 3 primeras letras de dicho mes
- fechaHoy, devuelve la fecha de hoy 
- buscarNoticas, busca noticias
- paginador noticias y paginador, no se probaron con una gran cantidad de noticias pero es en principio para crear el paginador de las noticias, pero tambien se lo puede hacer con js

## Funcion del archivo BackEnd/logout.php
- cierra la sesion, preferible dirigir a este archivo antes de usar la funcion de logout

## Funciones en el archivo BackEnd/mostrarTablas.php
- Tablas principales (todo esto en el archivo BackEnd/mostrarTablas.php)
  - Cupones
  - Equipos
  - Juegos
  - noticias
  - tags
  - productos
  - usuarios
  - torneos
  - ventas
  - grupo
  - comentarios noticia
  - comentarios producto
  - enfrentamientos grupo
  - grupos
  - premios torneo
  - rondas
  - equipos torneos
  - usuarios torneos
  - tags noticias
  - torneos equipo
  - usuarios equipos
  - tabla venta

## Registrar con redes sociales
- aqui dejo el link de donde aprendi https://www.youtube.com/watch?v=d7r3a5yrCzk
- en el archivo redes.php esta enlazada mi "id" y mi contraseña "secret"

## CONFIG
- Archivo config contiene
- enlaces de carpetas, en localhost y del dominio
- enlaces de redes sociales
- datos de las bases de datos (tanto local como en hostinguer)
- conectar y desconectar base de datos

# BASE DE DATOS
## Usuarios
- Un usuario debe ser capaz de registrarse con su cuenta de gmail o de facebook o simplemente con su email
- Un usuario debe usar un avatar que se haya definido, no debe subir su propio avatar, aclarar con los clientes
- Un usuario debe ser capaz de crear un equipo e invitar a mas usuarios, si el usuario creo un equipo, automaticamente pasa a ser lider e dicho equipo
- Un usuario puede estar en muchos equipos
- Un usuario puede comentar muchas noticia o muchos producto (tanto un usuario registrado como un usuario no registrado)
- Un usuario puede inscribirse a muchos torneos individual
- Un usuario puede realizar muchas compras
- Un usuario puede tener muchos cupones
- Un usuario puede ser admin
  - Admin gral (acceso a todo el panel en gral)
  - Admin bloguero (acceso a solo a el panel para publicar noticias)
  - Admin tienda (acceso a tienda, agregar productos, modificar productos, cancelar ventas)
  - Admin torneos (acceso a solo a el panel para los torneos, crear torneos, modificar torneos, crear premios, modificar grupos, modificar rondas, modificar enfrentamientos)
## Equipos
- Un equipo tiene un lider
- Un equipo puede estar en muchos torneos
- - Una noticia puede tener ningun o muchos tags
## Ventas-Compras
- UUn equipo puede tener muchos premios (ganar muchos torneos)
- Un equipo puede tener muchos integrantes(usuarios)
## Noticias
- Una noticia tiene un autor
- Una noticia puede tener ningun o muchos comentarios
na venta tiene un Usuario(un usuario puede tener muchas compras)
- Una venta puede tener uno o muchos productos
## Torneos
- Un torneo tiene un juego
- Un torneo tiene ningun o muchos grupos (fases de grupos)
  - Tiene uno o muchos enfrentamientos
- Un torneo tiene una o muchas rondas (ejemplo: octavos de final, cuartos de final, semi final, final)
  - Tiene uno o muchos enfrentamientos
- Un torneo tiene uno o muchos premios (ejemplo: primer puesto, segundo puesto, tercer puesto)
- Un torneo tiene muchos equipos 
- Un torneo si es un torneo individual tiene muchos usuarios
## Productos
- Un producto tiene ninguno o muchos comentarios
- Un producto tiene un stock (dependiendo de el stock puede estar en una o muchas ventas)
