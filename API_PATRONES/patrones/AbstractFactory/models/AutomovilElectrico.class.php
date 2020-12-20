<?php
namespace AbstractFactory;

require_once 'Automovil.class.php';


class AutomovilElectrico extends Automovil
{

    /**
     *
     * @param string $modelo
     * @param string $color
     * @param int $potencia
     * @param double $espacio
     */
    public function __construct($modelo, $color, $potencia,$espacio) {
        parent::__construct($modelo, $color, $potencia,$espacio);
    }

    public function muestraCaracteristicas()
    {
      

        return array(
            'tipo' =>  "Electrico",
            'modelo' =>  $this->modelo,
        'color' => $this->color,
        'potencia' => $this->potencia,
        'espacio' => $this->espacio,
        );
    }
}
