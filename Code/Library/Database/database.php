<?php 

$conexionActiva = conectarBD();

function conectarBD() : mysqli {
    $conexion = mysqli_connect('localhost', 'root', '', 'carteleracine');

    if(!$conexion) {
        echo "Error no se pudo conectar";
        exit;
    } else {
        echo "Conectado correctamente";
    }

    return $conexion;
}