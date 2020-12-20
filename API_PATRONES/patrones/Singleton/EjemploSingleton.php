<?php

namespace Singleton;

use Exception;

require_once 'models/Vendedor.class.php';
class EjemploSingleton
{
    public $nombre;
    public $direccion;
    public $email;

    public function __construct($nombre, $direccion, $email)
    {

        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->email = $email;
    }

    public function generar()
    {
        try {

            $elVendedor = Vendedor::Instance();
            $elVendedor->setNombre($this->nombre);
            $elVendedor->setDireccion($this->direccion);
            $elVendedor->setEmail($this->email);
            $r = $this->muestra();

            $respuesta = array('Estado' => "success",
                'Response' => $r);
            return $respuesta;
        } catch (Exception $e) {
            $respuesta = array('Estado' => "Error",
                'Response' => $e->getMessage());
            return $respuesta;
        }
    }

    public function muestra()
    {
        $elVendedor = Vendedor::Instance();
        return $elVendedor->muestra();
    }

}
