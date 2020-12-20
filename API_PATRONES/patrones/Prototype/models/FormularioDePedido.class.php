<?php
namespace Prototype;

require_once 'Documento.class.php';


class FormularioDePedido extends Documento
{
    public function muestra()
    {
                return array(
                    'acción' =>  "mostrar",
                    'Documento' =>  "fomulario de pedido",
                    'cantidad' => $this->contenido,
                );
    }

    public function imprime()
    {
                return array(
                    'acción' =>  "imprimir",
                    'Documento' =>  "fomulario de pedido",
                    'cantidad' => $this->contenido,
                );
    
    }
}


?>
