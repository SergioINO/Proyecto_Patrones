<?php
namespace Builder;

abstract class ConstructorDocumentacionVehiculo
{
    /**
     * 
     * @var Documentacion
     */
    protected $documentacion;
    
    /**
     *
     * @param string $nombreCliente            
     */
    public abstract function construyeFormularioDePedido($nombreCliente);

    /**
     *
     * @param string $nombreSolicitante            
     */
    public abstract function construyeSolicitudMatriculacion(
            $nombreSolicitante);

    /**
     *
     * @return Documentacion
     */
    public function resultado()
    {
        return $this->documentacion;
    }
}

?>
