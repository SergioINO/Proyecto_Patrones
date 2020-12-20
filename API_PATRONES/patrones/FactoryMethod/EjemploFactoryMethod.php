<?php

namespace FactoryMethod;

use Exception;

require_once 'models/ClienteContado.class.php';
require_once 'models/ClienteCredito.class.php';

class EjemploFactoryMethod
{
    public $opcion;
    public $monto;

    public function __construct($opcion, $monto)
    {

        $this->opcion = $opcion;
        $this->monto = $monto;

    }

    public function generar()
    {
        try {

            switch ($this->opcion) {
                case 1:
                    $client = new ClienteContado();
                    break;
                case 2:
                    $client = new ClienteCredito();
                    break;
                default:

                    throw new \Exception("Opción " . $this->opcion . " desconocida --Opciones disponibles:: opc 1: ClienteContado -opc 2: ClienteCredito ");

            }

            $client->nuevoPedido($this->monto);
            $client->nuevoPedido($this->monto * $this->monto);

            $r = $client->getPedidos();

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
