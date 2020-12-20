<?php
namespace FactoryMethod;

abstract class Pedido
{
    /**
     * 
     * @var double
     */
    public $cantidad;
    public $statusPago;
    
    /**
     *
     * @param double $cantidad            
     */
    public function __construct($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     *
     * @return boolean
     */
    public abstract function valida();

    /**
     * @return void
     */
    public abstract function paga();
}
?>
