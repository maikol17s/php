<?php
// Definimos una función llamada hacer_café con un parámetro $tipo que tiene un valor por defecto "capuchino".
function hacer_café($tipo = "capuchino")
{
    return "Hacer una taza de $tipo.\n"; // La función retorna un mensaje que indica el tipo de café a hacer.
}

// Llamamos a la función hacer_café sin proporcionar un valor para $tipo, por lo que se usará el valor por defecto "capuchino".
echo hacer_café();

// Llamamos a la función hacer_café pasando un valor nulo como argumento, lo que también usará el valor por defecto "capuchino".
echo hacer_café(null);

// Llamamos a la función hacer_café pasando "espresso" como argumento, lo que sobrescribe el valor por defecto.
echo hacer_café("espresso");
?>