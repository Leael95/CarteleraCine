Cartelera de Cine, proyecto enfocado a utilizar las herramientas de forma vanilla.

Herramientas a utilizar:
-HTML5
-CSS3
-Javascript
-MySQL
-PHP

Frontend:

1)Pagina principal
-En el navbar tiene que salir las siguientes lineas: Inicio - Cartelera, y a la derecha una barra de busqueda
-La barra de busqueda tiene que redirigir a carteleras con la busqueda que se le pidio
-En el header tiene que salir aleatoriamente una pelicula, con descripcion
-Al poner el click sobre una pelicula te tiene que salir la opcion para poder ver el trailer, este automaticamente te llevara a un link en youtube por el momento, pero se te abrira el navegador en la pantalla

2)Cartelera
-Tienen que salir todas las peliculas en orden de lanzamiento con su respectiva imagen y abajo de esta su nombre, hasta un maximo de 3 para PC, 1 para Mobile y 2 para Tablet
-A la izquierda tiene que estar las categorias con su cantidad de numeros por pelicula
-Al hacerle click a uno te llevara a la pelicula con su descripcion y tambien al trailer

Backend:
-Base de datos con las siguientes columnas:
-- Nombre
-- Fecha de estreno
-- Descripcion
-- Categoria
-- path de Imagen
-- Link trailer YT

-Validaciones para que en la barra de busqueda solo se pueda buscar y no insertar nada
-Rollback por si hay errores