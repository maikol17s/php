<?php

abstract class Comida {
    protected string $nombre;
    protected float $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    abstract public function describir();
}

class Pizza extends Comida {
    public function describir() {
        return "La pizza {$this->nombre} cuesta {$this->precio} dólares.";
    }
}

class Hamburguesa extends Comida {
    public function describir() {
        return "La hamburguesa {$this->nombre} cuesta {$this->precio} dólares.";
    }
}

$pizza = new Pizza("Hawaiana", 12.99);
$hamburguesa = new Hamburguesa("Especial", 8.49);

echo $pizza->describir() . "<br>";
echo $hamburguesa->describir();
