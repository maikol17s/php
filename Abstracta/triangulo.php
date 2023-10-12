<?php
require_once('Figuras.php');

class Triangulo extends Figura{
    private float $base;
    private float $altura;

    public function __construct(float $base, float $altura) {
        parent::__construct('Triangulo',3);
        $this->base = $base;
        $this->altura = $altura;
    }

    public function get_base(){
        return $this->base;
    }

    public function get_altura(){
        return $this->altura;
    }

    public function set_base($base){
        $this->base = $base;
    }

    public function set_altura($altura){
        $this->altura = $altura;
    }

    public function calcular_area(){
        return ($this->base * $this->altura)/2;
    }
 }

// $triangulo1 = new Triangulo();
// $triangulo1 -> set_base(2);
// $triangulo1 -> set_altura(3);
// $triangulo1 -> calcular_area();
// echo 'Area es: '.$area;

$triangulo2 = new Triangulo(2.5, 10.1);
echo 'El Area del Triangulo es: '. $triangulo2->calcular_area();
?>