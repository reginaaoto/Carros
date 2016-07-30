<?php
/**
 * Classe generica para fabricacao de um carro
 * @package GM
 * @author Regina
 * @since 30/07/2016
 */

class Carro implements JsonSerializable{
  const modelo = "Vectra";
 
  public $cor;
  public $rodas;
  public $portas;
  
  private $ano;
  private $motor;
  private $combustivel = 0;

/**
 * Construtor do Objeto
 * @param type $cor
 * @param type $rodas
 * @param type $ano
 */    
  public function __construct(Motor $motor){
    $this->motor = $motor;
  }
  
/**
 * Abastece o carro com a quantidade informada
 * @param  int $litros
 * @return int
 */  
  public function abastecer($litros){
    $this->combustivel += $litros; 
    return $this->combustivel;
  }
  
  public function ligar(){
  
  }
  
  public function desligar(){
  
  }
  
  private function andar(){
  
  }
  
  public function acelerar(){
  
  }
  
  public function frear(){
  
  }
  
  public function jsonSerialize() {
      return self::modelo;
      
  }

}


