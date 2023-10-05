<?php
class Municipio{
    private string $codigo;
    private string $nombre;
    private string $numero_habi;

    public function __construct($codigo,$nombre,$numero_habi) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->numero_habi = $numero_habi;
    }


    //Metodo GET
    public function get_codigo(){
        return $this->codigo;
    }
    public function get_nombre(){
        return $this->nombre;
    }
    public function get_numero_habi(){
        return $this->numero_habi;
    }

    //Metodo SET
    public function set_codigo($codigo){
        $this->codigo = $codigo;
    }
    public function set_nombre($nombre){
        $this->nombre = $nombre;
    }
    public function set_numero_habi($numero_habi){
        $this->numero_habi = $numero_habi;
    }
}
//Devolver fecha
function devolver_fecha(){
    $fecha_hora= date('Y-M-D H:i:s');
    return $fecha_hora;
}
$fecha_hora = devolver_fecha();
echo '<br>'.'La fecha y la hora actual es: '.$fecha_hora; 

//Instancias

$municipio1 = new Municipio('001','Medellin','2,569 millones de habitantes');
$municipio2 = new Municipio('002','cali','2,228 millones de habitantes');
$municipio3 = new Municipio('003','Barranquilla','1,206 millones de habitantes');
$municipio4 = new Municipio('004','Cartagena',' 914.552 de habitantes');
$municipio5 = new Municipio('005','Bucaramanga','581.130 de habitantes');

echo '<br>'. 'Municipio 1';
echo '<br>'.'Codigo: '. $municipio1->get_codigo();
echo '<br>'.'Nombre: '. $municipio1->get_nombre();
echo '<br>'.'Numero Habitantes: '. $municipio1->get_numero_habi();
echo '<br>';

echo '<br>'. 'Municipio 2';
echo '<br>'.'Codigo: '. $municipio2->get_codigo();
echo '<br>'.'Nombre: '. $municipio2->get_nombre();
echo '<br>'.'Numero Habitantes: '. $municipio2->get_numero_habi();
echo '<br>';

echo '<br>'. 'Municipio 3';
echo '<br>'.'Codigo: '. $municipio3->get_codigo();
echo '<br>'.'Nombre: '. $municipio3->get_nombre();
echo '<br>'.'Numero Habitantes: '. $municipio3->get_numero_habi();
echo '<br>';

echo '<br>'. 'Municipio 4';
echo '<br>'.'Codigo: '. $municipio4->get_codigo();
echo '<br>'.'Nombre: '. $municipio4->get_nombre();
echo '<br>'.'Numero Habitantes: '. $municipio4->get_numero_habi();
echo '<br>';

echo '<br>'. 'Municipio 5';
echo '<br>'.'Codigo: '. $municipio5->get_codigo();
echo '<br>'.'Nombre: '. $municipio5->get_nombre();
echo '<br>'.'Numero Habitantes: '. $municipio5->get_numero_habi();
echo '<br>';

?>