<!-- Clases -->

<?php
//Una clase es una plantilla que dice como son los datos
//Un objeto es el dato propiamente
class Aprendiz{

    //propiedades o atributos de la clase

    public string $tipo_doc;
    public string $num_documento;
    public string $nombre;
    public string $apellido;
    public string $correo;
    public int $edad;
    public float $peso;
    public bool $activo;

public function __construct($tipo_doc, $num_documento, $nombre,$apellido,$correo,$edad,$peso,$activo){
    
    $this->tipo_doc= $tipo_doc;
    $this->num_documento= $num_documento;
    $this->nombre= $nombre;
    $this->apellido= $apellido;
    $this->correo= $correo;
    $this->edad= $edad;
    $this->peso= $peso;
    $this->activo= $activo;
}
}
//Crear una objeto o instancia
$aprendiz1 = new Aprendiz('C.C','193847533','Luisa','Perez','perez@gmail.com',20,80.9,1);

echo '<br>' . 'Tipo de Documento: '. $aprendiz1->tipo_doc;
echo '<br>' . 'Numero de Documento: '. $aprendiz1->num_documento;
echo '<br>' . 'Nombre: '. $aprendiz1->nombre;
echo '<br>' . 'Apellido: '. $aprendiz1->apellido;
echo '<br>' . 'Correo: '. $aprendiz1->correo;
echo '<br>' . 'Edad: '. $aprendiz1->edad;
echo '<br>' . 'Peso: '. $aprendiz1->peso;
echo '<br>' . 'Estado: '. $aprendiz1->activo;

?>