<?php
namespace Builder;

require_once 'ConstructorDocumentoVehiculo.class.php';
require_once 'DocumentacionHtml.class.php';

class ConstructorDocumentacionVehiculohtml extends ConstructorDocumentacionVehiculo
{

    public function __construct()
    {
        $this->documentacion = new Documentacionhtml();
    }

    public function construyeFormularioDePedido($nombreCliente)
    {
        $documento = 
            "<HTML>Formulario de pedido Cliente: $nombreCliente</HTML>";
        $this->documentacion->agregaDocumento($documento);
    }

    public function construyeSolicitudMatriculacion(
            $nombreSolicitante)
    {
        $documento = '<HTML>Solicitud de matriculaci�n ' .
            "Solicitante : $nombreSolicitante</HTML>";
        $this->documentacion->agregaDocumento($documento);
    }
}

?>
