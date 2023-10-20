<?php

abstract class Producto {
    protected string $nombre;
    protected int $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    abstract public function obtenerInformacion();
}

class Libro extends Producto {
    public function obtenerInformacion() {
        return "Libro: {$this->nombre}, Precio: {$this->precio} dólares";
    }
}

class Juguete extends Producto {
    public function obtenerInformacion() {
        return "Juguete: {$this->nombre}, Precio: {$this->precio} dólares";
    }
}


$libro = new Libro("La Odisea", 15.99);
$juguete = new Juguete("Muñeca de Peluche", 9.99);

echo $libro->obtenerInformacion() . "<br>";
echo $juguete->obtenerInformacion();
