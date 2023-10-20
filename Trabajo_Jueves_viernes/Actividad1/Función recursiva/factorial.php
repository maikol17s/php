<?php
// Función recursiva para calcular el factorial de un número.
function factorial($n) {
    // Si $n es 0 o 1, el factorial es 1, esta es la condición de terminación de la recursión.
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        // Si $n no es 0 ni 1, llamamos a la función recursivamente con $n - 1 y multiplicamos el resultado por $n.
        return $n * factorial($n - 1);
    }
}

// Llamamos a la función para calcular el factorial de un número, por ejemplo, 5.
$numero = 5;
$factorial_resultado = factorial($numero);

// Imprimimos el resultado.
echo "El factorial de $numero es $factorial_resultado";
?>
