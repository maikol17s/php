<?php

// //Recibir datos enviados por el formulario web

$num1= $_POST['operador1'];

$num2 = $_POST['operador2'];

$operacion = $_POST['operacion'];

// echo 'El operador 1 es: '.$num1 . '<br>';

// echo 'El operador 1 es: '.$num2. '<br>';

// function operaciones(){
//     $num1= $_POST['operador1'];

//     $num2 = $_POST['operador2'];

//     if ($operacion = 'sumar'){
//         echo '<br>'. 'Suma: '.$num1 + $num2;
//     }
//     if ($operacion = 'restar'){
//         echo '<br>'. 'Resta: '.$num1 - $num2;
//     }
//     if ($operacion = 'multiplicar'){
//         echo '<br>'. 'Multiplicacion: '.$num1 * $num2;
//     }
//     if ($operacion = 'dividir'){
//         echo '<br>'. 'Division: '.$num1 / $num2;
//     }

// }

class Operaciones{
    private int $operador1;
    private int $operador2;

    public function __construct() {
    }

    public function get_operador1(){
        return $this->operador1;
    }

    public function set_operando1(int $operando1){
        if(!empty($operador1) && is_numeric($operador1)){
            $this->operador1 = $operador1;
        }
        }
        public function get_operando2(){
        return $this->operador2;
        }
        public function set_operando2(int $operando2){
        if(!empty($operador2) && is_numeric($operando2)){
        $this->operador2 = $operador2;
        }
        }

    public function sumar(int $operador1, int $operador2){
        return  $operador1 + $operador2;
    }

    public function restar(int $operador1, int $operador2){
        return $operador1 - $operador2;
    }

    public function multiplicar(int $operador1,$operador2){
        return $operador1 * $operador2;
    }

    public function dividir(int $operador1,int $operador2){
        if ($operador2 != 0) {
            return $operador1 / $operador2;
        }
        else {
            echo 'No es posible dividir por cero';
        return;
        }
}
}

$operaciones = new Operaciones($num1, $num2);

if ($operacion === 'sumar') {
    echo 'SUMA: ' . $operaciones->sumar($num1,$num2) . '<br>';
}
elseif ($operacion === 'restar') {
    echo 'RESTA: ' . $operaciones->restar($num1,$num2) . '<br>';
}
elseif ($operacion === 'multiplicar') {
    echo 'MULTIPLICACION: ' . $operaciones->multiplicar($num1,$num2) . '<br>';
}
elseif ($operacion === 'dividir') {
    echo 'DIVISION: ' . $operaciones->dividir($num1,$num2) . '<br>';
}
