<?php 
include '../Library/Database/database.php';

$id = $_GET['id'];
$eliminar = "DELETE FROM cartelera WHERE id = '$id'";

$resultado = mysqli_query($conexionActiva,$eliminar);

if($resultado) {
    echo "Oh no eliminaste la pelicula";
} else {
    echo "La pelicula se salvo eh";
}