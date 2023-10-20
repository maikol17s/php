<?php

abstract class Planeta {
    protected string $nombre;
    protected float $radio;

    public function __construct($nombre,$radio) {
        $this->nombre = $nombre;
        $this->radio = $radio;
    }

    abstract public function obtenerDatos();
}

class PlanetaTerrestre extends Planeta {
    public function __construct($nombre, $radio) {
        parent::__construct($nombre, $radio);
        $this->tipo = "Terrestre";
    }

    public function obtenerDatos() {
        return "Planeta {$this->nombre},radio {$this->radio} km.";
    }
}

class PlanetaGaseoso extends Planeta {
    public function __construct($nombre, $radio) {
        parent::__construct($nombre, $radio);
    }

    public function obtenerDatos() {
        return "Planeta {$this->nombre}, radio {$this->radio} km.";
    }
}

// Crear instancias de las clases y obtener datos de los planetas
$tierra = new PlanetaTerrestre("Tierra", 6371);
$jupiter = new PlanetaGaseoso("Júpiter", 69911);

echo $tierra->obtenerDatos() . "<br>";
echo $jupiter->obtenerDatos();
