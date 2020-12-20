<?php
namespace AbstractFactory;

require_once 'FabricaVehiculo.class.php';
require_once 'AutomovilGasolina.class.php';
require_once 'ScooterGasolina.class.php';

class FabricaVehiculoGasolina implements FabricaVehiculo
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
        return new AutomovilGasolina($modelo, $color, $potencia, $espacio);
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
        return new ScooterGasolina($modelo, $color, $potencia);
    }
}

?>
