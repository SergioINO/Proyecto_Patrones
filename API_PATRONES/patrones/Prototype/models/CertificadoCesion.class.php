<?php
namespace Prototype;

require_once 'Documento.class.php';


class CertificadoCesion extends Documento
{
    public function muestra()
    {
  
        return array(
            'acción' =>  "mostrar",
            'Documento' =>  "certificado cesión",
            'cantidad' => $this->contenido,
        );

    }

    public function imprime()
    {
   
        return array(
            'acción' =>  "imprimir",
            'Documento' =>  "certificado cesión",
            'cantidad' => $this->contenido,
        );

    }
}

?>
