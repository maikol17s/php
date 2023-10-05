<?php
class Proveedor{
    private string $codigo;
    private string $nombre;
    private string $apellido;
    private string $telefono;

    public function __construct($codigo,$nombre,$apellido,$telefono) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
    }


    //Metodo GET
    public function get_codigo(){
        return $this->codigo;
    }
    public function get_nombre(){
        return $this->nombre;
    }
    public function get_apellido(){
        return $this->apellido;
    }
    public function get_telefono(){
        return $this->telefono;
    }

    //Metodo SET
    public function set_codigo($codigo){
        $this->codigo = $codigo;
    }
    public function set_nombre($nombre){
        $this->nombre = $nombre;
    }
    public function set_apellido($apellido){
        $this->apellido = $apellido;
    }
    public function set_telefon($telefono){
        $this->telefono = $telefono;
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

$proveedor1 = new Proveedor('001','Ronald','Puerto','3016574328');
$proveedor2 = new Proveedor('002','Danna','Jimenez','31027684569');
$proveedor3 = new Proveedor('003','Cristian','Leon','3058375912');
$proveedor4 = new Proveedor('004','Valentina','Avila','3290685732');
$proveedor5 = new Proveedor('005','Daniel','Perez','3004755844');

echo '<br>'. 'Proveedor 1';
echo '<br>'.'Codigo: '. $proveedor1->get_codigo();
echo '<br>'.'Nombre: '. $proveedor1->get_nombre();
echo '<br>'.'Apellido: '. $proveedor1->get_apellido();
echo '<br>'.'Telefono: '. $proveedor1->get_telefono();
echo '<br>';

echo '<br>'. 'Proveedor 2';
echo '<br>'.'Codigo: '. $proveedor2->get_codigo();
echo '<br>'.'Nombre: '. $proveedor2->get_nombre();
echo '<br>'.'Apellido: '. $proveedor2->get_apellido();
echo '<br>'.'Telefono: '. $proveedor2->get_telefono();
echo '<br>';

echo '<br>'. 'Proveedor 3';
echo '<br>'.'Codigo: '. $proveedor3->get_codigo();
echo '<br>'.'Nombre: '. $proveedor3->get_nombre();
echo '<br>'.'Apellido: '. $proveedor3->get_apellido();
echo '<br>'.'Telefono: '. $proveedor3->get_telefono();
echo '<br>';

echo '<br>'. 'Proveedor 4';
echo '<br>'.'Codigo: '. $proveedor4->get_codigo();
echo '<br>'.'Nombre: '. $proveedor4->get_nombre();
echo '<br>'.'Apellido: '. $proveedor4->get_apellido();
echo '<br>'.'Telefono: '. $proveedor4->get_telefono();
echo '<br>';

echo '<br>'. 'Proveedor 5';
echo '<br>'.'Codigo: '. $proveedor5->get_codigo();
echo '<br>'.'Nombre: '. $proveedor5->get_nombre();
echo '<br>'.'Apellido: '. $proveedor5->get_apellido();
echo '<br>'.'Telefono: '. $proveedor5->get_telefono();
echo '<br>';

?>