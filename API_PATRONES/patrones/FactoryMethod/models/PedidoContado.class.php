<?php
namespace FactoryMethod;

//require_once '../Herramientas.class.php';
require_once 'Pedido.class.php';

class PedidoContado extends Pedido
{

    /**
     *
     * @param double $cantidad            
     */
    public function __construct($cantidad)
    {
        parent::__construct($cantidad);
    }

    public function paga()
    {
        
                 $this->statusPago=array(
                    'tipoPago' =>  "Contado",
                    'cantidad' =>  number_format($this->cantidad, 2, ',', ' '),
                    'pagoRealizado' =>  true,
                
                );
    }

    public function valida()
    {
        return true;
    }
}

?>
