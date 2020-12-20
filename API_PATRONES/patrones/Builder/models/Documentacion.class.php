<?php
namespace Builder;

abstract class Documentacion
{
    /**
     * 
     * @var "Lista de string"
     */
    protected $contenido = array();
    
    /**
     *
     * @param string $documento            
     */
    public abstract function agregaDocumento($documento);

    public abstract function imprime();
}

?>
