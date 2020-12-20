<?php
namespace Prototype;

abstract class Documentacion implements \IteratorAggregate
{
    /**
     * 
     * @var \ArrayObject
     */
    protected $documentos;

    
    public function getIterator () {
        return $this->documentos->getIterator();
    }
    
}
?>
