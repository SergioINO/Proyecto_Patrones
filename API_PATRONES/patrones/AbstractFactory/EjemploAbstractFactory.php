<?php

namespace AbstractFactory;

use Exception;

require_once 'models/FabricaVehiculoElectrico.class.php';
require_once 'models/FabricaVehiculoGasolina.class.php';

class EjemploAbstractFactory
{
    public $opcion;
    public $num_autos;
    public $num_scooters;
    public $autos;
    public $scooters;

    public function __construct($opcion, $num_autos=0, $num_scooters=0)
    {

        $this->opcion = $opcion;
        $this->num_autos = $num_autos;
        $this->num_scooters = $num_scooters;
    }

    public function generar()
    {
        try {

            switch ($this->opcion) {
                case 1:
                    $fabrica = new FabricaVehiculoElectrico();
                    break;
                case 2:
                    $fabrica = new FabricaVehiculoGasolina();
                    break;
                default:
                    throw new \Exception("Opción ".$this->opcion." desconocida --Opciones disponibles:: opc 1: FabricaVehiculosElectricos -opc 2: FabricaVehiculoGasolina ");

            }

            

            for ($i = 0; $i < $this->num_autos; $i++) {
                $autos[$i] = $fabrica->creaAutomovil('SUV_N'. $i, 'amarillo', 6 + $i, 3.2);
            }
            for ($i = 0; $i < $this->num_scooters; $i++) {
                $scooters[$i] = $fabrica->creaScooter('clasico_N'. $i, 'rojo', 2 + $i);
            }

            $r = array("autos" => $autos,
                "scooters" => $scooters);
          
            $respuesta = array('Estado' => "success",
                'Response' => $r);
            return $respuesta;
        } catch (Exception $e) {
            $respuesta = array('Estado' => "Error",
                'Response' => $e->getMessage());
            return $respuesta;
        }
    }

}
