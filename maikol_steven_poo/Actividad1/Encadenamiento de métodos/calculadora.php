<?php

class PersonaInfo {
    private $nombre;
    private $edad;
    private $ciudad;

    public function nombre($nombre) {
        $this->nombre = $nombre;
        return $this; // Permite el encadenamiento de métodos.
    }

    public function edad($edad) {
        $this->edad = $edad;
        return $this; // Permite el encadenamiento de métodos.
    }

    public function ciudad($ciudad) {
        $this->ciudad = $ciudad;
        return $this; // Permite el encadenamiento de métodos.
    }

    public function obtenerInfo() {
        return "Nombre: " . $this->nombre . ", Edad: " . $this->edad . ", Ciudad: " . $this->ciudad;
    }
}

$persona1 = new PersonaInfo();
$persona1->nombre("Alice")->edad(30)->ciudad("Nueva York");
echo $persona1->obtenerInfo();
echo "\n";

$persona2 = new PersonaInfo();
$persona2->nombre("Bob")->edad(25)->ciudad("Los Ángeles");
echo $persona2->obtenerInfo();
