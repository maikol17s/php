<?php
//Encapsulamiento
class Docente{

    private string $tipo_doc;
    private string $num_doc;

    public function __construct($tipo_doc,$num_doc) {
        $this->tipo_doc = $tipo_doc;
        $this->num_doc = $num_doc;
    }
    //Metodos GETpara obtener los datos de la clase:

    public function get_tipo_doc(){
        return $this->tipo_doc;
    }

    public function get_num_doc(){
        return $this->num_doc;
    }

    public function set_tipo_doc($tipo_doc){
        $this->tipo_doc = $tipo_doc;
    }

    public function set_num_doc($num_doc){
        $this->num_doc = $num_doc;
    }

}
//Crear una objeto o instancia
$docente1 = new Docente('C.C','30785000');
$docente2 = new Docente('T.I','20785000');
$docente3 = new Docente('R.C','30900000');
$docente4 = new Docente('T.I','985000');
$docente5 = new Docente('C.C','1070500');

//Creamos un objeto $docento1 ese objeto invoca el metodo
echo '<br>'. 'Docente 1';
echo '<br>'.'Tipo Documento: '. $docente1->get_tipo_doc();
echo '<br>'.'Numero de Documento: '. $docente1->get_num_doc();
echo '<br>';

echo '<br>'. 'Docente 2';
echo '<br>'.'Tipo Documento: '. $docente2->get_tipo_doc();
echo '<br>'.'Numero de Documento: '. $docente2->get_num_doc();
echo '<br>';

echo '<br>'. 'Docente 3';
echo '<br>'.'Tipo Documento: '. $docente3->get_tipo_doc();
echo '<br>'.'Numero de Documento: '. $docente3->get_num_doc();
echo '<br>';

echo '<br>'. 'Docente 4';
echo '<br>'.'Tipo Documento: '. $docente4->get_tipo_doc();
echo '<br>'.'Numero de Documento: '. $docente4->get_num_doc();
echo '<br>';

echo '<br>'. 'Docente 5';
echo '<br>'.'Tipo Documento: '. $docente5->get_tipo_doc();
echo '<br>'.'Numero de Documento: '. $docente5->get_num_doc();

//El objeto $docente1 llama al metodo que asigna el tipo de metodo
$docente1->set_tipo_doc('C.C');
$docente1->set_num_doc('30785000');
echo '<br>';
$docente2->set_tipo_doc('T.I');
$docente2->set_num_doc('20785000');
echo '<br>';
$docente3->set_tipo_doc('R.C');
$docente3->set_num_doc('30900000');
echo '<br>';
$docente4->set_tipo_doc('T.I');
$docente4->set_num_doc('985000');
echo '<br>';
$docente5->set_tipo_doc('C.C');
$docente5->set_num_doc('1070500');


//municipio y probedor 
?>
