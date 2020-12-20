<?php
namespace Prototype;

require_once 'Documento.class.php';


class SolicitudMatriculacion extends Documento
{
    public function muestra()
    {
      
        return array(
            'acción' =>  "mostrar",
            'Documento' =>  "Matriculación",
            'cantidad' => $this->contenido,
        );
    }

    public function imprime()
    {

        return array(
            'acción' =>  "imprimir",
            'Documento' =>  "Matriculación",
            'cantidad' => $this->contenido,
        );
    }
}


?>
