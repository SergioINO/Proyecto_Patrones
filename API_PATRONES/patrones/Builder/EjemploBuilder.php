<?php

namespace Builder;

use Exception;


require_once 'models/ConstructorDocumentoVehiculoHtml.class.php';
require_once 'models/ConstructorDocumentoVehiculoPdf.class.php';
require_once 'models/Vendedor.class.php';
class EjemploBuilder
{
    public $opcion;
    public $cliente;


    public function __construct($opcion,$cliente)
    {

        $this->opcion = $opcion;
        $this->cliente = $cliente;
     
    }

    public function generar()
    { 
        try {

            switch ($this->opcion) {
                case 1:
                    $constructor = new ConstructorDocumentacionVehiculohtml();
                    break;
                case 2:
                    $constructor = new ConstructorDocumentacionVehiculoPdf();
                    break;
                default:

                    throw new \Exception("Opción ".$this->opcion." desconocida --Opciones disponibles:: opc 1: ConstructorDocumentacionVehiculohtml -opc 2: ConstructorDocumentacionVehiculoPdf ");

            }

            $vendedor = new Vendedor($constructor);
            $documentacion = $vendedor->construye($this->cliente);
           
            $r=$documentacion->imprime();

           
          
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
