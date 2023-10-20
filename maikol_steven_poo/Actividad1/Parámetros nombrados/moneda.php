<?php 

function reproducirCancion(array $parametros) {
    $cancion = $parametros['cancion'] ?? 'Canción no especificada';
    $artista = $parametros['artista'] ?? 'Artista no especificado';
    $genero = $parametros['genero'] ?? 'Género no especificado';

    echo "Reproduciendo: $canción - $artista ($genero)";
}

$parametros = [
    'cancion' => 'Bohemian Rhapsody',
    'artista' => 'Queen',
    'genero' => 'Rock'
];

reproducirCancion($parametros);