<?php
namespace FactoryMethod;

require_once 'Cliente.class.php';
require_once 'PedidoContado.class.php';

class ClienteContado extends Cliente
{

    protected function creaPedido($cantidad)
    {
        return new PedidoContado($cantidad);
    }
}

?>

