<?php
class PaisInfo {
    private $nombre;
    private $capital;
    private $poblacion;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function conCapital($capital) {
        $this->capital = $capital;
        return $this; // Permite el encadenamiento de métodos.
    }

    public function conPoblacion($poblacion) {
        $this->poblacion = $poblacion;
        return $this; // Permite el encadenamiento de métodos.
    }

    public function obtenerInfo() {
        return "País: {$this->nombre}, Capital: {$this->capital}, Población: {$this->poblacion}";
    }
}

// Creamos una instancia de PaisInfo y encadenamos métodos para establecer información del país.
$informacion = (new PaisInfo("Estados Unidos"))
    ->conCapital("Washington, D.C.")
    ->conPoblacion(331000000)
    ->obtenerInfo();

// Imprimimos la información del país.
echo $informacion; // Esto mostrará la información del país.
?>
