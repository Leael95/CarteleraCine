<?php
include ("../Library/Database/database.php");
$id = $_GET["id"];
$pelicula = "SELECT * FROM cartelera WHERE id = '$id'";
$resultado = mysqli_query($conexionActiva,$pelicula);
$row = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Edit</title>
</head>
<body>
    <form method="post" action="../Library/Database/edit.php">
        <h1>Crea tu pelicula</h1>
        <input type="text" name="id" id="id" placeholder="id de la pelicula" value="<?php echo $row['id']?>">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre de la pelicula" value="<?php echo $row['nombre']?>">
        <input type="text" name="estreno" id="estreno" placeholder="Estreno de la pelicula" value="<?php echo $row['estreno']?>">
        <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion de la pelicula" value="<?php echo $row['descripcion']?>">
        <input type="text" name="categoria" id="categoria" placeholder="Categoria de la pelicula" value="<?php echo $row['categoria']?>">
        <input type="text" name="pathimg" id="pathimg" placeholder="Pathimg de la pelicula" value="<?php echo $row['pathimg']?>">
        <input type="text" name="trailerlink" id="trailerlink" placeholder="Trailerlink de la pelicula" value="<?php echo $row['trailerlink']?>">

        <input type="submit" name="register">
    </form>
</body>
</html>