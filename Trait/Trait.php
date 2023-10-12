<?php
trait mensaje {
public function imprimerMensaje() {
    echo "Usando un trait de PHP para POO!";
  }
}

class Bienvenido {
  use mensaje;
}

$objeto1 = new Bienvenido();
$objeto1->imprimerMensaje();

?>