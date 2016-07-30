<?php

/**
 * Description of Motor20
 *
 * @author Regina
 */
class Motor20 extends Motor{
     const TAMANHO = 2.0;
     
     private $rebinboca;
     
     public function alterarRebinboca($valor)
     {
         $this->rebinboca = $valor;
         $this->parafuseta = $valor;
         $this->aceleracao = 123;
     }
     
     public function acelerar($potencia) {
         
     }
         
}
