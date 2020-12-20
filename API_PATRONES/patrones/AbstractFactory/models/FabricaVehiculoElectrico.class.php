<?php
namespace AbstractFactory;

require_once 'FabricaVehiculo.class.php';
require_once 'AutomovilElectrico.class.php';
require_once 'ScooterElectrico.class.php';

class FabricaVehiculoElectrico implements FabricaVehiculo
{

    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     * @param double $espacio            
     * @return Automovil
     */
    public function creaAutomovil($modelo, $color, $potencia, $espacio)
    {
        return new AutomovilElectrico($modelo, $color, 
                $potencia, $espacio);
    }

    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     * @return Scooter
     */
    public function creaScooter($modelo, $color, $potencia)
    {
        return new ScooterElectrico($modelo, $color, $potencia);
    }
}

?>
