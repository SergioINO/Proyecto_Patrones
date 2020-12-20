<?php
namespace AbstractFactory;

require_once 'Scooter.class.php';


class ScooterElectrico extends Scooter
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
            'tipo' =>  "Electrico",
            'modelo' =>  $this->modelo,
        'color' => $this->color,
        'potencia' => $this->potencia,
        );
    }
}

?>
