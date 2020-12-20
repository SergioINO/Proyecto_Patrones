<?php
namespace Builder;

require_once 'ConstructorDocumentoVehiculo.class.php';
require_once 'DocumentacionPdf.class.php';

class ConstructorDocumentacionVehiculoPdf extends ConstructorDocumentacionVehiculo
{

    public function __construct()
    {
        $this->documentacion = new DocumentacionPdf();
    }

    public function construyeFormularioDePedido($nombreCliente)
    {
        $documento = 
            "<PDF>Formulario de pedido Cliente : $nombreCliente</PDF>";
        $this->documentacion->agregaDocumento($documento);
    }

    public function construyeSolicitudMatriculacion(
            $nombreSolicitante)
    {
        $documento = '<PDF>Solicitud de matriculación ' .
            "Solicitante : $nombreSolicitante</PDF>";
        $this->documentacion->agregaDocumento($documento);
    }
}

?>
