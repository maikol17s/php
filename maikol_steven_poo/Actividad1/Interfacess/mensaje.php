<?php
// Definir una interfaz
interface Notificacion {
    public function Notificacion($mensaje);
}

// Se crea una clase que implementa la interfaz para enviar notificaciones por correo electrónico
class CorreoElectronico implements Notificacion {
    public function Notificacion($mensaje) {
        echo "Enviando correo electrónico: $mensaje<br>";
    }
}

// Se crea una clase que implementa la interfaz para enviar notificaciones por mensaje de texto
class MensajeTexto implements Notificacion {
    public function Notificacion($mensaje) {
        echo "Enviando mensaje de texto: $mensaje<br>";
    }
}

// Se creana una función para utiliza la interfaz para enviar notificaciones
function Notificacion(Notificacion $notificador, $mensaje) {
    $notificador->Notificacion($mensaje);
}

// Crear nuevos objetos 
$correo = new CorreoElectronico();
$mensajeTexto = new MensajeTexto();

Notificacion($correo, "Se envio el correo !Bien¡");
Notificacion($mensajeTexto, "Hola Interface");
?>
