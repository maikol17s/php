<?php

trait InformacionPais {
    public string $nombre;
    public string $capital;
    public float $poblacion;

    public function obtenerInformacion() {
        echo "País: {$this->nombre}<br>";
        echo "Capital: {$this->capital}<br>";
        echo "Población: {$this->poblacion} habitantes<br>";
    }
}

class Pais {
    use InformacionPais;

    public function __construct($nombre, $capital, $poblacion) {
        $this->nombre = $nombre;
        $this->capital = $capital;
        $this->poblacion = $poblacion;
    }
}

class OtroPais {
    use InformacionPais;

    public function __construct($nombre, $capital, $poblacion) {
        $this->nombre = $nombre;
        $this->capital = $capital;
        $this->poblacion = $poblacion;
    }
}

// Crear instancias de países
$pais1 = new Pais("Estados Unidos", "Washington D.C.", 331002651);
$pais2 = new OtroPais("Francia", "París", 65273511);

// Obtener información de los países
$pais1->obtenerInformacion();
echo "<br>";
$pais2->obtenerInformacion();
