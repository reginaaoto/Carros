<?php

/**
 * Motor Generico para ser usado em nossa fabrica
 *
 * @author Regina
 */
abstract class Motor {
    const TIPO_COMBUSTIVEL = 'Gasolina';
    const TAMANHO = 1.0;
    
    protected $aceleracao = 0;
    private $ligado = false;
    
    public $parafuseta;
    
    /**
     *  Liga ou desliga o motor
     * @param bool $ligar
     */
    public function ligar($ligar)
    {
       $this->ligado = $ligar;     
    }
 
    /**
     *  Acelera o motor com uma potência entre 0 - 100
     * @param int $potencia
     */
    public function acelerar($potencia)
    {
       $this->aceleracao = $potencia;
    }

    
}
