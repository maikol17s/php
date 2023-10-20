<?php
// Definimos una función anónima y la asignamos a una variable llamada $saludo.
$saludo = function($nombre) {
    // La función toma un parámetro $nombre y devuelve un mensaje de saludo personalizado.
    return "¡Hola, $nombre!";
};

// Llamamos a la función anónima utilizando la variable $saludo.
echo $saludo("Alice"); // Esto mostrará "¡Hola, Alice!"
?>