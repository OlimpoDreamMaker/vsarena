# DASHBOARD

## VISTAS DEL PANEL

- USUARIOS
- TORNEOS
- TIENDAS

## USUARIOS

### ¿Que se puede ver?

- Cantidad de Usuarios Registrados
- Visitas recibidas (visitas recibias por dia a la web Vs_Arena)
- Cantidad Maxima de Usuarios en un Solo torneo
- Usuarios 
  - ID Usuarios
  - Nombre Usuario
  - Email Usuario
  - Efectivo
  - Moneda Virtual
  - Compras Realizadas
  - Torneos en los que participo
  - Torneos en los que esta participando
  - Conversacion(en caso de que se hayan comunicado con soporte o hayan recibido una advertencia de ban)

### ¿Que se puede agregar?

- Se le puede agregar Monedas Virtuales /opcional/
- Reembolzo de dinero /opcional/

### ¿Que se puede eliminar?

- Advertir usuarios por futuros ban
- Bannear usuarios
- Quitar Monedas Virtuales /opcional/

### ¿Que se puede modificar?

- Agregar Usuario a un torneo
- Descalificar Usuario de un torneo
- Darle a un Usuario Premio (Monedas Virtuales)
- Quitar Monedas Virtuales (En el caso de equivocarse y haberle dado el premio de un torneo por error)/opcional/

### ¿Que se les puede hacer?

- Enviar Emails a usuario/s
- Cargarle Saldo (efectivo, moneda virtual) /opcional/
- Quitarle Monedas Virtuales /opcional/

## TORNEOS

### ¿Que se puede ver?

- Torneos totales
- Torneos activos
- Torneos concluidos
- Torneos cancelados (en caso de que haya pasado) /opcional/
- Torneos
  - ID Torneo
  - Nombre Torneo
  - Juego
  - Cantidad de participantes
    - Batallas/Enfrentamientos
    - Ganadores
  - Premio
  - Modalidad (1vs1-5vs5-etc)
  - Activo (booleano)
  - Concluido (booleano)
    - Primer Puesto /opcional/
    - Segundo Puesto /opcional/
    - Tercer Puesto /opcional/
  - Participantes
  - Fecha de Inicio
  - Fecha de Fin
- Batallas/Enfrentamientos
  - ID Batalla
  - Nombre Juego
  - Modalidad (1vs1-2vs2-3vs3-4vs4-5vs5)
  - Ganador/es

### ¿Que se puede agregar?

- Agregar Usuarios al torneo
- Agregar ganador

### ¿Que se puede eliminar?

- Eliminar Usuario de torneo
- Eliminar/cancelar torneo

### ¿Que se puede modificar?

- Cantidad participantes del torneo
- Premio del torneo
- Nombre del torneo
- Torneo Activo (cambiar estado)
- Torneo Concluido (cambiar estado)
- Modificar Enfrentamientos (usuario1 vs usuario2 a usuario1 vs usuario3 )

### ¿Que se les puede hacer?

- Crear Torneo
- Cambiar el estado del Torneo (activo-concluido)
- Enviar emails a participantes de un torneo (como el inicio del torneo)

## TIENDAS

### ¿Que se puede ver?

- Cantidad de Ventas
- Cantidad de Productos
- Ingresos en $
- Ventas
  - ID Venta
  - Detalles de venta
    - Producto/s
    - Precio/s de producto/s
    - Cantidad de Productos
  - Total
  - Usuario (a quien le pertenece la venta)
- Productos <!--TENER EN CUENTA QUE TAMBIEN SE VENDERAN MONEDAS VIRTUALES-->
  - ID Producto
  - Nombre Producto
  - Precio
  - Stock
  - Detalles (descripcion)
  - Foto/s

### ¿Que se puede agregar?

- Agregar Producto
- Agregar Producto a Usuario

### ¿Que se puede eliminar?

- Eliminar Producto
- Cancelar Venta (eliminar un producto de un usuario)

### ¿Que se puede modificar?

- Editar Producto
- Editar Venta/s (cambiarle a un usuario su producto por otro)

### ¿Que se les puede hacer? 
<!--BUSCAR QUE SE LE PUEDE HACER-->

## BASE DE DATOS

### TABLAS ESENCIALES 

- USUARIOS
- TORNEOS
- COMPRAS/VENTAS
- PRODUCTOS
- JUEGOS

### Usuarios
- idUsuario
- usuario
- emailUsuario
- passUsuario
- avatarUsuario
- saldoEfectivo
- saldoMonVir (MonedaVirtual)
- isAdmin

### Torneos
- idTorneo
- torneo
- juego
- cantMaxEquipos
- modalidad
- estado (en espera, activo, concluido, cancelado)(los estados "en espera","activo","concluido" son estados automaticos que son conectados con la fecha, osea que estos estados no podran ser modificados, el estado cancelado es algo que un admin debera hacer)
- fechaInicio
- fechaFin
- fasesDeGrupos (un valor booleano(VoF) en caso de que exista la fase de grupo)
- juego(idJuego)

### Compras/Ventas
- idVenta
- cantidadProductos
- totalVenta
- usuarioComprador(idUsuario)

### Productos
- idProducto
- producto
- precio
- stock
- descripcion
- imgProducto

### Equipos
- idEquipo
- equipo
- avatarEquipo
- lider_idUsuario

## Relaciones

- Usuarios <=> Ventas <=> DetallesVentas <=> Productos <=> Imagenes LISTO
- Usuario <=> Cupones (antes de realizar la compra/venta comprobar si el usuario tiene o no cupones) LISTO
  - Cupones <=> Usuarios <=> Ventas LISTO
- Juegos <=> Imagenes LISTO




# PREGUNTAS
- Hago un panel para editar noticias mas su tabla en la DB
- Necesito que el usuario en editar perfil tenga para crear equipos y pueda agregar y eliminar integrantes como eliminar el equipo, cambiar el nombre, cambiar el avatar del equipo
- y ponele q te inviten a un equipo, lo hago por email o por el panel de editar perfil
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 