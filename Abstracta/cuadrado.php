<?php
require_once('Figuras.php');

class Cuadrado extends Figura{
    private float $longBase;
    private float $longAltura;

    public function __construct(float $longBase, float $longAltura) {
        parent::__construct('Triangulo', 3);
        $this->longBase = $longBase;
        $this->longAltura = $longAltura;

    }

    public function get_base(){
        return $this->longBase;
    }

    public function get_altura(){
        return $this->longAltura;
    }

    public function set_base($longBase){
        $this->longBase = $longBase;
    }

    public function set_altura($longAltura){
        $this->longAltura = $longAltura;
    }

    public function calcular_area(){
        return ($this->longBase * $this->longAltura);
    }
}

$Cuadrado1 = new Cuadrado(25,10);
echo 'El Area del Cuadrado es: '. $Cuadrado1->calcular_area();
?>