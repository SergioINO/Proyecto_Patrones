<?php
namespace AbstractFactory;

abstract class Automovil
{
    /**
     * 
     * @var string
     */
    public $modelo;
    /**
     * 
     * @var string
     */
    public $color;
    /**
     * 
     * @var int
     */
    public $potencia;
    /**
     * 
     * @var double
     */
    public $espacio;
    
    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     * @param double $espacio            
     */
    public function __construct($modelo, $color, $potencia, $espacio)
    {
        $this->modelo = $modelo;
        $this->color = $color;
        $this->potencia = $potencia;
        $this->espacio = $espacio;
    }

    public abstract function muestraCaracteristicas();
}

?>
