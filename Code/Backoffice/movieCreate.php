<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Create</title>
    <link rel="stylesheet" href="Assets/styles.css">
</head>
<body>

    <h1 class="movieCreate fontImpact">Postea tu pelicula</h1>

    <form class="formCreate fontImpact" method="post">

        <div>
            <label for="nombre">Titulo de la pelicula</label>
            <input class="inputStyleWH" type="text" name="nombre" id="nombre">
        </div>

        <div>
            <label for="estreno">Estreno</label>
            <input class="inputStyleWH" type="text" name="estreno" id="estreno" >
        </div>

        <div>
            <label for="descripcion">Descripcion de la pelicula</label>
            <input class="inputStyleWH" type="text" name="descripcion" id="descripcion" >
        </div>

        <div>
            <label for="categoria">Categoria</label>
            <input class="inputStyleWH" type="text" name="categoria" id="categoria">
        </div>

        <div>
            <label for="pathimg">Pathimg de la pelicula</label>
            <input class="inputStyleWH" type="text" name="pathimg" id="pathimg">
        </div>

        <div>
            <label for="trailerlink">Trailer de la pelicula</label>
            <input class="inputStyleWH" type="text" name="trailerlink" id="trailerlink">
        </div>

        <div>
            <input class="btnRegister fontImpact" type="submit" name="register">
        </div>
    </form>

    <?php 
        include "../Library/Database/register.php";
    ?>
</body>
</html>