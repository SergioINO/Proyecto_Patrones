<?php
namespace AbstractFactory;

interface FabricaVehiculo
{

    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     * @param double $espacio            
     * @return Automovil
     */
    public function creaAutomovil($modelo, $color, $potencia,  $espacio);

    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     * @return Scooter
     */
    public function creaScooter($modelo, $color, $potencia);
}

?>
