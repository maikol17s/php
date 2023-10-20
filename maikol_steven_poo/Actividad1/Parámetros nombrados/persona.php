<?php 

function persona($parametros) {
    $nombre = $parametros['nombre'] ?? 'John Doe';
    $edad = $parametros['edad'] ?? 30;

    echo "Nombre: $nombre, Edad: $edad";
}

$datos = [
    'nombre' => 'Alice',
    'edad' => 25
];

miFuncion($datos);
