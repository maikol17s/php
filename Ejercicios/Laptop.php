<?php
require_once('computador.php');

class Laptop extends Computador{
    private bool $tactil;
    private int $pot_Bateria;

    public function __construct(string $fabricante, string $cap_Memoria, string $tipo_Memoria,string $tipo_Almacenamiento,string $capAlmacenamiento,string $sistema_Operativo,string $suiete_Oficina,string $procesador,int $num_Puerto_USB,bool $tactil, int $pot_Bateria){

        parent::__construct( $fabricante,  $cap_Memoria,  $tipo_Memoria, $tipo_Almacenamiento, $capAlmacenamiento, $sistema_Operativo, $suiete_Oficina, $procesador,$num_Puerto_USB);
        
        $this->tactil = $tactil;
        $this->pot_Bateria = $pot_Bateria;
    }

    public function set_tactil($tactil){
        $this->tactil=$tactil;
    }

    public function set_pot_Bacteria($pot_Bateria){
        $this->pot_Bateria=$pot_Bateria;
    }

    public function get_tactil(){
        return $this->tactil;
    }

    public function get_pot_Bateria(){
        return $this->pot_Bateria;
    }

    
}

echo '<br>';
$comp1 = new Laptop('Lenovo', '32RAM', 'RAM', 'Bytes', '250.500Bytes', 'Linux', 'Office 365', 'CPU', 3,true,4500);
$comp2 = new Laptop('Hp', '20RAM', 'RAM', 'Gbytes', '300.000Gbytes', 'Windows', 'Office 365', 'CPU', 3, 'False',5500);

echo 'Frabricante: '. $comp1->get_fabricante(). '<br>';
echo 'Capacidad Memoria: '. $comp1->get_cap_Memoria(). '<br>';
echo 'Tipo Memoria: '. $comp1->get_tipo_Memoria(). '<br>';
echo 'Tipo Almacenamiento: '. $comp1->get_tipo_Almacenamiento(). '<br>';
echo 'Capacidad Almacenamiento: '. $comp1->get_capAlmacenamiento(). '<br>';
echo 'Sistema Operativo: '. $comp1->get_sistema_Operativo(). '<br>';
echo 'Suiete Oficina: '. $comp1->get_suiete_Oficina(). '<br>';
echo 'Procesador: '. $comp1->get_procesador(). '<br>';
echo 'Numero de Puertos USB: '. $comp1->get_num_Puerto_USB(). '<br>';
echo 'Tactil: '.$comp1->get_tactil(). '<br>';
echo 'Potencia Bateria: '.$comp1->get_pot_Bateria(). '<br>';
echo '<br>';
echo 'Frabricante: '. $comp2->get_fabricante(). '<br>';
echo 'Capacidad Memoria: '. $comp2->get_cap_Memoria(). '<br>';
echo 'Tipo Memoria: '. $comp2->get_tipo_Memoria(). '<br>';
echo 'Tipo Almacenamiento: '. $comp2->get_tipo_Almacenamiento(). '<br>';
echo 'Capacidad Almacenamiento: '. $comp2->get_capAlmacenamiento(). '<br>';
echo 'Sistema Operativo: '. $comp2->get_sistema_Operativo(). '<br>';
echo 'Suiete Oficina: '. $comp2->get_suiete_Oficina(). '<br>';
echo 'Procesador: '. $comp2->get_procesador(). '<br>';
echo 'Numero de Puertos USB: '. $comp2->get_num_Puerto_USB(). '<br>';
echo 'Tactil: '.$comp2->get_tactil(). '<br>';
echo 'Potencia Bateria: '.$comp2->get_pot_Bateria(). '<br>';