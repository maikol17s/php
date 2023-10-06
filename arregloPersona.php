<?php
$persona= array(
    "Nombre" => 'Pedro',
    'Edad'=> 30,
    'Ciudad'=>'Bogota'
);

$persona1= array(
    "Nombre" => 'Ronald',
    'Edad'=> 18,
    'Ciudad'=>'Medellin'
);

echo "Nombre: ". $persona["Nombre"].'<br>';
echo "Edad: ". $persona["Edad"].'<br>';
echo "Ciudad: ". $persona["Ciudad"].'<br>';
echo '<br>';
echo "Nombre: ". $persona1["Nombre"].'<br>';
echo "Edad: ". $persona1["Edad"].'<br>';
echo "Ciudad: ". $persona1["Ciudad"].'<br>';

?>