<?php
namespace Prototype;

require_once 'Documentacion.class.php';

class DocumentacionCliente extends Documentacion
{
    /**
     * 
     * @param string $informacion
     */
    public function __construct($informacion)
    {
        $this->documentos = new \ArrayObject();
        $laDocumentacionEnBlanco = DocumentacionEnBlanco::Instance();
        foreach ($laDocumentacionEnBlanco as $documento)
        {
            $copiaDocumento = $documento->duplica();
            $copiaDocumento->rellena($informacion);
            $this->documentos[] = $copiaDocumento;
        }
    }

    public function muestra()
    {
        $lista=[];
        foreach ($this as $documento) {
            $lista[]=$documento->muestra();
        }
        return $lista;

    }

    public function imprime()
    {
        $lista=[];
        foreach ($this as $documento){
            $lista[]=$documento->imprime();

        }

        return $lista;
    }
}

?>
