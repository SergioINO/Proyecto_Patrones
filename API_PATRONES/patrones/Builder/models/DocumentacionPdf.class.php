<?php
namespace Builder;

require_once 'Documentacion.class.php';

class DocumentacionPdf extends Documentacion
{

    /**
     *
     * @param string $documento            
     */
    public function agregaDocumento($documento)
    {
      
            $this->contenido[] = $documento;
  
    }

    public function imprime()
    {
    
        return array(
            'tipoDocumento' =>  "PDF",
            'contenido' =>  $this->contenido,
        
        );
    }
}

?>
