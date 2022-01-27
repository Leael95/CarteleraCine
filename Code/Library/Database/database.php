<?php 

$conexionActiva = mysqli_connect('localhost', 'root', '', 'carteleracine');

if(!$conexionActiva) {
    echo "Error no se pudo conectar";
    exit;
}