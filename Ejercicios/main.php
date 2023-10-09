<?php
require_once('computador.php');

$fechaActual = Computador::obtener_fecha();
echo 'La fehca actual es: '. $fechaActual. '<div>';

Computador::contar()-> $contador;
$contador->contar();

require_once('Laptop.php');
echo '<br>';
$comp1 = new Laptop('Lenovo', '32RAM', 'RAM', 'Bytes', '250.500Bytes', 'Linux', 'Office 365', 'CPU', 3,true,4500);
$comp2 = new Laptop('Hp', '20RAM', 'RAM', 'Gbytes', '300.000Gbytes', 'Windows', 'Office 365', 'CPU', 3, 'False',5500);

//Laptop 1
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

//Laptop 2
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

require_once('Desktop.php');

echo '<br>';
$comp1 = new Desktop('HP','32RAM','DDR y DDR2',' SSD y flash','500 GByte','Windows','Office 365','Intel',2,true);
$comp2 = new Desktop('DELL', '32 GB', 'DDR4', 'SSD','512 GB','WINDOWS 11 PRO', 'MICROSOFT OFFICE', 'INTEL(R) Core(TM) I7,',2,true);
//Desktop 1
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

//Desktop 2
echo 'Frabricante: '. $comp2->get_fabricante(). '<br>';
echo 'Capacidad Memoria: '. $comp2->get_cap_Memoria(). '<br>';
echo 'Tipo Memoria: '. $comp2->get_tipo_Memoria(). '<br>';
echo 'Tipo Almacenamiento: '. $comp2->get_tipo_Almacenamiento(). '<br>';
echo 'Capacidad Almacenamiento: '. $comp2->get_capAlmacenamiento(). '<br>';
echo 'Sistema Operativo: '. $comp2->get_sistema_Operativo(). '<br>';
echo 'Suiete Oficina: '. $comp2->get_suiete_Oficina(). '<br>';
echo 'Procesador: '. $comp2->get_procesador(). '<br>';
echo 'Numero de Puertos USB: '. $comp2->get_num_Puerto_USB(). '<br>';
