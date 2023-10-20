<?php

abstract class Numero {
    protected float $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    abstract public function mostrar();
}

class Entero extends Numero {
    public function mostrar() {
        return "Número entero: {$this->valor}";
    }
}

class Decimal extends Numero {
    public function mostrar() {
        return "Número decimal: {$this->valor}";
    }
}

// Crear instancias de las clases y mostrar los números
$entero = new Entero(42);
$decimal = new Decimal(3.14);

echo $entero->mostrar() . "<br>";
echo $decimal->mostrar();