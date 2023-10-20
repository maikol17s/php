<?php

trait MarcaCelular {
    public string $nombre;
    public string $paisOrigen;
    public int $añoFundacion;

    public function obtenerInformacion() {
        echo "Marca: {$this->nombre}<br>";
        echo "País de Origen: {$this->paisOrigen}<br>";
        echo "Año de Fundación: {$this->añoFundacion}<br>";
    }
}

class MarcaCelular1 {
    use MarcaCelular;

    public function __construct($nombre, $paisOrigen, $añoFundacion) {
        $this->nombre = $nombre;
        $this->paisOrigen = $paisOrigen;
        $this->añoFundacion = $añoFundacion;
    }
}

class MarcaCelular2 {
    use MarcaCelular;

    public function __construct($nombre, $paisOrigen, $añoFundacion) {
        $this->nombre = $nombre;
        $this->paisOrigen = $paisOrigen;
        $this->añoFundacion = $añoFundacion;
    }
}


$marca1 = new MarcaCelular1("Apple", "Estados Unidos", 1976);
$marca2 = new MarcaCelular2("Samsung", "Corea del Sur", 1938);


$marca1->obtenerInformacion();
echo "<br>";
$marca2->obtenerInformacion();
