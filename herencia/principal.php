<?php
require('Empleado.php');  //Importar obligatoriamente
// require_once('Empleado.php');//Importar una sola vez de obligatoriamente
// include('Empleado.php');//Importar de forma opcional
// include_once('Empleado.php');//Importar de forma opcional una sola vez

//Creando la instancia de Empleado
$empleado1 = new Empleado('Juan', '25-3-2000');
$empleado2 = new Empleado('Juana', '25-4-1996');
$empleado3 = new Empleado('Maritza', '20-7-1996');


//Objeto empleado invocando un método no estático clásico
$empleado1->metodoNoEstatico();

//Clase Empleado invocando a un método estático con el operador PHP ::
Empleado::metodoEstatico();

//Clase Empleado invocando y modificando su atributo estático
Empleado::$nacionalidad = 'colombiana';
echo "Tengo nacionalidad " . Empleado::$nacionalidad.'<br>';
$empleado1->contar();
echo '<br>';
$empleado1->contar();
echo '<br>';
$empleado1->contar();
