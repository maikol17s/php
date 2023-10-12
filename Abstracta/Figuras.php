<?php
//Una clase abstracta esta hecha para hacer heredada por otras.NO se puede instanciar
//Las clases abstractas se usaranpara estandarizar las aplicaciones
//Una clase abstractara servira de herencia para otras
//Las figuras pueden ser cuadrados,triangulos,rectanguos........

abstract class Figura{
    private string $nombre;
    private float $n_lados=1;


    public function __construct(string $nombre, float $n_lados) {
        $this->nombre = $nombre;
        $this->n_lados = $n_lados;
    }

    public function get_nombre(){
        return $this->nombre;
    }

    public function get_n_lados(){
        return $this->n_lados;
    }


    public function impirmir(){
        echo 'Soy un metodo de: ' . Figura::get_nombre() . '<br>';
        echo '<br>';
    }
}
?>