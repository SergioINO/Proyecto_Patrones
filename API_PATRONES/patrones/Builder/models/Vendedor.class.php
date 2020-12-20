<?php
namespace Builder;

require_once 'ConstructorDocumentoVehiculo.class.php';

class Vendedor
{
    /**
     * 
     * @var ConstructorDocumentacionVehiculo
     */
    protected $constructor;
    
    /**
     *
     * @param ConstructorDocumentacionVehiculo $constructor            
     */
    public function __construct(ConstructorDocumentacionVehiculo $constructor)
    {
        $this->constructor = $constructor;
    }

    /**
     *
     * @param string $nombreCliente            
     * @return Documentacion
     */
    public function construye($nombreCliente)
    {
        $this->constructor->construyeFormularioDePedido($nombreCliente);
        $this->constructor->construyeSolicitudMatriculacion($nombreCliente);
        return $this->constructor->resultado();
    }
}

?>
