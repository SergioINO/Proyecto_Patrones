<?php
namespace AbstractFactory;

require_once 'Scooter.class.php';


class ScooterGasolina extends Scooter
{

    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     */
    public function __construct($modelo, $color, $potencia)
    {
        parent::__construct($modelo, $color, $potencia);
    }

    public function muestraCaracteristicas()
    {
        return array(
            'tipo' =>  "Gasolina",
            'modelo' =>  $this->modelo,
        'color' => $this->color,
        'potencia' => $this->potencia,
    );
    }
}

?>
