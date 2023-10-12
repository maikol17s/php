<?php 
//Espacio de nombres para las clases de la empresa ABC
//No debe escribir codigo PHP antes del namespace

namespace Abc;

class Persona{
    public string $nombre;
    public string $correo;
    public static string $saludo;

    public function __construct(
        string $nombre,
        string $correo,
        string $saludo)
    {
        $this->nombre=$nombre;
        $this->correo=$correo;
        self::$saludo=$saludo;
    }
    public function obtenerDatos(){
        print_r($this->nombre,$this->correo,self::$saludo);
    }
}