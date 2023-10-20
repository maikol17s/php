<?php

// Se crea una clase abstracta llamada "Vehiculo"
abstract class Vehiculo {
    
    // Propiedades protegidas para el nombre y la velocidad máxima del vehículo
    protected string $nombre;
    protected float $velocidadMaxima;

    // Constructor de la clase
    public function __construct($nombre, $velocidadMaxima) {
        $this->nombre = $nombre;
        $this->velocidadMaxima = $velocidadMaxima;
    }

    // Método abstracto para obtener una descripción del vehículo
    abstract public function obtenerDescripcion();

    // Método para obtener la velocidad máxima del vehículo
    public function obtenerVelocidadMaxima() {
        return $this->velocidadMaxima;
    }
}

// Se crea una clase que hereda de Vehiculo
class Coche extends Vehiculo {
    private string $modelo;

    public function __construct($nombre, $modelo, $velocidadMaxima) {
        parent::__construct($nombre, $velocidadMaxima);
        $this->modelo = $modelo;
    }

    public function obtenerDescripcion() {
        return "Este es un coche de modelo " . $this->modelo . ". Velocidad máxima: " . $this->velocidadMaxima . " km/h";
    }
}

// Se crea una clase que hereda de Vehiculo
class Moto extends Vehiculo {
    private string $tipo;

    public function __construct($nombre, $marca, $velocidadMaxima) {
        parent::__construct($nombre, $velocidadMaxima);
        $this->marca = $marca;
    }

    public function obtenerDescripcion() {
        return "Esta es una mot de marca " . $this->marca . ". Velocidad máxima: " . $this->velocidadMaxima . " km/h";
    }
}

// Se crean los objetos para utilizar la clase abstracta
$coche = new Coche("Coche Deportivo", "Ferrari", 250);
echo $coche->obtenerDescripcion() . "<br>";

$moto = new Moto("Moto Deportiva", "BMW",365);
echo $moto->obtenerDescripcion() . "<br>";
