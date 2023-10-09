<?php
require_once('computador.php');

class Desktop extends Computador{
    private bool $ups;

    public function __construct(string $fabricante, string $cap_Memoria, string $tipo_Memoria,string $tipo_Almacenamiento,string $capAlmacenamiento,string $sistema_Operativo,string $suiete_Oficina,string $procesador,int $num_Puerto_USB,bool $ups){

        parent::__construct( $fabricante,  $cap_Memoria,  $tipo_Memoria, $tipo_Almacenamiento, $capAlmacenamiento, $sistema_Operativo, $suiete_Oficina, $procesador,$num_Puerto_USB);
        
        $this->ups = $ups;
    }

    public function set_ups($ups){
        $this->ups=$ups;
    }

    public function get_ups(){
        return $this->ups;
    }
}

echo '<br>';
$comp1 = new Desktop('HP','32RAM','DDR y DDR2',' SSD y flash','500 GByte','Windows','Office 365','Intel',2,true);
$comp2 = new Desktop('DELL', '32 GB', 'DDR4', 'SSD','512 GB','WINDOWS 11 PRO', 'MICROSOFT OFFICE', 'INTEL(R) Core(TM) I7,',2,true);
echo 'Frabricante: '. $comp1->get_fabricante(). '<br>';
echo 'Capacidad Memoria: '. $comp1->get_cap_Memoria(). '<br>';
echo 'Tipo Memoria: '. $comp1->get_tipo_Memoria(). '<br>';
echo 'Tipo Almacenamiento: '. $comp1->get_tipo_Almacenamiento(). '<br>';
echo 'Capacidad Almacenamiento: '. $comp1->get_capAlmacenamiento(). '<br>';
echo 'Sistema Operativo: '. $comp1->get_sistema_Operativo(). '<br>';
echo 'Suiete Oficina: '. $comp1->get_suiete_Oficina(). '<br>';
echo 'Procesador: '. $comp1->get_procesador(). '<br>';
echo 'Numero de Puertos USB: '. $comp1->get_num_Puerto_USB(). '<br>';
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
