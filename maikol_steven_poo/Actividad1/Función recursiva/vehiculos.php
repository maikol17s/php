<?php
// Definimos una función recursiva que crea una lista de vehículos.
function ListaVehiculos($cantidad) {
    // Verificamos si la cantidad de vehículos es 0.
    if ($cantidad <= 0) {
        return "No hay vehículos en la lista.";
    } else {
        // Llamamos a la función recursivamente con una cantidad menor.
        $vehiculos = ListaVehiculos($cantidad - 1);
        // Agregamos un vehículo a la lista actual.
        $vehiculoActual = "Vehículo " . $cantidad;
        return $vehiculos . "\n" . $vehiculoActual;
    }
}

// Llamamos a la función para crear una lista de 5 vehículos.
$listaDeVehiculos = ListaVehiculos(5);

// Imprimimos la lista de vehículos.
echo "Lista de vehículos:\n$listaDeVehiculos";
?>
