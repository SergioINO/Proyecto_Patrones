<?php
namespace Prototype;

require_once 'Documentacion.class.php';

class DocumentacionEnBlanco extends Documentacion
{
    /**
     * @var DocumentacionEnBlanco
     */
    private static $_instance = null;

    private function __construct()
    {
        $this->documentos = new \ArrayObject();
    }

    /**
     * 
     * @return DocumentacionEnBlanco
     */
    public static function Instance()
    {
        if (!isset(DocumentacionEnBlanco::$_instance))
        {
            DocumentacionEnBlanco::$_instance = new DocumentacionEnBlanco();
        }
        return DocumentacionEnBlanco::$_instance;
    }

    /**
     * 
     * @param Documento $doc
     */
    public function agrega(Documento $doc)
    {
        $this->documentos[] = $doc;
    }

    /**
     * 
     * @param Documento $doc
     */
    public function retira(Documento $doc)
    {
        $indice = null;
        foreach ($this->documentos as $key => $valor) {
            if ($doc === $valor) {
                $indice = $key;
            }
        }
        if (isset($indice)) {
            $this->documentos->offsetUnset($indice);
        }
    }
}


?>
