<?php
declare(strict_types=1);
//Crear superclase automotor
class Computador{
    private string $fabricante;
    private string $cap_Memoria;
    private string $tipo_Memoria;
    private string $tipo_Almacenamiento;
    private string $capAlmacenamiento;
    private string $sistema_Operativo;
    private string $suiete_Oficina;
    private string $procesador;
    private int $num_Puerto_USB;
    public static $contador = 0;
   
    public function __construct(string $fabricante, string $cap_Memoria, string $tipo_Memoria,string $tipo_Almacenamiento,string $capAlmacenamiento,string $sistema_Operativo,string $suiete_Oficina,string $procesador,int $num_Puerto_USB){
        $this->fabricante = $fabricante;
        $this->cap_Memoria = $cap_Memoria;
        $this->tipo_Memoria = $tipo_Memoria;
        $this->tipo_Almacenamiento= $tipo_Almacenamiento;
        $this->capAlmacenamiento = $capAlmacenamiento;
        $this->sistema_Operativo = $sistema_Operativo;
        $this->suiete_Oficina = $suiete_Oficina;
        $this->procesador = $procesador;
        $this->num_Puerto_USB = $num_Puerto_USB;
    }
    
    public function get_fabricante(){
        return $this->fabricante;
    }

    public function get_cap_Memoria(){
        return $this->cap_Memoria;
    }

    public function get_tipo_Memoria(){
        return $this->tipo_Memoria;
    }

    public function get_tipo_Almacenamiento(){
        return $this->tipo_Almacenamiento;
    }

    public function get_capAlmacenamiento(){
        return $this->capAlmacenamiento;
    }

    public function get_sistema_Operativo(){
        return $this->sistema_Operativo;
    }

    public function get_suiete_Oficina(){
        return $this->suiete_Oficina;
    }

    public function get_procesador(){
        return $this->procesador ;
    }

    public function get_num_Puerto_USB(){
        return $this->num_Puerto_USB ;
    }

    //Devolver fecha
    public static function obtener_fecha(){
        return date('Y-m-d');
    }

    public function contar(){
        echo "Conteo: " . self::$contador+=1;
        return;
    }

}

?>
