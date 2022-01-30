<?php

include "database.php";

if(isset($_POST['register'])) {
    $nombre = $_POST['nombre'];
    $estreno = $_POST['estreno'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $pathimg = $_POST['pathimg'];
    $trailerlink = $_POST['trailerlink'];

    $consulta = "INSERT INTO cartelera (nombre, estreno, descripcion, categoria, pathimg, trailerlink) VALUES ('$nombre', '$estreno', '$descripcion', '$categoria', '$pathimg', '$trailerlink');";

    $resultado = mysqli_query($conexionActiva,$consulta);

    if($resultado) {
        ?>
        <h3>¡Se registro correctamente!</h3>
        <?php 
    } else {
        ?>
        <h3>Mal ahi compa no te pudiste registrar :v</h3>
        <?php 
    }
}