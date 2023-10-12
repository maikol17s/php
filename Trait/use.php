<?php
//Aplicando un ALIAS al namespace con la palabra reservada 'USE

require('Clase2.php');

use Sena as S;

$persona1 = new S\Persona('Rodrigo','Jairo@abc','Buenos dias...');
echo 'Nombres: '. $persona1->nombre.'<br>';
echo 'Correo: '. $persona1->correo.'<br>';
echo 'Saludo: '. S\Persona::$saludo.'<br>';