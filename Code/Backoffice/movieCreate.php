<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Create</title>
</head>
<body>
    <form method="post">
        <h1>Crea tu pelicula</h1>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre de la pelicula">
        <input type="text" name="estreno" id="estreno" placeholder="Estreno de la pelicula">
        <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion de la pelicula">
        <input type="text" name="categoria" id="categoria" placeholder="Categoria de la pelicula">
        <input type="text" name="pathimg" id="pathimg" placeholder="Pathimg de la pelicula">
        <input type="text" name="trailerlink" id="trailerlink" placeholder="Trailerlink de la pelicula">

        <input type="submit" name="register">
    </form>

    <?php 
        include "../Library/Database/register.php";
    ?>
</body>
</html>