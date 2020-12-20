<?php

namespace Prototype;

use Exception;

require_once 'models/DocumentacionEnBlanco.class.php';
require_once 'models/FormularioDePedido.class.php';
require_once 'models/CertificadoCesion.class.php';
require_once 'models/SolicitudMatriculacion.class.php';
require_once 'models/DocumentacionCliente.class.php';

class EjemploPrototype
{

    public $cliente;
    public $opcion;

    public function __construct($cliente, $opcion)
    {

        $this->cliente = $cliente;
        $this->opcion = $opcion;

    }

    public function generar()
    {
        try {

            $documentacionEnBlanco = DocumentacionEnBlanco::Instance();
            $documentacionEnBlanco->agrega(new FormularioDePedido());
            $documentacionEnBlanco->agrega(new CertificadoCesion());
            $documentacionEnBlanco->agrega(new SolicitudMatriculacion());

            $documentacionCliente = new DocumentacionCliente($this->cliente);

            switch ($this->opcion) {
                case 1:
                    //var_dump($documentacionCliente);
                    $r = $documentacionCliente->muestra();
                    break;
                case 2:
                    //var_dump($documentacionCliente);
                    $r = $documentacionCliente->imprime();
                    break;
                default:

                    throw new \Exception("Opción " . $this->opcion . " desconocida --Opciones disponibles:: opc 1: muestra -opc 2: imprime ");

            }

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
