<?php
namespace FactoryMethod;

require_once 'Cliente.class.php';
require_once 'PedidoCredito.class.php';

class ClienteCredito extends Cliente
{

    protected function creaPedido($cantidad)
    {
        return new PedidoCredito($cantidad);
    }
}

?>
