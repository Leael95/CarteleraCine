<?php

include "database.php";

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$estreno = $_POST['estreno'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$pathimg = $_POST['pathimg'];
$trailerlink = $_POST['trailerlink'];

$actualizar = "UPDATE cartelera SET nombre='$nombre', estreno='$estreno', descripcion='$descripcion', categoria='$categoria', pathimg='$pathimg', trailerlink='$trailerlink' WHERE id='$id'";

$resultado = mysqli_query($conexionActiva,$actualizar);

if($resultado) {
    echo "Se registraron los datos correctamente";
} else {
    echo "Hicieron cagada che que paso";
}