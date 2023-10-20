<?php
/* declare(strict_types=1);, que permite habilitar el "modo estricto" en el que se deben 
declarar los tipos de datos para los parámetros y valores de retorno en funciones y métodos. */

declare(strict_types=1);

class Calcular {
    
    public function restar(int $a, int $b): int {
        return $a - $b;
    }
}

$calculadora = new Calcular();
$resultado = $calculadora->restar(3, 4);
echo "El resultado es $resultado";

?>