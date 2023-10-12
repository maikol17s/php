<?php

require('Clase1.php');
$persona1 = new Abc\Persona('JAIRO PERALTA','jairo@abc','Buenos dias...');
echo 'imprimiendo datos de la clase Persona en el espacio de nombre Abc'. '<br>';
echo 'Nombres: '. $persona1->nombre.'<br>';
echo 'Correo: '. $persona1->correo.'<br>';
echo 'Saludo: '. Abc\Persona::$saludo.'<br>';

require('Clase2.php');
$persona1 = new Sena\Persona('JAIRO PERALTA','jairo@abc','Buenos dias...');
echo 'imprimiendo datos de la clase Persona en el espacio de nombre Sena'. '<br>';
echo 'Nombres: '. $persona1->nombre.'<br>';
echo 'Correo: '. $persona1->correo.'<br>';
echo 'Saludo: '. Abc\Persona::$saludo.'<br>';