<?php
class Saludo {

    public function saludar($nombre = "Usuario") { // Se crea una funcion en la cual se el pasa como argymento $nombre y se le agrega una cadena por defecto "Usuario"
        echo "Hola, $nombre!";
    }
}

// Instancia la clase
$saludo = new Saludo();

// Llamar al método sin proporcionar un valor
$saludo->saludar(); // Imprimirá "Hola, Usuario!"

echo '<br>';

// Llamar al método con un valor
$saludo->saludar("Juan"); // Imprimirá "Hola, Juan!"
?>