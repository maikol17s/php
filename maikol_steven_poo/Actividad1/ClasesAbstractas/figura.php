<?php

// Definición de una clase abstracta llamada "Figura"
abstract class Figura{
    
    // Propiedad protegida para almacenar el nombre de la figura
    protected string $nombre;

    // Constructor de la clase
    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    // Método abstracto para calcular el área de la figura
    abstract public function calcularArea();

    // Método para obtener el nombre de la figura
    public function getNombre(){
        return $this->nombre;
    }
}

// Una clase que hereda de Figura
class Circulo extends Figura {
    private float $radio;

    public function __construct($nombre, $radio){
        parent::__construct($nombre);
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }
}

// Una clase que hereda de Figura
class Rectangulo extends Figura {
    private int $ladoA;
    private int $ladoB;

    public function __construct($nombre, $ladoA, $ladoB){
        parent::__construct($nombre);
        $this->ladoA = $ladoA;
        $this->ladoB = $ladoB;
    }

    public function calcularArea() {
        return $this->ladoA * $this->ladoB;
    }
}

// Se crean los objetos para utilizar la clase abstracta
$circulo = new Circulo("Círculo", 5);
echo "Nombre: " . $circulo->getNombre() . "<br>";
echo "Área: " . $circulo->calcularArea() . "<br>";

echo "<br>";

$rectangulo = new Rectangulo("Rectángulo", 4, 6);
echo "Nombre: " . $rectangulo->getNombre() . "<br>";
echo "Área: " . $rectangulo->calcularArea() . "<br>";
