<?php
// Definir una interfaz
interface Animal {
    public function Sonido();
    public function moverse();
}

// Clase que implementa la interfaz para representar un perro
class Perro implements Animal {
    public function Sonido() {
        echo "El perro ladra.<br>";
    }

    public function moverse() {
        echo "El perro se mueve corriendo.<br>";
    }
}

// Clase que implementa la interfaz para representar un gato
class Gato implements Animal {
    public function Sonido() {
        echo "El gato maulla.<br>";
    }

    public function moverse() {
        echo "El gato se desplaza lento.<br>";
    }
}

// Se realiza la función que utiliza la interfaz para hacer sonidos y mover animales
function interactuarConAnimal(Animal $animal) {
    $animal->Sonido();
    $animal->moverse();
}

// Crear nuevos objetos 
$perro = new Perro();
$gato = new Gato();

echo "Interacción con un perro:<br>";
interactuarConAnimal($perro);

echo "Interacción con un gato:<br>";
interactuarConAnimal($gato);
?>
