<?php

include "database.php";

if(isset($_GET['nombre'])) {
    $nombrePelicula = $_GET['nombre'];

    $peliculas = "SELECT * FROM cartelera WHERE nombre = '$nombrePelicula'";

} else {
    $peliculas = "SELECT * FROM cartelera";
} 

$resultado = mysqli_query($conexionActiva,$peliculas);

while($row=mysqli_fetch_assoc($resultado)) { ?>
    <div>
        <p><span class="bold-p">Nombre: </span><?php echo $row["nombre"] ?></p>
        <p><span class="bold-p">Estreno: </span><?php echo $row["estreno"] ?></p>
        <p><span class="bold-p">Descripcion: </span><?php echo $row["descripcion"] ?></p>
        <p><span class="bold-p">Categoria: </span><?php echo $row["categoria"] ?></p>
        <p><span class="bold-p">PathImg: </span><?php echo $row["pathimg"] ?></p>
        <p><span class="bold-p">TrailerLink: </span><?php echo $row["trailerlink"] ?></p>
        <a href="movieEdit.php?id=<?php echo $row["id"];?>">Editar</a>
        <a href="movieDelete.php?id=<?php echo $row["id"];?>">Eliminar</a>
        <img src="<?php echo $row["pathimg"] ?>" alt="">
    </div>
<?php } 