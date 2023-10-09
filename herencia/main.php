<?php
require_once('Automovil.php');

$mi_automovil = new Automovil('Chevrolet', '2014',3000000,'Sedan','Azul');

//Subclase invocando metodos de la superclase

echo 'Marca automovil: '. $mi_automovil->get_marca(). '<br>';
echo 'Marca automovil: '. $mi_automovil->get_modelo(). '<br>';
echo 'Marca automovil: '. $mi_automovil->get_precio(). '<br>';

//Subclase invocando metodos de la subclase
echo 'Tipo: '. $mi_automovil->get_tipo(). '<br>';
echo 'Color: '. $mi_automovil->get_color(). '<br>';
$mi_automovil->saludar();

require_once('Camion.php');
$mi_camion = new Camion('Renault Trucks','2021',10000000,6,35);

//Subclase invocando metodos de la Superclase
echo 'Marca camion: '. $mi_automovil->get_marca(). '<br>';
echo 'Modelo camion: '. $mi_automovil->get_modelo(). '<br>';
echo 'Precio camion: '. $mi_automovil->get_precio(). '<br>';
$mi_automovil->saludar();